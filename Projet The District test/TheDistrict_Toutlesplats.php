<?php
  require_once('TheDistrict_header.php');
  ?>

  <br>

  <?php
  require_once('TheDistrict_DAO.php');
  $result = touslesPlats();
  ?>

  <div class="container">
    <div class="row justify-content-center g-0">

      <?php
      require_once('TheDistrict_DAO.php');
      touslesPlatsForeach($result)
      ?>

    </div>

    <?php
    require_once('TheDistrict_footer.php');
    ?>