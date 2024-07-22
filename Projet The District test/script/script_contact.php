<?php 

session_start();

$infoscontact = "\nnom et prenom :".$_REQUEST['nom'].",prenom :".$_REQUEST['prenom'].", email :".$_REQUEST['email'].", telephone :".$_REQUEST['telephone'].", adresse du client :".$_REQUEST['adresse'];

$fp = fopen ('scriptcontact.txt', 'a');

fputs ($fp, $infoscontact);

fclose ($fp);

?>