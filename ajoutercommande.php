<?php
include "../entities/commande.php";

include "../core/commandeC.php";
   include "../core/produitsC.php";

/*if( isset($_POST["nom"]) and isset($_POST["prix"]) and isset($_POST["description"]) and isset($_POST["image"]))
{*/
    $cri=new commande($_POST["IDCommande"],$_POST["CIN"],$_POST["prixTotal"],0,$_POST["date"]);
    $criC=new commandeC();
    $criC->ajoutercommande($cri);

    $criC1=new panierC();
    $criC1->supprimertoutpanier();
    header('Location: affichercommande.php')

/*   
}
else
{
    echo "CIN Déja Utilisé";
}*/
?>