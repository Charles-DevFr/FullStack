<?php
    require_once('TheDistrict_header.php')
    ?>
    <div class="container">

    <br>

    <div class="container" id="background-img"><br>
<div class="row justify-content-center">

<div class="container">
  <div class="row justify-content-center g-0">
  <div class="card mb-3" style="max-width: 580px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="image/food/Burger/burger1.png" class="img-fluid border border-dark border-4" alt="cheesburger">
    </div>
    <div class="col-md-8 cardscolor">
      <div class="card-body">
        <h5 class="card-title txtcolor">Burger 1</h5>
        <p class="card-text txtcolor">Un hymne au burger : Une symphonie de saveurs dans un pain moelleux.</p>
        <a href="#" class="btn btn-secondary">Commander</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</div>

<br><br>

<div class="container">
    <form id="formulaire" action="Script_commande.php" method="post">
    <div class="row">
  <div class="mb-3">
    <label for="NometPrenom" class="form-label" id="Script_commande.php">Nom et prénom</label>
    <input type="text" name="NometPrenom" class="form-control" id="NometPrenomJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3 col-6">
    <label for="email" class="form-label" id="Script_commande.php">Email</label>
    <input type="email" name="email" class="form-control" id="emailJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3 col-6">
    <label for="telephone" class="form-label" id="Script_commande.php">Téléphone</label>
    <input type="text" name="telephone" class="form-control" id="telephoneJS">
<p id="couleurtxt">Ce champ est obligatoire</p>
  </div>
  <div class="mb-3">
    <label for="votreadresse" class="form-label" id="Script_commande.php">Votre adresse</label>
    <textarea class="form-control" name="votreadresse" rows="3" id="votreadresseJS"></textarea>
<p id="couleurtxt">Ce champ est obligatoire</p>    
  </div>
</div>
</div>




<div class="container">
  <div class="row justify-content-end">
  <button class="btn btn-primary col-3" type="submit">Envoyer</button>
</div>
</div>
</form>

<br>

</div>
        
    <br>

    <?php
    require_once('TheDistrict_footer.php')
?>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/TheDistrict_Commande.js"></script>
</body>
</html>