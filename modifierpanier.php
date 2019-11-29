<?php
include "../core/produitsC.php";


$refp=$_POST["refp"];
$quantite=$_POST["quantite"];


$crimC=new panierC();
$crimC->modifierpanier($refp,$quantite);
header("location:afficherpanier.php");