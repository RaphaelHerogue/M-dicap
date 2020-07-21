<?php
  class auth
  {
    private $options = [
        'restriction_msg' => "Vous n'avez pas le droit d'accéder à cette page"
    ];
    private $session;

    public function __construct($session, $options = [])
    {
        $this->options = array_merge($this->options, $options);
        $this->session = $session;
    }

    public function register($db, $username, $name, $password, $email)
    {
      $type = "sha3-512";
      $mdpCrypt = hash($type, $password);

        $db->query("INSERT INTO users SET FIRSTNAME = ?, NAME = ?, PSW = ?, MAIL = ? ",[
            $username,
            $name,
            $mdpCrypt,
            $email,
        ]);
        $user_id = $db->lastInsertId();
        mail($email, 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://local.dev/Lab/Comptes/confirm.php?id=$user_id");
    }

    public function restrict()
    {
        if(!$this->session->read('auth'))
        {
          $this->session->setFlash('danger', $this->options['restriction_msg']);
          header('Location: login.php');
          exit();
        }
    }

    public function login($db, $mail, $password, $remember = false)
    {
      $type = "sha3-512";
      $mdpCrypt = hash($type, $password);
      $user = $db->query("SELECT * FROM users WHERE MAIL = ?", [$mail])->fetch();
      var_dump($user);
      $mdpVerifie = similar_text($mdpCrypt, $user->PSW,  $perc);
      var_dump($perc);
      if($perc == 100)
      {
        $this->connect($user);
        if($remember)
        {
          $this->remember($db, $user->id);
        }
        return $user;
      }
        else
        {
          return false;
        }
    }

    public function user()
    {
        if(!$this->session->read('auth'))
        {
            return false;
        }
        return $this->session->read('auth');
    }

    public function connect($user)
    {
      $this->session->write('auth', $user);
    }

    public function connectFromCookie($db)
    {
      if(isset($_COOKIE['REMEMBER']) && !$this->user())
      {
        $remember_token = $_COOKIE['REMEMBER'];
        $parts = explode('==', $remember_token);
        $user_id = $parts[0];
        $user = $db->query('SELECT * FROM users WHERE id = ?', [$user_id])->fetch();
        if($user)
        {
          $expected = $user_id . '==' . $user->remember_token . sha1($user_id . 'ratonlaveurs');
          if($expected == $remember_token)
          {
            $this->connect($user);
            setcookie('REMEMBER', $remember_token, time() + 60 * 60 * 24 * 7);
          }
            else
            {
              setcookie('REMEMBER', null, -1);
            }
        }
          else
          {
            setcookie('REMEMBER', null, -1);
          }
      }
    }

    public function remember($db, $user_id)
    {
      $remember_token = Str::random(250);
      $db->query('UPDATE users SET REMEMBER = ? WHERE MAIL = ?', [$remember_token, $mail]);
      setcookie('REMEMBER', $mail . '==' . $remember_token . sha1($user_id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
    }

    public function logout()
    {
      setcookie('REMEMBER', NULL, -1);
      $this->session->delete('auth');
    }

    public function resetPassword($db, $email)
    {
      $user = $db->query('SELECT * FROM users WHERE email = ? AND confirmed_at IS NOT NULL', [$email])->fetch();
      if($user)
      {
        $reset_token = Str::random(60);
        $db->query('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?', [$reset_token, $user->id]);
        mail($_POST['email'], 'Réinitiatilisation de votre mot de passe', "Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien\n\nhttp://local.dev/Lab/Comptes/reset.php?id={$user->id}&token=$reset_token");
        return $user;
      }
      return false;
    }
  }
?>
