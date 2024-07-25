<?php
    require_once('TheDistrict_header.php')
    ?>
    <div class="container">

    

    <div class="container" id="background-img"><br>
<div class="row justify-content-center">

<?php
  $stmt=$dbh->prepare("SELECT plat.libelle AS nomplat, plat.image, plat.prix, plat.description, categorie.libelle AS nomcat, plat.id, id_categorie 
                            FROM plat LEFT JOIN categorie ON plat.id_categorie=categorie.id 
                                WHERE plat.id= :id ORDER BY categorie.libelle DESC");
  try{
    $stmt->execute(array(':id' => $_GET['comm'])); /* $stmt est un objet PDOStatement, qui représente une instruction SQL préparée.
    execute() est une méthode de l'objet PDOStatement qui exécute l'instruction préparée.
    Le array(':id' => $_GET['comm']) est un tableau associatif qui mappe un espace réservé :id dans l'instruction préparée à une valeur obtenue à partir du tableau superglobal $_GET. */
  } catch (PDOException $e){
    echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage();
  }

$result=$stmt->fetchAll(); /* $stmt est un objet PDOStatement, qui représente une instruction préparée qui a été exécutée.
fetchAll() est une méthode de l'objet PDOStatement qui récupère toutes les lignes du jeu de résultats de l'instruction exécutée.
Le résultat est stocké dans la variable $result, qui sera un tableau contenant toutes les lignes du jeu de résultats. */
$stock=$_GET['comm']; /* $_GET : Il s'agit d'un tableau superglobal en PHP qui contient les variables transmises au script via la chaîne de requête URL. Il s'appelle $_GET car il récupère les données de l'URL à l'aide de la méthode HTTP GET.
['comm'] : Il s'agit de la clé de la valeur récupérée du tableau $_GET. En d’autres termes, il s’agit du nom de la variable transmise dans la chaîne de requête URL. */
?>

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
  if($i==1){
    break;
  }
}
/* '.$row['nomplat'].' est une variable PHP qui est concaténée (jointe) à la chaîne HTML environnante. Spécifiquement:
$row est un tableau ou un objet contenant des données extraites d'une base de données ou d'une autre source de données.
['nomplat'] accède à une clé ou une propriété spécifique dans le tableau/objet $row, qui contient la valeur du champ "nomplat".
Le point (.) est l'opérateur de concaténation PHP, qui joint la chaîne HTML avec la valeur $row['nomplat']. */
?>

</div>

<br><br>

<div class="container">
    <form id="formulaire" action="Script_commande.php" method="post">
    <div class="row">
  <div class="mb-3">
    <label for="NometPrenom" class="form-label" id="NometPrenomCSS">Nom et prénom</label>
    <input type="text" name="NometPrenom" class="form-control" id="NometPrenomJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3 col-6">
    <label for="email" class="form-label" id="emailCSS">Email</label>
    <input type="email" name="email" class="form-control" id="emailJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3 col-6">
    <label for="telephone" class="form-label" id="telephoneCSS">Téléphone</label>
    <input type="text" name="telephone" class="form-control" id="telephoneJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3">
    <label for="votreadresse" class="form-label" id="votreadresseCSS">Votre adresse</label>
    <textarea class="form-control" name="votreadresse" rows="3" id="votreadresseJS"></textarea>
<p id="couleurtxt">Ce champ est obligatoire</p>    
  </div>
</div>
</div>




<div class="container">
  <div class="row justify-content-end">
  <button class="btn btn-secondary col-3" type="submit">Envoyer</button>
</div>
</div>
</form>

<br>

</div>
        
    
</div>

    <?php
    require_once('TheDistrict_footer.php')
?>


<script src="js/TheDistrict_Commande.js"></script>
</body>
</html>