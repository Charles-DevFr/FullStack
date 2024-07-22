<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The district Plats</title>
    <link rel="shortcut icon" type="image/png" href="image/the_district_brand/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TheDistrict_Toutlesplats.css">
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
          <span id="titreplats">Tout les Plats</span>
        </div>
      </div>
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <img src="image/food/Asian food/bo-bun-poulet.png" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Bo Bun Poulet</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Salade, concombre, nouilles fines, 2 nems, soja, cacahuètes.</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <img src="image/food/Asian food/boeuf-loc-lac.png" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Boeuf LocLac</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Riz rouge, bœuf caramélisé, œuf, salade, tomates, concombre, oignons.</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Asian food/boeuf-oignons.png" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Boeuf Oignons</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Plat servi avec un riz cantonais (œuf, carottes, petits poids).</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Asian food/chirachi-mixte.png" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Chirachi Mixte</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Chirashi Mixte succombez à la douceur du thon et du saumon.</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Burger/burger1.png" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Burger 1</h3><br>
                                <h5 id="textcard" class="card-text ms-4">description du burger</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Burger/burger2.png" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">burger 2</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du burger</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Burger/burger3.png" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Burger 3</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du burger</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Burger/burger4.png" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Burger 4</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du burger</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Dessert/CrémeBrulée.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Créme brulée</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du dessert</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Dessert/MousseChocolat.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Mousse au chocolat</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du dessert</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Dessert/TarteletteCitron.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Tartelette au citron</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du dessert</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Dessert/Tiramisu.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Tiramisu</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du dessert</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Fromage/Camenbert.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Camenbert</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du fromage</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Fromage/Chévre.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Formage de chévre</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du fromage</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Fromage/Maroille.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Maroille</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du fromage</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Fromage/Mimolette.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Mimolette</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du fromage</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Pasta/Coquillette.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Coquillette</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description des pâtes</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Pasta/MacaroniFromage.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Macaroni au fromage</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description des pâtes</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Pasta/SpaghettiBolo.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Spaghetti bolognaise</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description des pâtes</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Pasta/TagliatelleSaumon.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Tagliatelle au saumon</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description des pâtes</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Pizza/calzone.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Calzone</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description de la pizza</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Pizza/raclette.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Pizza raclette</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description de la pizza</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Pizza/regina.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Pizza regina</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description de la pizza</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Pizza/savoyarde.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Pizza savoyarde</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description de la pizza</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Plat Traditionelle/BoeufBourguignon.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Boeuf bourguignon</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Plat Traditionelle/Blanquette.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Blanquette</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Plat Traditionelle/Choucroute.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Choucroute</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Plat Traditionelle/Bouillabaisse.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Bouillabaisse</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Salade/SaladeCesar.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                               <h3 id="textcard" class="card-title ms-4">Salade césar</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description de la salade</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Salade/SaladeCrevette.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Salade au crevette</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description de la salade</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Salade/SaladeRiz.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Salade de riz</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description de la salade</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Salade/SaladeGrec.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Salade grec</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description de la salade</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Snack/CroqueMadame.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                               <h3 id="textcard" class="card-title ms-4">Croque madame</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Snack/Burrito.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Burrito</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Snack/TartineChévre.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Tartine au chévre</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href=""">
                              <img src="image/food/Snack/Kebab.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Kebab</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Veggie/Falafelle.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                               <h3 id="textcard" class="card-title ms-4">Falafelle</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Veggie/CouscousVeggie.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Couscous veggie</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Veggie/Gratin.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Gratin</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                      <div>
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Veggie/RisottoChampignon.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Risotto Champignon</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du plat</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Wrap/WrapBuffaloChiken.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                               <h3 id="textcard" class="card-title ms-4">Wrap buffalo chiken</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du warp</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Wrap/WrapPouletCrudite.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Wrap poulet crudité</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du warp</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Wrap/WrapLegume.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Wrap au légmues</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du wrap</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Wrap/WrapPoisson.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Wrap poisson</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Description du wrap</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container">
                <div id="toutlesplats" class="row">
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Boulangerie/PainBanane.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Pain Banane</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Pain a la banane</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Boulangerie/PainCereale.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Pain céréale</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Pain au céréale</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Boulangerie/PainCitrouille.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Pain Citrouille</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Pain a la citrouille.</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                    <span class="allplats col-12 col-sm-6">
                        <div style="max-width: 600px;">
                          <div class="row g-0 mt-5" id="plat">
                            <div class="col-md-4">
                              <a href="...">
                              <img src="image/food/Boulangerie/PainFromage.jpg" class="img-fluid rounded-4 my-4 ms-5 ms-sm-2">
                              </a>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body"><br>
                                <h3 id="textcard" class="card-title ms-4">Pain frogmage</h3><br>
                                <h5 id="textcard" class="card-text ms-4">Pain au fromage</h5><br>
                                <div class="d-flex ms-5 d-none d-md-block">
                                  <button type="button" onclick="commander()" class="commander bouton btn btn-secondary d-flex">Commander</button><br>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </span>
                </div>
              </div>
          </div>
          <button class="carousel-control-prev d-none" id="bouton1" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class=""></span>
            </button>        
            <button class="carousel-control-next d-none" id="bouton2" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class=""></span>
            </button>
        </div>
        <br>
      </div>
      <br>
      <div class="container">
        <div class="row justify-content-around">
          <button type="button" class="btn btn-secondary btn-lg col-md-2 col-4" onclick="precedent2()">Précédent</button>
          <button type="button" class="btn btn-secondary btn-lg col-md-2 col-4" onclick="suivant2()">Suivant</button>
        </div>
      </div>
      <br><br>
      <div class="container">
        <?php
        require_once("TheDistrict_footer.php");
        ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/TheDistrict_Toutlesplats.js"></script>
  </body>
</html>