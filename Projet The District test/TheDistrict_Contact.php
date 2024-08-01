<?php
  require_once("TheDistrict_header.php");
    ?>

    <div class="container">
      <section class="row">
        <div>
          <svg  class="d-none d-md-block animation h-25 position-absolute bottom-50">
            <text x="50%" y="50%" dy= "68px" text-anchor="middle">
               The District
            </text>
          </svg>
        </div>
    </section>

      <br><br>

      <div class="container">
      <form id="form" action="script/script_contact.php" method="post">
        <form id="formulaire">
        <div class="row">
          <div class="mb-4 col-6">
            <label for="InputName" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom">
            <p>Ce champ est obligatoire</p>
          </div>
          <div class="mb-4 col-6">
            <label for="InputName" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom">
          </div>
          <div class="mb-4 col-6">
            <label for="email" class="form-label">Email address</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Charles-DevFr@Gmail.com">
          </div>
          <div class="mb-4 col-6">
            <label for="phone" class="form-label">Téléphone</label>
            <input type="text" name="telephone" class="form-control" id="telephone">
            <p>Ce champ est obligatoire</p>
          </div>
          <div class="mb-4 col-12">
            <label for="exampleFormControlTextarea1" class="form-label">Votre demande</label>
            <textarea class="form-control" name="adresse" id="demande" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="container">
        <button type="submit" class="btn btn-secondary btn-lg" id="bouton" >Envoyer</button>
      </div>
    </form>
  </div>

      <br><br>

      <div class="container">
        <?php
        require_once("TheDistrict_footer.php");
        ?>
      </div>
    </div>
    
    <script src="js/TheDistrict_Contact.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>