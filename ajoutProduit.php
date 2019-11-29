
<?php

include "../core/produitC.php";
include "../entities/produit.php";


if(isset($_POST['idproduit']) and isset($_POST['nom']) and isset($_POST['nbproduit'])and isset($_POST['prix']) and isset($_POST['description'])and isset($_POST['image']))

	{
        $produit1=new produit($_POST['idproduit'],$_POST['nom'],$_POST['nbproduit'],$_POST['prix'],$_POST['description'],$_POST['image']);
        $produitC1=new produitC();

        $produitC1->ajouterProduit($produit1);
echo "youpii";

header("location:afficherproduit.php");

	}
else
{



echo '<body onLoad="alert(\'id deja existant veuiller changer\')">';
//header("location:page_membre.php");
}














?>