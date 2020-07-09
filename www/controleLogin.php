<?php
  $mail = $_POST["email"];
  $mdpUser = $_POST["pass"];

  require_once("inc/loader.php");

  $db = App::getDatabase();

  if (!empty($mail) && !empty($mdpUser))
  {
    $user = $db->query("SELECT * from users WHERE MAIL = ? ",[$mail])->fetch();

    if ($user)
    {
      echo "ce mail est bon";
    }
    else
    {
      echo "ce mail n'existe pas";
    }

    var_dump($user);

    $type = "sha3-512";
    $mdpCrypt = hash($type, $mdpUser);
    echo $mdpCrypt;

    foreach ($user as $k => $v)
    {
      if ($mail == $v->db->MAIL && $mdpCrypt == $v->db->PSW)
      {
        session_start();
        $_SESSION["firstname"] = $v["FIRSTNAME"];
        $_SESSION["name"] = $v["NAME"];
        header('location: index.php');
        exit();
      }
        else
        {
          echo 'Mauvais identifiant ou mot de passe !';
        }
      }
  }
  else
  {
    echo "Les champs sont vide !";
  }


?>
