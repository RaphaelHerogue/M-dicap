<?php
  include "inc/head.php";
  include "inc/header.php";

  echo "<main>";
    include "inc/carte.php";
    echo "<div class='container'>";
      echo "<div class='row'>";
        echo "<button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal'>";
          echo "Launch demo modal";
        echo "</button>";
      echo "</div>";
    echo "</div>";
    include "modal.php";
  echo "</main>";
  include "inc/footer.php";
?>
