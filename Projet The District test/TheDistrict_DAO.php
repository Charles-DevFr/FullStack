<?php
//1) Fonction SQL pour index toutes les catégories
function indexTouteslesCategories()
{
  $servername = "localhost";
  $username = "admin";
  $password = "Afpa1234";
  $dbname = "TheDistrict";

  try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }
  $stmt = $dbh->prepare("SELECT * FROM categorie WHERE active='Yes'");
  try {
    $stmt->execute();
  } catch (PDOException $e) {
    echo 'Erreur lors de l\'exécution de posImala requête : ' . $e->getMessage();
  }
  $result = $stmt->fetchAll();
  return $result;
}
$result = indexTouteslesCategories();

//  Fonction pour foreach index toutes les catégories
function indexTouteslesCategoriesForeach($result)
{
  $i = 0;
  foreach ($result as $row) {
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
    if ($i == 12) {
      break;
    }
  }
}


/* ---------------------------------------------------------------------------------------------------------------------------------------------------------------- */


//2) Fonction SQL pour index plats les plus vendus
function indexPlatslesplusVendus()
{
  $servername = "localhost";
  $username = "admin";
  $password = "Afpa1234";
  $dbname = "TheDistrict";

  try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }
  $stmt = $dbh->prepare("SELECT p.id,p.id_categorie,c.id_plat,SUM(quantite) 
    AS quantite_vendue,SUM(quantite)*prix 
      AS rentabilite,p.libelle,p.description,p.prix,p.image 
        FROM commande c 
          LEFT JOIN plat p 
            ON c.id_plat=p.id 
              WHERE c.etat!='Annulée' 
                GROUP BY c.id_plat 
                  ORDER BY rentabilite DESC;");

  try {
    $stmt->execute();
  } catch (PDOException $e) {
    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
  }
  $result = $stmt->fetchAll();
  return $result;
}
$result = indexPlatslesplusVendus();

// Fonction pour foreach index plats les plus vendus
function indexPlatslesplusVendusForeach($result)
{
  $i = 0;
  foreach ($result as $row) {
    echo '<span class="allcategory col-12 col-md-4">
                <a href="TheDistrict_Commande.php?comm=' . $row['id'] . '">
                  <div id="category01">
                    <a href="TheDistrict_Platparcategorie.php?catplat='.$row['id'].'">
                  <img src="image/food/' . $row['image'] . '"class="animeimage posImage" width="280px" height="280px" id="category1" class="grow" alt="' . $row['libelle'] . '">
                    </a>
                  </div>
                </span>
                    ';
    $i++;
    if ($i == 6) {
      break;
    }
  }
}


/* ---------------------------------------------------------------------------------------------------------------------------------------------------------------- */


//3) Fonction SQL TITRE plats par catégorie
function platsParCategorieTitre()
{
  $servername = "localhost";
  $username = "admin";
  $password = "Afpa1234";
  $dbname = "TheDistrict";

  try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }
  $stmtCat = $dbh->prepare("SELECT libelle FROM categorie WHERE id = :id");
  try {
    $stmtCat->execute(array(':id' => $_GET['catplat']));
  } catch (PDOException $e) {
    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
  }
  $categoryName = $stmtCat->fetchColumn();
  return $categoryName;
}
$categoryName = platsParCategorieTitre();


/* ---------------------------------------------------------------------------------------------------------------------------------------------------------------- */


//4) Fonctions SQL CORPS plats par catégorie
function platsParCategorieCorps()
{
  $servername = "localhost";
  $username = "admin";
  $password = "Afpa1234";
  $dbname = "TheDistrict";

  try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }
  $stmt = $dbh->prepare("SELECT plat.libelle AS nomplat, plat.image, plat.prix, plat.description, categorie.libelle AS nomcat, plat.id, id_categorie FROM plat LEFT JOIN categorie on plat.id_categorie=categorie.id WHERE id_categorie= :id ORDER BY categorie.libelle DESC");
  try {
    $stmt->execute(array(':id' => $_GET['catplat']));
  } catch (PDOException $e) {
    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
  }

  $result = $stmt->fetchAll();
  $stock = $_GET['catplat'];
  return $result;
  return $stock;
}
$result = platsParCategorieCorps();

