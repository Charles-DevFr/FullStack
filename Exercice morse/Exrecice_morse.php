<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method = "POST">
    <label for = "demande">Veuillez entrez le texte à traduire :</label>
    <input type = "textarea" rows = "4" cols = "40" id = "demande" name = "demande">
    </form>
    <?php
        // Récupère la chaîne d'entrée à partir de la requête POST
    $string = $_POST["demande"];
        // Appelle la fonction stringToMorse pour convertir la chaîne en code Morse
    stringToMorse ($string);

    function stringToMorse($string)
    {
        // Définir un tableau qui mappe chaque caractére à son code Morse correspondant
    $tableau = array(
    "A" => ".-",
    "B" => "-...",
    "C" => "-.-.",
    "D" => "-..",
    "E" => ".",
    "F" => "..-.",
    "G" => "--.",
    "H" => "....",
    "I" => "..",
    "J" => ".---",
    "K" => "-.-",
    "L" => ".-..",
    "M" => "--",
    "N" => "-.",
    "O" =>"---",
    "P" => ".--.",
    "Q" => "--.-",
    "R" => ".-.",
    "S" => "...",
    "T" => "-",
    "U" => "..-",
    "V" => "...-",
    "W" => ".--",
    "X" => "-..-",
    "Y" => "-.--",
    "Z" =>"--..",
    "0" => "-----",
    "1" => ".----",
    "2" => "..---",
    "3" => "...--",
    "4" =>"....-",
    "5" => ".....",
    "6" => "-....",
    "7" => "--...",
    "8" => "---..",
    "9" => "----.",
    " " => " " );// espace est mappé à un seul espace dans le code Morse

    //  Supprime tous les caractéres non alphanumériques de la chaine d'entrée
    $string = preg_replace('/[^a-zA-Z0-9 ]/', '', $string);//ça vire les caractere pas connu.

    // Initialise une variable pour stocker la traduction en code Morse
    $phrasetraduite = "";

    $i = 0;

    while($i != strlen($string)){
        // Récupère le caractère actuel et le convertit en majuscule
        $N = strtoupper(substr($string,$i,1));
        
        // Recherche le code Morse du caractère actuel dans le tableau $morsetrad
        $phrasetraduite = $phrasetraduite.$tableau[$N];
        
        // Affiche le caractère actuel et son code Morse correspondant
        echo substr($string,$i,1).'=>'.$tableau[$N].'<br>';
        
        // Incrémente le compteur
        $i++;
        
    }

     // Affiche la chaîne d'entrée et son code Morse correspondant
     if($string!=null){
        echo    '<br>'.$string.' : traduit en morse ça donne : '.$phrasetraduite;
                }
            }
?>
</body>
</html>