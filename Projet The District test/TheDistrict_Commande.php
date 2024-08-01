<?php
  require_once('TheDistrict_header.php')
  ?>

    <div class="container"><br>
      <div class="row justify-content-center">

        <?php
        require_once('TheDistrict_DAO.php');
        $result = commande();
        ?>

        <?php
        require_once('TheDistrict_DAO.php');
        commandeForeach($result);
        ?>

      </div>

    <br><br>
    <div class="container">
      <div class="row">    
       <div class="col-12">
        <label for="inputname" class="form-label" id="textform">Nom prénom</label>
        <input type="text" name="nom+prenom" class="form-control" id="nom+prenom">
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