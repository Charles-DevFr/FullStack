<?php
  require_once('TheDistrict_header.php');
  ?>

<br>

<?php
  $stmt=$dbh->prepare("SELECT plat.libelle AS nomplat, plat.image, plat.prix, plat.description, categorie.libelle
                          AS nomcat, plat.id, id_categorie FROM plat LEFT JOIN categorie ON plat.id_categorie = categorie.id
                              WHERE id_categorie ORDER BY categorie.libelle DESC");
  try{
    $stmt->execute();
  } catch (PDOException $e){
    echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage(); 
  }
  $result=$stmt->fetchAll();
  ?>

<div class="container">
  <div class="row">
    
<?php

$i=0;
foreach($result as $row){
  echo '<span class="allplats col-3">
          <div>
            <div class="card mb-3 bg-secondary border border-2 border-dark" style="max-width: 600px; min-height: 300px;">
              <div class="row g-0" id="cat">
                <div class="col-md-4">
                  <img src="image/food/'.$row['image'].'" class="img-fluid rounded-4 my-5 mx-2" alt="'.$row['nomplat'].'">
                </div>
                  <div class="col-md-8">
                    <div class="card-body"><br>
                      <h3 id="textcard" class="card-title">'.$row['nomplat'].'</h3><br>
                      <h5 id="textcard" class="card-text">'.$row['description'].'</h5><br>
                      <p class="card-text text-dark position-absolute bottom-0 start-0">Prix :<b> '.$row['prix'].' €</b></p>
                        <div class="d-flex justify-content-end me-5">
                          <button type="button" class="btn btn-danger d-flex position-absolute bottom-0 end-0">Commander</button><br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </span>';
      $i++;
      if($i==96){
        break;
      }
}

?>

</div>


  <?php
  require_once('TheDistrict_footer.php');
  ?>