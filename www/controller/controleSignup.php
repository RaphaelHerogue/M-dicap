<?php
  require_once '../loader.php';

  if(!empty($_POST))
  {
    $errors = array();

    $db = App::getDatabase();
    $validator = new Validator($_POST);
    $validator->isAlpha('FIRSTNAME', "Votre nom contient des caractères non alphabétiques");
    $validator->isAlpha('NAME', "Votre prénom contient des caractères non alphabétiques, séparer vos différents prénoms par une virgule.");

    if($validator->isValid())
    {
      $validator->doublon('FIRSTNAME', 'NAME', 'DATEBIRTH', $db, 'users', 'Vous êtes déjà enregistrer passer par le formulaire récupération');
    }

    $validator->isEmail('MAIL', "Votre email n'est pas valide");
    if($validator->isValid())
    {
      $validator->isUniq('MAIL', $db, 'users', 'Cet email est déjà utilisé pour un autre compte');
    }
    $validator->isMDP('PSW', 'Votre mot de passe doit contenir une minuscule, une majuscule, un caractère spéciale et avoir 8 caractères');
    $validator->isConfirmed('PSW','confirmation', 'Vos mots de passe sont différents');

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
      var_dump($errors);
  }
?>
