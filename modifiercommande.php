<?php
include "../core/commandeC.php";

$IDCommande=$_POST["IDCommande"];
$etat=$_POST["etat"];


$crimC=new commandeC();
$crimC->modifiercommande($IDCommande,$CIN,$prixTotal,$etat,$date);
header("location:affichercommande.php");