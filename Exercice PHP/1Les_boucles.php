<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles</title>
</head>
<body>
        <?php
            for ($i = 0; $i <= 151; $i += 2) {
                echo $i . " ";
            }
        ?>
        <?php
            for ($i = 0; $i < 500; $i++) {
                echo "Je dois faire des sauvegardes régulières de mes fichiers\n";
            }
        ?>
        <?php
            echo "<table border='1'>";
            echo "<tr><th>x</th>";
                for ($i = 0; $i <= 10; $i++) {
            echo "<th>$i</th>";
            }
            echo "</tr>";
                for ($i = 0; $i <= 10; $i++) {
            echo "<tr><th>$i</th>";
                for ($j = 0; $j <= 10; $j++) {
            echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
            }
            echo "</table>";
        ?>
</body>
</html>