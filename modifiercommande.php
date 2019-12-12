<?php
include "../core/commandeC.php";

if(isset($_POST["IDCommande"]))
{
	$IDCommande=$_POST["IDCommande"];


$crimC=new commandeC();
$crimC->modifiercommande($IDCommande);
header("location:affichercommande_back.php");
}


?>