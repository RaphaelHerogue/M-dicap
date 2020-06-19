<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icons/favIcon.svg" />
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="js/scriptNav.js"></script>

    <title>Médicap</title>
  </head>
  <body >
    <?php
      include "inc/header.php";
    ?>

    <main>
      <div class="container">
        <div class="row">
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Launch demo modal
          </button>

          <?php include "modal.php";?>
      </div>
    </main>

    <?php
      include "inc/footer.php";
    ?>
  </body>
</html>
