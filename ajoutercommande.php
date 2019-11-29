<?php
include "../entities/commande.php";
include "../core/commandeC.php";
/*if( isset($_POST["nom"]) and isset($_POST["prix"]) and isset($_POST["description"]) and isset($_POST["image"]))
{*/
    $cri=new commande($_POST["IDCommande"],$_POST["CIN"],$_POST["prixTotal"],$_POST["etat"],$_POST["date"]);
    $criC=new commandeC();
    $criC->ajoutercommande($cri);
    header('Location: afficherpanier.php')
/*   
}
else
{
    echo "CIN Déja Utilisé";
}*/
?>