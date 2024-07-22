<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TheDistrict_Accueil.css">
</head>
<body id="body">
    <div class="container">
      <?php
        require_once("TheDistrict_header.php");
      ?>
    <section class="row">
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
    </section>

    <?php foreach ($results as $plat) {
        ?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="image/food/<?php echo $plat['catnom'].'/'.$plat['image'];?>" class="img-fluid rounded-start" alt="<?php echo $plat['nom_image'];?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $plat['platnom'];?></h5>
                            <p class="card-text"><?php echo $plat['description'];?></p>
                            <p class="card-text"><small class="text-body-secondary">Prix : <?php echo $plat['prix'];?> €</small></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>


    <div class="container">
      <?php
        require_once("TheDistrict_footer.php");
      ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>