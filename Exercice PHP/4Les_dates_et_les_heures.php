<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les dates et les heures</title>
</head>
<body>

    <?php

    // Trouvez le numéro de semaine de la date suivante : 14/07/2019.

        $date = new DateTime('2019-07-14');
        $weekNumber = $date->format('W');
        echo "Le numéro de semaine est : $weekNumber";

    ?>
    <br><br><br><br>
    <?php

    // Combien reste-t-il de jours avant la fin de votre formation.

        $target_date = new DateTime('2024-08-04');
        $now = new DateTime();
        $interval = $target_date->diff($now);
        echo $interval->days;

    ?>
    <br><br><br><br>
    <?php

    // Comment déterminer si une année est bissextile ? 

        function isLeapYear($year) {
            return ($year % 4 == 0 && $year % 100!= 0) || $year % 400 == 0;
        }
        
        $year = 2024; // exemple
        if (isLeapYear($year)) {
            echo "$year est une année bissextile.";
        } else {
            echo "$year n'est pas une année bissextile.";
        }
    
    ?>
    <br><br><br><br>
    <?php

    // Montrez que la date du 32/17/2019 est erronée. 

        $dateString = '32/17/2019';
        $dateArray = explode('/', $dateString);
        $day = $dateArray[0];
        $month = $dateArray[1];
        $year = $dateArray[2];
        
        try {
            $date = new DateTime("$year-$month-$day");
            echo "La date $dateString est valide.";
        } catch (Exception $e) {
            echo "La date $dateString est erronée.";
        }
    
    ?>
    <br><br><br><br>
    <?php

    // Affichez l'heure courante sous cette forme : 11h25.
    
        $heure = date('G'); // heure en format 24h
        $minutes = date('i'); // minutes
        echo "$heure h$minutes";
    
    ?>
    <br><br><br><br>
    <?php

    // Ajoutez 1 mois à la date courante. 

        $now = new DateTime();
        $now->modify('+1 month');
        echo "La date dans 1 mois est : " . $now->format('d/m/Y');

    ?>
    <br><br><br><br>
    <?php

    // Que s'est-il passé le 1000200000

        $unixTimestamp = 1000200000;
        $date = date('Y-m-d H:i:s', $unixTimestamp);
        echo "Que s'est-il passé le $unixTimestamp? C'était le $date!  les États-Unis ont été frappés par une série d'attentats terroristes";// C'était le 2001-09-09 01:46:40!
    ?>
    
</body>
</html>