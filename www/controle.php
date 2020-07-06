<?php
  $nom = isset($_POST["nom"]) ? $_POST["nom"] : NULL;
  $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : NULL;
  $mail = isset($_POST["email"]) ? $_POST["email"] : NULL;
  $mdpUser = isset($_POST["pass"]) ? $_POST["pass"] : NULL;
  $confirmation = isset($_POST["confirmation"]) ? $_POST["confirmation"] : NULL;
  $boolNom = false;
  $boolPrenom = false;
  $boolMail = false;
  $boolMdp = false;

  similar_text($mdpUser, $confirmation, $perc);

  $char = preg_match('/[a-z]/', $mdpUser);
  $charMaj = preg_match('/[A-Z]/', $mdpUser);
  $number = preg_match('[\d]', $mdpUser);
  $specialChar = preg_match('[\W]', $mdpUser);

  try
  {
    if($nom == NULL && $prenom == NULL)
    {
      echo "<div>Nom ou Prénom laissé vide.</div>";
    }
      else
      {
        $boolNom = true;
        $boolPrenom = true;
      }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        echo "<div>Email invalide</div>";
    }
      else
      {
        $boolMail = true;
      }

    if ($perc != 100)
    {
        echo "<div>Mot de passe différent</div>";
    }
      elseif ($char != 1)
      {
        echo "<div>Le mot de passe ne contient pas de minuscules</div>";
      }
        elseif ($charMaj != 1)
        {
          echo "<div>Le mot de passe ne contient pas de majuscules</div>";
        }
          elseif ($number != 1)
          {
            echo "<div>Le mot de passe ne contient pas de nombres</div>";
          }
            elseif ($specialChar != 1)
            {
              echo "<div>Le mot de passe ne contient pas de caractères spéciaux</div>";
            }
              elseif (strlen($mdpUser) <= 8)
              {
                echo "<div>Le mot de passe est inférieur à 8 caractères</div>";
              }
                else
                {
                  $boolMdp = true;
                }

    if ($boolNom == true && $boolPrenom == true && $boolMail == true && $boolMdp == true)
    {
        echo "<div>tous les champs remplis</div>";
    }

    /*-----------FIN VERIFICATION FORMULAIRE-----------------*/

    require_once("inc/connexion_bdd.php");

    $donnees = [
                    'FIRSTNAME' => $prenom,
                    'NAME' => $nom,
                    'MAIL' => $mail,
                    'PSW' => $mdpUser,
                ];
    $req = $_instance ->
    prepare("INSERT INTO users VALUES (:FIRSTNAME, :NAME, :MAIL, :PSW)");

    $req -> execute($donnees);
  }
  catch (Exception $e)
  {
    echo $e;
  }
?>
