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
  <script type="text/javascript" src="css/main.css"></script>


  <title>Médicap</title>
</head>


<body >
  <?php
  include "inc/header.php";
  ?>

  <main>
    <div class="container">
      <div class="Back">
        <i class="fa fa-arrow-left" onclick="Back()"></i>
      </div>
      <p class="h2 text-center text-primary">Paramètre généraux</p>
      <form action="" method="post">
        <div class="preview text-center">
          <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
          <div class="browse-button">
            <i class="fa fa-pencil-alt"></i>
            <input class="browse-input" type="file" required name="UploadedFile" id="UploadedFile"/>
          </div>
          <span class="Error"></span>
        </div>
        <div class="form-group">
          <label>Votre Nom:</label>
          <input class="form-control" type="text" name="fullname" required placeholder="Entrer votre Nom"/>
          <span class="Error"></span>
        </div>

        <div class="form-group">
          <label>Votre Prénom</label>
          <input class="form-control" type="text" name="fullname" required placeholder="Entrer votre Prénom"/>
          <span class="Error"></span>
        </div>

        <div class="form-group">
          <label>Email:</label>
          <input class="form-control" type="email" name="email" required placeholder="Entrer votre Email"/>
          <span class="Error"></span>
        </div>

        <div class="form-group">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
            </div>
            <textarea class="form-control" placeholder="Envoyer un message" required></textarea>
          </div>
        </div>



        <div class="form-group">
          <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
        </div>
      </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



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
