<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The district Plats</title>
    <link rel="shortcut icon" type="image/png" href="image/the_district_brand/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/PlatCategorie.css">
</head>
<body id="body">
    <div class="container">
        <?php
        require_once("TheDistrict_header.php");
        ?>
      <section class="row">
        <div>
          <svg class="d-none d-md-block animation h-25 position-absolute bottom-50">
            <text x="50%" y="50%" dy="68px" text-anchor="middle">
              The District
            </text>
          </svg>
        </div>
        <img src="image/bg2.jpeg" id="image">
      </section>
      <br><br>
      <div class="container">
        <div class="row">
          <span id="titreplats">Nos Plats du terroir</span>
        </div>
      </div>
      <br><br>
      <body>
        <section>
        <div class="container">
          <div class="row justify-content-around g-0">
            <div class="card text-center" style="width: 280px;">
              <div class="card-body">
                <img src="image/food/Plat Traditionelle/Blanquette.jpg" class="card-img border border-secondary border-5" alt="...">
                <h5 class="card-title">Blanquette</h5>
                <p class="card-text"></p>
                <a href="TheDistrict_Commande.php" class="btn btn-secondary">Commander</a>
              </div>
            </div>
            <br>
            <div class="card text-center" style="width: 280px;">
              <div class="card-body">
                <img src="image/food/Plat Traditionelle/BoeufBourguignon.jpg" class="card-img border border-secondary border-5" alt="...">
                <h5 class="card-title">Boeuf Bourguignon</h5>
                <p class="card-text"></p>
                <a href="TheDistrict_Commande.php" class="btn btn-secondary">Commander</a>
              </div>
            </div>
            <br>
            <div class="card text-center" style="width: 280px;">
              <div class="card-body">
                <img src="image/food/Plat Traditionelle/Bouillabaisse.jpg" class="card-img border border-secondary border-5" alt="...">
                <h5 class="card-title">Bouillabaisse</h5>
                <p class="card-text"></p>
                <a href="TheDistrict_Commande.php" class="btn btn-secondary">Commander</a>
              </div>
            </div>
            <br>
            <div class="card text-center" style="width: 280px;">
              <div class="card-body">
                <img src="image/food/Plat Traditionelle/Choucroute.jpg" class="card-img border border-secondary border-5" alt="...">
                <h5 class="card-title">Choucroute</h5>
                <p class="card-text"></p>
                <a href="TheDistrict_Commande.php" class="btn btn-secondary">Commander</a>
              </div>
            </div>
          </div>
        </div>
        </section>
        <br><br>
        <section>
          <div class="container">
            <div class="row justify-content-around g-0">
              <div class="card text-center" style="width: 280px;">
                <div class="card-body">
                  <img src="image/food/Plat Traditionelle/Couscous.jpg" class="card-img border border-secondary border-5" alt="...">
                  <h5 class="card-title">Couscous</h5>
                  <p class="card-text"></p>
                  <a href="TheDistrict_Commande.php" class="btn btn-secondary">Commander</a>
                </div>
              </div>
              <br>
              <div class="card text-center" style="width: 280px;">
                <div class="card-body">
                  <img src="image/food/Plat Traditionelle/Poutine.jpg" class="card-img border border-secondary border-5" alt="...">
                  <h5 class="card-title">Poutine</h5>
                  <p class="card-text"></p>
                  <a href="TheDistrict_Commande.php" class="btn btn-secondary">Commander</a>
                </div>
              </div>
              <br>
              <div class="card text-center" style="width: 280px;">
                <div class="card-body">
                  <img src="image/food/Plat Traditionelle/Tortilla.jpg" class="card-img border border-secondary border-5" alt="...">
                  <h5 class="card-title">Tortilla</h5>
                  <p class="card-text"></p>
                  <a href="TheDistrict_Commande.php" class="btn btn-secondary">Commander</a>
                </div>
              </div>
              <br>
              <div class="card text-center" style="width: 280px;">
                <div class="card-body">
                  <img src="image/food/Plat Traditionelle/Welsh.jpg" class="card-img border border-secondary border-5" alt="...">
                  <h5 class="card-title">Welsh</h5>
                  <p class="card-text"></p>
                  <a href="TheDistrict_Commande.php" class="btn btn-secondary">Commander</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br><br>
        <div class="container">
          <?php
          require_once("TheDistrict_footer.php");
          ?>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    </body>
  </html>