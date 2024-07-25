<?php
require_once('TheDistrict_header.php')
?>
<div class="container">
  <br>

  <div class="row">



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
<div class=container>
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
                </span>
                    ';
              $i++;
              /*var_dump($row);*/
              if($i==12){
                break;
        }
      }
/* ?catplat=' : Il s'agit du séparateur de chaîne de requête (?) suivi du nom du paramètre (catplat) et d'un signe égal (=). La valeur du paramètre sera ajoutée après le signe égal. */
?>
</div>
</div>

</div>


</div>

<?php
require_once('TheDistrict_footer.php')
?>