<?php
include '../core/produitC.php';
$produit= new produitC();

if(isset($_POST['id']))
{
$produit = $produit->supprimerproduit($_POST['id']);
header("location:afficherProduit.php");


}








?>