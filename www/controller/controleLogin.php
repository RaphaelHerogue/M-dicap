<?php
  require_once "../loader.php";

  $auth = app::getAuth();
  $db = app::getDatabase();

  //App::redirect('../profil.php');

  if(!empty($_POST) && !empty($_POST['MAIL']) && !empty($_POST['PSW']))
  {
    $user = $auth->login($db, $_POST['MAIL'], $_POST['PSW'], isset($_POST['REMEMBER']));
    $session = session::getInstance();

    if($user)
    {
      echo "toto";
      $session->setFlash('success', 'Vous êtes maintenant connecté');
      app::redirect('../profil.php');
    }
      else
      {
        $session->setFlash('danger', 'Identifiant ou mot de passe incorrecte');
      }
  }
?>
