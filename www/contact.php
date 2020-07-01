<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/icons/favIcon.svg" />
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="css/main.css">
  <script type="text/javascript" src="js/scriptNav.js"></script>
  <title>Médicap</title>
</head>
<body>
  <?php
  include "inc/header.php";
  ?>
  <main>
    <div class="container">
      <div class="Back">
        <i class="fa fa-arrow-left" onclick="Back()"></i>
      </div>
      <p class="h2 text-center text-primary">Paramètre généraux</p>
      <form id="formulForm" action="" method="post">
        <div class="preview text-center">
          <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
          <div class="browse-button">
            <i class="fa fa-pencil-alt"></i>
            <input class="browse-input" type="file" name="UploadedFile" id="UploadedFile"/>
          </div>
          <span class="Error"></span>
        </div>
        <div class="form-group">
          <label>Votre Nom:</label>
          <input class="form-control" type="text" name="lastname" required placeholder="Entrer votre Nom"/>
          <span class="Error"></span>
        </div>
        <div class="form-group">
          <label>Votre Prénom</label>
          <input class="form-control" type="text" name="firstname" required placeholder="Entrer votre Prénom"/>
          <span class="Error"></span>
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input class="form-control" type="email" name="email" required placeholder="Entrer votre Email"/>
          <span class="Error"></span>
        </div>
        <div class="form-group">
          <label>Téléphone:</label>
          <input class="form-control" type="tel" name="phone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="Entrez votre numéro de téléphone" required/>
          <span class="Error"></span>
        </div>
        <div class="form-group">
          <div class="input-group mb-2">

            <textarea class="form-control" name="message" placeholder="Envoyer un message" required></textarea>
          </div>
        </div>
        <div class="form-check">
          <input type="checkbox" name="agree" class="form-check-input" id="checkAgree">
          <label class="form-check-label" for="checkAgree">
            En soummettant ce formulaire, j'accepte que les informations soient exploitées dans le cadre de la RGPD.
          </label>
        </div>
        <div class="form-group">
          <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
        </div>
      </form>
    </div>


































    <div class="container-fluid">
      <div class="row">
        <div id="contactInfos" class="col-md-6 d-flex flex-column justify-content-around py-5">

          <!-- <div class="entreprise justify-content-center d-md-flex flex-md-row flex-lg-column"> -->
            <div class="d-flex align-items-center justify-content-center">
              <img class="icons pr-1 ml-4 pr-lg-0 ml-lg-0" src="../images/icons/localisation.svg"></img>
              <p>15 rue Henri Durre<br> 59220 Denain</p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
              <img class="icons pr-4 ml-0 pr-lg-0 ml-lg-0" src="../images/icons/telephone.svg"></img>
              <p>0327554466</p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
              <img class="icons pl-5 mr-1 pl-md-0 mr-md-3 pl-lg-0 ml-lg-0 mr-lg-2" src="../images/icons/mail.svg"></img>
              <p class="pl-2 pl-lg-0">contact@medicap.com</p>
            </div>
          <!-- </div> -->





        </div>
        <div class="col-md-6">
          <h2 class="text-center text-primary">Paramètres généraux</h2>
          <form id="formulForm" action="" method="post">
            <div class="preview text-center">
              <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
              <div class="browse-button">
                <i class="fa fa-pencil-alt"></i>
                <input class="browse-input" type="file" name="UploadedFile" id="UploadedFile"/>
              </div>
              <span class="Error"></span>
            </div>
            <div class="form-group">
              <label>Votre Nom:</label>
              <input class="form-control" type="text" name="lastname" required placeholder="Entrer votre Nom"/>
              <span class="Error"></span>
            </div>
            <div class="form-group">
              <label>Votre Prénom</label>
              <input class="form-control" type="text" name="firstname" required placeholder="Entrer votre Prénom"/>
              <span class="Error"></span>
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input class="form-control" type="email" name="email" required placeholder="Entrer votre Email"/>
              <span class="Error"></span>
            </div>
            <div class="form-group">
              <label>Téléphone:</label>
              <input class="form-control" type="tel" name="phone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="Entrez votre numéro de téléphone" required/>
              <span class="Error"></span>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">

                <textarea class="form-control" name="message" placeholder="Envoyer un message" required></textarea>
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" name="agree" class="form-check-input" id="checkAgree">
              <label class="form-check-label" for="checkAgree">
                En soummettant ce formulaire, j'accepte que les informations soient exploitées dans le cadre de la RGPD.
              </label>
            </div>
            <div class="form-group">
              <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
            </div>
          </form>
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
