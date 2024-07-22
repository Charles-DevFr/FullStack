<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>

    <?php
    // Création du tableau
    $tableau = array 
        ("Janvier" => "31",
         "Février" => "28",
         "Mars" => "31",
         "Avril" => "30",
         "Mai" => "31",
         "Juin" => "30",
         "Juillet" => "31",
         "Août" => "31",
         "Septembre" => "30",
         "Octobre" => "31",
         "Novembre" => "30",
         "Décembre" => "31");

    // Affichage du tableau
         echo "<h2>Les mois de l'année et leur nombre de jours :</h2>
            <ul>";
         foreach ($tableau as $mois => $jours) 
            {
            echo "<li>$mois : $jours jours</li>";
            }

    // Afficher le tableau trié
        asort ($tableau);
            echo "<h2>Les mois de l'année et leur nombre de jours (triés)</h2>";
            echo "<ul>";
        foreach ($tableau as $mois => $jours) 
            {
            echo "<li>$mois : $jours jours</li>";
            }
    ?>
<br><br><br><br>
    <?php
        $capitales = array
           ("Bucarest" => "Roumanie",
            "Bruxelles" => "Belgique",
            "Oslo" => "Norvège",
            "Ottawa" => "Canada",
            "Paris" => "France",
            "Port-au-Prince" => "Haïti",
            "Port-d'Espagne" => "Trinité-et-Tobago",
            "Prague" => "République tchèque",
            "Rabat" => "Maroc",
            "Riga" => "Lettonie",
            "Rome" => "Italie",
            "San José" => "Costa Rica",
            "Santiago" => "Chili",
            "Sofia" => "Bulgarie",
            "Alger" => "Algérie",
            "Amsterdam" => "Pays-Bas",
            "Andorre-la-Vieille" => "Andorre",
            "Asuncion" => "Paraguay",
            "Athènes" => "Grèce",
            "Bagdad" => "Irak",
            "Bamako" => "Mali",
            "Berlin" => "Allemagne",
            "Bogota" => "Colombie",
            "Brasilia" => "Brésil",
            "Bratislava" => "Slovaquie",
            "Varsovie" => "Pologne",
            "Budapest" => "Hongrie",
            "Le Caire" => "Egypte",
            "Canberra" => "Australie",
            "Caracas" => "Venezuela",
            "Jakarta" => "Indonésie",
            "Kiev" => "Ukraine",
            "Kigali" => "Rwanda",
            "Kingston" => "Jamaïque",
            "Lima" => "Pérou",
            "Londres" => "Royaume-Uni",
            "Madrid" => "Espagne",
            "Malé" => "Maldives",
            "Mexico" => "Mexique",
            "Minsk" => "Biélorussie",
            "Moscou" => "Russie",
            "Nairobi" => "Kenya",
            "New Delhi" => "Inde",
            "Stockholm" => "Suède",
            "Téhéran" => "Iran",
            "Tokyo" => "Japon",
            "Tunis" => "Tunisie",
            "Copenhague" => "Danemark",
            "Dakar" => "Sénégal",
            "Damas" => "Syrie",
            "Dublin" => "Irlande",
            "Erevan" => "Arménie",
            "La Havane" => "Cuba",
            "Helsinki" => "Finlande",
            "Islamabad" => "Pakistan",
            "Vienne" => "Autriche",
            "Vilnius" => "Lituanie",
            "Zagreb" => "Croatie");
        
    // Afficher la liste des capitales apr ordre alphabétique suivi du nom du pays
        echo "<h2>Liste des capitales dans l'ordre alphabétique</h2>";

            ksort ($capitales);
            foreach ($capitales as $ville => $pays) {
                echo "$ville => $pays <br>";
                }

    // Afficher la liste des pays par ordre alphabetique suivi du nom des capitales
        echo "<h2>Liste des pays par ordre alphabétique</h2>";

            ksort ($capitales);
            foreach ($capitales as $pays => $ville) {
                echo "$pays => $ville <br>";
                }

    // Afficher le nom des pays dans un tableau
        echo "<h2>Afficher le nom des pays dans un tableau</h2>";
        
            $pays = array_values($capitales);
                sort($pays);
                echo "<table border='1'>";
                echo "<tr><th>Pays</th></tr>";
            foreach ($pays as $pays) {
                echo "<tr><td>$pays</td></tr>";
                }

    // Supprimer les capitales commençant par un B, puis afficher le contenu du tableau
        echo "<h2>Supprimer les capitales commençant par un B, puis afficher le contenu du tableau</h2>";

            foreach ($capitales as $key => $value) {
                if (substr($key, 0, 1) == 'B') {
                    unset($capitales[$key]);
                }
            }
            print_r($capitales);

    ?>

    <br><br><br><br>

    <?php
        $departements = array
           ("Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
            "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
            "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
            "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime"));

     // Afficher la liste des regions par ordre alphabétique suivie du nom des départements
        echo "<h2>Afficher la liste des régions par ordres alphabétique suivie du nom des départements</h2>";

            ksort ($departements);
            foreach ($departements as $region => $departement) {
                echo "<h3>$region</h3>";
                }
                foreach ($departements as $region => $departement) {
                echo "<ul>";
                foreach ($departement as $depart) {
                echo "<li>$depart</li>";
                }}

    // Afficher la liste des regions suivie du nombre des départements
        echo "<h2>Afficher la liste des régions suivi du nombre des départements</h2>";

            foreach ($departements as $region => $departementList) {
                echo "$region (".count($departementList).")\n";
            }
            ?>

</body>
</html>