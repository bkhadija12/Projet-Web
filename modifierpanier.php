<?php
include "../core/produitsC.php";

if(isset($_POST["IDProduit"]) && isset($_POST["quantite"]))
{
	$IDProduit=$_POST["IDProduit"];
$quantite=$_POST["quantite"];


$crimC=new panierC();
$crimC->modifierpanier($IDProduit,$quantite);
header("location:afficherpanier.php");
}
else
{
	echo "error";
}



?>