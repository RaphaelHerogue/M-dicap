<?php

  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $mail = $_POST["email"];
  $mdp = $_POST["pass"];
  $message = "";

  if(isset($nom) || isset($prenom))
  {
    $message = "<div>Nom ou Prénom laissé vide.</div>";
  }

  if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
  {
    $emailErr = "Email invalide";
  }
  else
  {
    echo "L'adresse Email est valide";
  }

?>
