<?php
require "../entities/Services.php";

$Services = new Services();
$Services->setIDservice($_GET['IDservice']); 
$Services->setNom($_GET['nom']);
$Services->setDescription($_GET['description']); 
$Services->setPrix($_GET['prix']);
$Services->setIDPromotion($_GET['IDPromotion']);
$Services->setNbplace($_GET['nbplace']);
$Services->setType($_GET['type']);
$Services->setDateInscription($_GET['dateInscription']);

$Services->ajouter();
$Services->closeConnection();



