<header>

<?php

    try {
        $db = new PDO("mysql:host=localhost;charset=utf8;dbname=TheDistrict", "admin", "Afpa1234");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare("SELECT plat.image,plat.libelle as platnom ,categorie.libelle as catnom ,plat.prix, plat.description FROM plat LEFT JOIN categorie ON plat.id_categorie = categorie.id");
        $query->execute();
        $results = $query->fetchAll();
    
    } catch (Exception $e) {
        echo 'Erreur : '. $e->getMessage(). '<br />';
        echo 'N° : '. $e->getCode();
        die('Fin du script');
    }

?>

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
</header>