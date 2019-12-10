<?php
include "../core/produitsC.php";


$IDProduit=$_POST["IDProduit"];
$quantite=$_POST["quantite"];


$crimC=new panierC();
$crimC->modifierpanier($IDProduit,$quantite);
header("location:afficherpanier.php");