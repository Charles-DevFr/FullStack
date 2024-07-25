<?php
    require_once('TheDistrict_header.php')
  ?>

<?php
// récupère toutes les données de catégorie
$stmt=$dbh->prepare("SELECT * FROM categorie WHERE active='Yes'");

try{
  // exécute de la requête SQL
  $stmt->execute();
} catch (PDOException $e){
  // affiche un message d'erreur si la requête échoue
  echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage();
}

// récupération des résultats de la requête
$result=$stmt->fetchAll();
?>

    <div class="container">
      <div class="parallax col-14 col-sm-12">


    <div class="container mt-4">
      <div class="row">

  <?php
// affichage des catégories dans une card bootstrap pour les 6 premières catégories
  $i=0;
      foreach($result as $row){
        echo '<span class="allcategory col-12 col-md-4">
                  <div id="category01">
                    <a href="TheDistrict_Platparcategorie.php?catplat='.$row['id'].'">
                    <img src="image/category/'.$row['image'].'" width="280px" height="280px" id="category1" class="grow">
                    </a>
                    <p>'.$row['libelle'].'</p>
                  </div>
                </span>';
              $i++;
              if($i==12){
                break;
        }
      }
  ?>


      </div>
    </div>

  </div>

  <br>

  <?php
    require_once('TheDistrict_footer.php')
  ?>