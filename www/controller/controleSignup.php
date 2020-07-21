<?php
  require_once '../loader.php';

  if(!empty($_POST))
  {
    $errors = array();

    $db = App::getDatabase();
    $validator = new Validator($_POST);
    $validator->isAlpha('FIRSTNAME', "Votre pseudo n'est pas valide (alphanumérique)");
    if($validator->isValid())
    {
      $validator->isUniq('FIRSTNAME', $db, 'users', 'Ce prénom est déjà enregistrer');
    }
    $validator->isEmail('MAIL', "Votre email n'est pas valide");
    if($validator->isValid())
    {
      $validator->isUniq('MAIL', $db, 'users', 'Cet email est déjà utilisé pour un autre compte');
    }
    $validator->isConfirmed('PSW', 'Vous devez rentrer un mot de passe valide');

    if($validator->isValid())
    {
      App::getAuth()->register($db, $_POST['FIRSTNAME'], $_POST['NAME'], $_POST['PSW'], $_POST['MAIL']);
      Session::getInstance()->setFlash('success', 'Un email de confirmation vous a été envoyé pour valider votre compte');
      App::redirect('../login.php');
    }
      else
      {
        $errors = $validator->getErrors();
      }
  }
  var_dump($errors);
?>
