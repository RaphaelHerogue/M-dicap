<?php
  $title = "Accueil";
  $metaD = "Bienvenue sur la page d'accueil";


  include "inc/head.php";
  include "inc/header.php";

  echo "<main>";
    include "inc/carte.php";
    echo "<div class='container'>
      <div class='row'>
        <button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal'>
          Launch demo modal
        </button>
      </div>
    </div>";
    include "modal.php";
  echo "</main>";
  include "inc/footer.php";
?>

      <?php include "modal.php";?>
  </main>

  <script src="js/aos.js"></script>
  <script>
    AOS.init({
      easing: 'ease-in-out-sine'
    });
  </script>


    <?php
    include "inc/footer.php";
    ?>
