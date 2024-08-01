<?php
session_start();

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "TheDistrict";

try {
  $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // configurer le mode d'erreur PDO pour générer des exceptions
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">


 <?php
  switch ($_SERVER['REQUEST_URI']) { // Il s'agit d'une variable superglobale PHP qui renvoie l'URL actuelle de la requête.
    case 'index.php':               // L'instruction switch est utilisée pour comparer l'URL actuelle avec une liste d'URL prédéfinies.
      echo '<title>Accueil</title>';
      break;                         // L'instruction break est utilisée pour quitter le bloc switch une fois qu'une correspondance est trouvée.
    case 'TheDistrict_Toutlesplats.php':        // Pour chaque 'case', si l'URL actuelle correspond à l'URL spécifiée, le code à l'intérieur de ce 'case' sera exécuté. Dans ce cas, il définit le titre de la page Web à l'aide de l'instruction echo.
      echo '<title>Plats</title>';
      break;
    case 'TheDistrict_Contact.php':
      echo '<title>Contact</title>';
      break;
    case 'TheDistrict_Categorie.php':
      echo '<title>Catégories</title>';
      break;
    case 'TheDistrict_Platsparcategorie.php':
      echo '<title>Plats par catégories</title>';
      break;
    case 'TheDistrict_Commande.php':
      echo '<title>Commande</title>';
      break;


    default:              // Si l'URL actuelle ne correspond à aucune des URL spécifiées, le code du bloc par défaut sera exécuté, ce qui définit le titre sur "NoPage"
      echo '<title>Accueil</title>';
  }
  ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="shortcut icon" href="image/the_district_brand/favicon.png">
  <link rel="stylesheet" href="css/TOUTLECSS.css">

</head>

<body id="body">
      <div class="container">

  <header>
    <div class="container">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <img src="image/the_district_brand/logo_transparent.png" width="80px" height="80px" >
          <button id="buttonnavbar" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              <div class="collapse navbar-collapse row" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item col-2 ms-4 ms-md-0">
                    <a class="nav-link fs-1" id="textnavbar" href="index.php">Accueil</a>
                  </li>
                  <li class="nav-item col-2 ms-4 ms-md-0">
                    <a class="nav-link fs-1" id="textnavbar" href="TheDistrict_Categorie.php">Categorie</a>
                  </li>
                  <li class="nav-item col-2 ms-4 ms-md-0">
                    <a class="nav-link fs-1" id="textnavbar" href="TheDistrict_Toutlesplats.php">Plats</a>
                  </li>
                  <li class="nav-item col-2 ms-4 ms-md-0">
                    <a class="nav-link fs-1" id="textnavbar" href="TheDistrict_Contact.php">Contact</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>

    <?php
    if ($_SERVER['REQUEST_URI'] == "/index.php") { // affiche la vidéo sur la page index avec sa barre de recherche
      echo '<section class="row">
          <div>
            <svg  class="d-none d-md-block animation h-25 position-absolute bottom-50">
              <text x="50%" y="50%" dy= "60px" text-anchor="middle">
                The District
              </text>
            </svg>
          </div>
            <video autoplay muted loop id="video"> 
              <source src="image/Image_ajouté/BugerCut.mp4" type="video/mp4">
            </video>
            <div class="mb-3 d-none d-md-block">
              <label for="recherche" class="form-label"></label>
              <input type="text" class="form-control-lg" id="recherche" placeholder="Recherche...">
            </div>
        </section>';
    }
    // in_array : indique si une valeur appatient à un tableau
    // isset : indique si une variable est déclarée et est différente de null
    // !!!!!!!! intégrer ['platcommande'] dans le 'execute' de la page commande' -> $GET_['platcommande'] !!!!!!!!!
    elseif (!in_array($_SERVER['REQUEST_URI'], ["/Script_commande.php", "/Script_commande.php"]) && !isset($_GET['platcommande'])) {
      // afficher la banière image sur les autres pages hotmis la page de commande
      echo '<div class="container-fluid">
    <div class="row justify-content-center">
      <img src="image/bg2.jpeg" alt="bandereau" title="bandereau" id="image" >
    </div>
</div>';
    } else {
      // ne pas afficher de bannière sur la page commande
    }
    ?>


    </header>
  </div>
</body>