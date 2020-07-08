<?php
  $mail = isset($_POST["email"]) ? $_POST["email"] : NULL;
  $mdpUser = isset($_POST["pass"]) ? $_POST["pass"] : NULL;
  $mailBool = false;
  $mdpBool = false;

  require_once("inc/connexion_bdd.php");

  $req = $_instance -> prepare("SELECT MAIL, PSW from users");
  $select = $req -> execute();

  while ($liste = $req -> fetch())
  {
    $mailBdd = $liste["MAIL"];
    $hash = $liste["PSW"];
  }

  $type = "sha3-512";
  $mdpCrypt = hash($type, $mdpUser);

  if ($mdpCrypt === $hash)
  {
    $mdpBool = true;
  }

  if ($mail === $mailBdd)
  {
    $mailBool = true;
  }

  


?>
