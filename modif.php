<?php
include "../core/produitC.php";

if(isset($_POST['modifier']))
{
$id=$_POST["idproduit"];
$nom=$_POST["nom"];
$nbproduit=$_POST["nbproduit"];
$prix=$_POST["prix"];
$description=$_POST["description"];
$image=$_POST["image"];

$produit=new produitC();
$produit->modifierProduit($id,$nom,$nbproduit,$prix,$description,$image);
header("location:page-my-bookmarks.php");
}