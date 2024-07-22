<?php 

session_start();

$infoscommande = "\nnom et prenom :".$_REQUEST['nom+prenom'].", email :".$_REQUEST['email'].", telephone :".$_REQUEST['telephone'].", adresse du client :".$_REQUEST['adresse'];

$fp = fopen ('scriptcommand.txt', 'a');

fputs ($fp, $infoscommande);

fclose ($fp);

?>