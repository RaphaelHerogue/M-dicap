<?php
  class Auth
  {
    public function register($db, $username, $password, $email)
    {
      $type = "sha3-512";
      $mdpCrypt = hash($type, $password);

        $password = $this->hashPassword($password);
        $token = Str::random(60);
        $db->query("INSERT INTO users SET username = ?, password = ?, email = ?, confirmation_token = ?", [
            $username,
            $mdpCrypt,
            $email,
            $token
        ]);
        $user_id = $db->lastInsertId();
        mail($email, 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://local.dev/Lab/Comptes/confirm.php?id=$user_id&token=$token");
    }
  }












?>
