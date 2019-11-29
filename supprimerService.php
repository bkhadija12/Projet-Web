<?php
require "../entities/Services.php";

$Services = new Services();
$Services->setIDService($_GET['IDService']); 

$Services->supprimer();
$Services->closeConnection();



