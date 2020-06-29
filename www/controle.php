<?php
  $nom = isset($_POST["nom"]);
  $prenom = isset($_POST["prenom"]);
  $mail = isset($_POST["email"]);
  $mdp = isset($_POST["pass"]);

  echo $nom;
  echo "<br>";
  echo $prenom;
  echo "<br>";
  echo $mail;
  echo "<br>";
  echo $mdp;

  if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
  {
    $emailErr = "Email invalide";
  }
  else
  {
    echo "L'adresse Email est valide";
  }

?>