// Fonction pour foreach plats par catégorie corps
function platsParCategorieCorpsForeach($result)
{
  $i = 0;
  foreach ($result as $row) {
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
    if ($i == 8) {
      break;
    }
  }
}


/* ---------------------------------------------------------------------------------------------------------------------------------------------------------------- */


//5)  Fonction SQL pour commande
function commande()
{
  $servername = "localhost";
  $username = "admin";
  $password = "Afpa1234";
  $dbname = "TheDistrict";

  try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }
  $stmt = $dbh->prepare("SELECT plat.libelle AS nomplat, plat.image, plat.prix, plat.description, categorie.libelle AS nomcat, plat.id, id_categorie 
                            FROM plat LEFT JOIN categorie ON plat.id_categorie=categorie.id 
                                WHERE plat.id= :id ORDER BY categorie.libelle DESC");
  try {
    $stmt->execute(array(':id' => $_GET['comm']));
  } catch (PDOException $e) {
    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
  }

  $result = $stmt->fetchAll();
  $stock = $_GET['comm'];
  return $result;
  return $stock;
}
$result = commande();

// Fonction pour foreach commande
function commandeForeach($result)
{
  $i = 0;
  foreach ($result as $row) {
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
                        <input class="input_style barrequantite" type="number" tabindex="5" min="1" max="500" value="1" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </span>';
    $i++;
    if ($i == 1) {
      break;
    }
  }
}


/* ---------------------------------------------------------------------------------------------------------------------------------------------------------------- */


//6) Fonction SQL catégories
function categorie()
{
  $servername = "localhost";
  $username = "admin";
  $password = "Afpa1234";
  $dbname = "TheDistrict";

  try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }
  $stmt = $dbh->prepare("SELECT * FROM categorie WHERE active='Yes'");

  try {
    $stmt->execute();
  } catch (PDOException $e) {
    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
  }
  $result = $stmt->fetchAll();
  return $result;
}
$result = categorie();

// Fonction pour foreach catégories
function categorieForeach($result)
{
  $i = 0;
  foreach ($result as $row) {
    echo '<span class="allcategory col-12 col-md-4">
                  <div id="category01">
                    <a href="TheDistrict_Platparcategorie.php?catplat='.$row['id'].'">
                    <img src="image/category/'.$row['image'].'" width="280px" height="280px" id="category1" class="grow">
                    </a>
                    <p>'.$row['libelle'].'</p>
                  </div>
                </span>';
    $i++;
    if ($i == 12) {
      break;
    }
  }
}


/* ---------------------------------------------------------------------------------------------------------------------------------------------------------------- */


//7) Fonction SQL tous les plats
function touslesPlats()
{
  $servername = "localhost";
  $username = "admin";
  $password = "Afpa1234";
  $dbname = "TheDistrict";

  try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }
  $stmt = $dbh->prepare("SELECT plat.libelle AS nomplat, plat.image, plat.prix, plat.description, categorie.libelle
                          AS nomcat, plat.id, id_categorie FROM plat LEFT JOIN categorie ON plat.id_categorie = categorie.id
                              WHERE id_categorie ORDER BY categorie.libelle DESC");
  try {
    $stmt->execute();
  } catch (PDOException $e) {
    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();
  }
  $result = $stmt->fetchAll();
  return $result;
}
$result = touslesPlats();

// Fonction pour foreach tous les plats
function touslesPlatsForeach($result)
{
  $i = 0;
  foreach ($result as $row) {
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
                      <p class="card-text text-dark position-absolute bottom-0 start-0 mt-5">Prix :<b> '.$row['prix'].' €</b></p>
                        <div class="d-flex justify-content-end me-5">
                          <form action="TheDistrict_Commande.php" method="GET">
                            <button type="submit" name="comm" class="btn btn-danger d-flex position-absolute bottom-0 end-0 value="' .$row['id'] . '"id="boutoncommander">Commander</button><br>
                        </form>                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </span>';
    $i++;
    if ($i == 96) {
      break;
    }
  }
}