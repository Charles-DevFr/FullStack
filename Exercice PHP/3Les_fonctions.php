<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions</title>
</head>
<body>

    <?php

    // Ecrire une fonction qui permets de generer un lien
    
        function generate_link($url, $title) {
            return "<a href='$url'>$title</a>";
        }

    // Appelé de cette façon, la fonction doit générer

        echo generate_link ("https://www.reddit.com/", "Reddit Hug");
        
    ?>
<br><br><br><br>
    <?php

    // Ecrivez une fonction qui calcul la somme des valeurs d'un tableau

        function somme_tableau($tab) {
            return array_sum($tab);
        }
        
        $tab = array(4, 3, 8, 2);
        $resultat = somme_tableau($tab);
        echo $resultat;

    ?>
<br><br><br><br>
    <?php

    // Créer une fonction qui vérifie le niveau de complexité d'un mot de passe

        function complex_password($password) {
            if (strlen($password) < 8) {
                return false;
            }
            if (!preg_match('/\d/', $password)) {
                return false;
            }
            if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
                return false;
            }
            return true;
        }
        $resultat = complex_password("TopSecret42");
        echo $resultat;

    ?>
    
</body>
</html>