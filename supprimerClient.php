<?php
require "../entities/Client.php";

$Client = new Client();
$Client->setCIN($_GET['CIN']); 

$Client->supprimer();
$Client->closeConnection();



