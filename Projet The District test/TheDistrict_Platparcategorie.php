<?php
    require_once('TheDistrict_header.php')
    ?>

<div class="container">

  <br>

  <div class="container mt-3">
    <div class="row justify-content-center">

      <?php /* $categoryName se trouve dans cette fonction */
      require_once('TheDistrict_DAO.php');
      $result = platsParCategorieTitre();
      ?>

      <div class="container">
        <div class="row justify-content-start titreconteneur">
          <div class="col-6 col-lg-1 mb-5" id="titre">
            <h3><?php echo $categoryName; ?></h3>
          </div>
        </div>
      </div>

      <?php
      require_once('TheDistrict_DAO.php');
      $result = platsParCategorieCorps();
      ?>

      <?php
      require_once('TheDistrict_DAO.php');
      platsParCategorieCorpsForeach($result);
      ?>

    </div>
  </div>

</div>

<br><br>

<?php
require_once('TheDistrict_footer.php')
?>