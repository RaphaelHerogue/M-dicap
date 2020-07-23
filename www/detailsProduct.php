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


    <div id="details" class="owl-carousel owl-theme">
      <div class="item">
        <img src="../images/lit-1.svg" alt="lit debout" "class= mx-auto icones-activity rounded">
      </div>
      <div class="item">
        <img src="../images/lit-3.svg" alt="dame debout" "class= mx-auto icones-activity rounded">
      </div>
      <div class="item">
        <img src="../images/lit-4.svg" alt="dame assis" "class= mx-auto icones-activity rounded">
      </div>
      <div class="item">
        <img src="../images/lit-5.svg" alt="dame allonger" "class= mx-auto icones-activity rounded">
      </div>
      <div class="item">
        <img src="../images/lit-8.svg" alt="dame sans fond" "class= mx-auto icones-activity rounded">
      </div>
    </div>

    <h1 class="text-center text-primary">Lit releveur à hauteur variable Eurodesign</h1>
    <?php
      include "inc/carte.php";

      $id = "detailsProduct"

      
    ?>
    <div data-target="#detailsProduct">

    </div>
    </main>

    <?php
    include "inc/footer.php";
    ?>
  </body>
  </html>
