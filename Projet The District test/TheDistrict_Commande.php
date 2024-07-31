<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The district Categorie</title>
    <link rel="shortcut icon" type="image/png" href="image/the_district_brand/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/TheDistrict_Commande.css">
</head>
<body id="body">
    <div class="container">
        <?php
        require_once("TheDistrict_header.php");
        ?>
          <br>
          <section class="imagefond">
          <br><br>
      <div class="container">
        <form id="form" action="script/script_commande.php" method="post">
        <div class="row d-flex justify-content-center" id="cardglobal">
          <div class="card mb-3" id="cardcommand" style="max-width: 540px;">
            <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="">
            </div>
            <div class="col-md-8">
            <div class="card-body">
              <h5 id="titrecard" class="card-title">Plat commandé</h5>
              <p id="descriptioncard" class="card-text">La description du plat commandé</p>
              <p id="quantitecard" class="card-text">Quantité</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">    
       <div class="col-12">
        <label for="inputname" class="form-label" id="textform">Nom prénom</label>
        <input type="text" name="nom+prenom class="form-control" id="nom+prenom">
        <p>Ce champ est obligatoire</p>
      </div>
      <div class="col-6">
        <label for="inputemail" class="form-label" id="textform">Email address</label>
        <input type="email" name="email" class="form-control" id="email"laceholder="Charles-DevFr@Gmail.com">
        <p>Ce champ est obligatoire</p>
      </div>
      <div class="col-6">
        <label for="inputphone" class="form-label" id="textform">Téléphone</label>
        <input type="number" name="telephone" class="form-control" id="telephone">
        <p>Ce champ est obligatoire</p>
      </div>
      <div>
        <label for="inputcity" class="form-label" id="textform">Votre adresse</label>
        <textarea class="form-control" name="adresse" id="adresse" rows="8"></textarea>
        <p>Ce champ est obligatoire</p>
      </div>
     </div>
    </div>
    <div class="container">
      <button type="submit" class="btn btn-secondary btn-lg" id="bouton" >Envoyer</button>
    </div>
     </section>
      <br><br>
      <div class="container">
        <?php
        require_once("TheDistrict_footer.php");
        ?>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/TheDistrict_Commande.js"></script>
</body>
</html>