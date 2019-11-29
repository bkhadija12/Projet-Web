<?php
require "../entities/Client.php";

$Client = new Client();
$Client->setCIN($_GET['CIN']); 
$Client->setNom($_GET['nom']);
$Client->setPrenom($_GET['prenom']); 
$Client->setEmail($_GET['email']);
$Client->setNbEnfant($_GET['nb_enfant']);
$Client->setSituationFam($_GET['situationFam']);
$Client->setAdresse($_GET['adresse']);
$Client->setFonction($_GET['fonction']);
$Client->setMDP($_GET['MDP']);

$Client->modifier();

$Client->closeConnection();

?>

