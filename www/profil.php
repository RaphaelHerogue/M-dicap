<?php
  require_once "loader.php";

  App::getAuth()->restrict();
  $session = Session::getInstance();
  if(!empty($_POST))
  {
    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm'])
    {
      Session::getInstance()->setFlash('danger','Les mots de passes ne correspondent pas');
    }
      else
      {
        $mail = $_SESSION['auth']->MAIL;
        $type = "sha3-512";
        $mdpCrypt = hash($type, $_POST['PSW']);
        App::getDatabase();
        $db->query("UPDATE users SET PSW = ? WHERE MAIL = ?",[$mdpCrypt, $mail]);
        Session::getInstance()->setFlash('success','Votre mot de passe a bien été mis à jour');
      }
  }
  $title = "Profil de ".$session->read('auth')->FIRSTNAME;
  $metaD = "Bienvenue sur la page d'inscription";

  include "inc/head.php";
  include "inc/header.php";
?>
<h1>Bonjour <?= $session->read('auth')->FIRSTNAME; ?></h1>
<form action="" method="post">
  <div class="form-group">
    <input class="form-control" type="password" name="PSW" placeholder="Changer de mot de passe"/>
  </div>
  <div class="form-group">
    <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe"/>
  </div>
  <button class="btn btn-primary">Changer mon mot de passe</button>
</form>

<?php
  include "inc/footer.php";
?>
