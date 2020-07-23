<?php
  include "inc/head.php";
  include "inc/header.php";
?>

<div class="limiter d-flex justify-content-center">
  <div class="wrap-login100">
    <div class="login100-pic js-tilt d-flex" data-tilt>
      <img class="align-self-center" src="images/img-01.png" alt="IMG">
    </div>

    <form method="post" action="controller/controleSignup.php" class="login100-form validate-form">
      <center><h3><a href="login.php">Déjà un compte ?</a></h3></center>
        <span class="login100-form-title"> Inscription </span>

      <div class="wrap-input100 validate-input" data-validate = "Nom is required">
        <input class="input100" type="text" id="FIRSTNAME" name="FIRSTNAME" placeholder="Nom">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Prenom is required">
        <input class="input100" type="text" id="NAME" name="NAME" placeholder="Prénom complet">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="date" id="PSW" name="DATEBIRTH" placeholder="Date naissance">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" id="MAIL" name="MAIL" placeholder="Email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" id="PSW" name="PSW" placeholder="Password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" id="confirmation" name="confirmation" placeholder="Confirmation">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
      </div>

      <div class="container-login100-form-btn">
        <input type="submit" class="login100-form-btn" value="S'enregistrer">
      </div>
    </form>
    </div>
</div>

<?php
  include "inc/footer.php";
?>
