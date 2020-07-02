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
    <div class="container my-5 py-5 shadowBloc rounded">

      <div class="container d-flex justify-content-between align-items-center">
        <label class="col-3 m-0 text-primary" for="size">Largeur</label>
        <select class="col-6 rounded btn btn-outline-secondary" id="size" name="size">
          <option selected>Choisir</option>
          <option value="1">90 cm</option>
          <option value="2">140 cm</option>
          <option value="3">210 cm</option>
        </select>
      </div>
      <div class="container mt-5 d-flex justify-content-between align-items-center">
        <label class="col-3 m-0 text-primary" for="color">Couleur</label>
        <select class="col-6 rounded btn btn-outline-secondary" id="color" name="color">
          <option selected>Choisir</option>
          <option value="1">Hêtre de Bavière</option>
          <option value="2">Noir</option>
          <option value="3">blanc</option>
        </select>
      </div>
    </div>

    <div class="container my-5 p-5 shadowBloc rounded">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 d-flex flex-column">
          <h2 class="text-primary">1490,00€</h2>
          <span id="infoPrix">Dont 7,00 € d'écotaxe</span>
          <span>Payer en 3x sans frais</span>
          <span>3 mensualités: 496,67 € + 496,67 € </span>
        </div>
        <div class="pt-4 col-6 col-md-3 d-flex justify-content-center align-items-center">
          <button class="btn" type="button" name="button">
            <img class="icones" src="images/icons/moins.svg" alt="icones moins">
          </button>
          <span>1</span>
          <button class="btn" type="button" name="button">
            <img class="icones" src="images/icons/plus.svg" alt="icones plus">
          </button>
        </div>
        <div class="pt-4 col-6 col-md-3 text-center">
          <button class="rounded btn btn-outline-secondary" type="button" name="button">Ajouter au panier
            <img class="icones" src="images/icons/icon-shop-vert.svg" alt="panier">
          </button>
        </div>
      </div>
      <a class="d-block text-right" href="">Demande de devis </a>
    </div>

    <div class="container my-5 p-5 shadowBloc rounded">
      <div id="accordion">
        <div class="card">
          <div class="border-bottom" id="headingOne">
            <h5 class="p-2 mb-0 d-flex justify-content-between">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Description
              </button>
              <img class="icones" src="../images/icons/icone-fleche.svg" alt="">
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="border-bottom" id="headingTwo">
            <h5 class="p-2 mb-0 d-flex justify-content-between">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Livraison et Retours
              </button>
                <img class="icones" src="../images/icons/icone-fleche.svg" alt="">
            </h5>
          </div>
          <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="border-bottom" id="headingThree">
            <h5 class="p-2 mb-0 d-flex justify-content-between">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Avis (34)
              </button>
              <img class="icones" src="../images/icons/icone-fleche.svg" alt="">
            </h5>
          </div>
          <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>

    <?php
    include "inc/footer.php";
    ?>
  </body>
  </html>
