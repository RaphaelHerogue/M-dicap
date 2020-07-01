<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/icons/favIcon.svg" />
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script type="text/javascript" src="js/scriptNav.js"></script>
  <script type="text/javascript" src="js/control.js"></script>


  <title>Médicap</title>
</head>


<body >
  <?php
  include "inc/header.php";
  ?>

  <main>
    <form action="mail.php" id="formulForm" method="post">
      <div class="card border-black rounded-0">
        <div class="card-header p-0">
          <div class="bg-info text-white text-center py-2">
            <h3><i class="fa fa-envelope"></i> Contact </h3>
            <p class="m-0">Proche de chez vous on prend soin de vous</p>
          </div>
        </div>
        <div class="card-body p-3">

          <!--Body-->
          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
              </div>
              <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
            </div>
          </div>


          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
              </div>
              <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required>
            </div>
          </div>


          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
              </div>
              <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
              </div>
              <input type="tel" class="form-control" id="tel" name="tel" placeholder="Tel" required>
            </div>
          </div>


          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
              </div>
              <textarea class="form-control" placeholder="Message" required></textarea>
            </div>
          </div>


          <div class="text-center">
            <input type="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2">
          </div>
        </div>

      </div>
    </form>


    <script>
    $("#formulForm").validate();
  </script>
  <!--Form with header-->
</div>
</div>
</div>




<?php include "modal.php";?>
</main>

<?php
include "inc/footer.php";
?>







</body>
</html>
