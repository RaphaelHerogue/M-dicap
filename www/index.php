<!DOCTYPE html>
<html lang="en" dir="ltr">
<<<<<<< HEAD
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/icons/favIcon.svg" />
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <script type="text/javascript" src="js/scriptNav.js"></script>

  <title>Médicap</title>
</head>
<body >
  <?php
  include "inc/header.php";
  ?>

  <main>
    <?php
    include "inc/carte.php";
    ?>

      <div class="container">
        <div class="row">
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Launch demo modal
          </button>
        </div>
      </div>
      <?php include "modal.php";?>
  </main>


    <?php
    include "inc/footer.php";
    ?>
  </body>
  </html>
