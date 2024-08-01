<?php
require_once('TheDistrict_header.php')
?>
<div class="container">
  <br>

  <div class="row">

    <?php
    require_once('TheDistrict_DAO.php');
    $result = categorie();
    ?>

    <?php
    require_once('TheDistrict_DAO.php');
    categorieForeach($result)
    ?>

  </div>
</div>

<?php
require_once('TheDistrict_footer.php')
?>