<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icons/favIcon.svg" />
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <script type="text/javascript" src="js/scriptNav.js"></script>

    <title>Médicap</title>
  </head>
  <body>
    <?php
      include "inc/header.php";
    ?>

    <div class="limiter d-flex justify-content-center">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img src="images/img-01.png" alt="IMG">
          </div>

          <form method="post" action="controleLogin.php" class="login100-form validate-form">
            <center><h3><a href="signup.php">Pas encore inscript ?</a></h3></center>
            <span class="login100-form-title">
              Se connecter
            </span>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" id="email" name="email" placeholder="Email">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Password is required">
              <input class="input100" type="password" id="pass" name="pass" placeholder="Password">
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
      include "modal.php";
      include "inc/footer.php";
    ?>
  </body>
</html>
