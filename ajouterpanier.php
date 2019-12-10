<?php
	include "../entities/produits.php";
	include "../core/produitsC.php";
	/*if( isset($_POST["nom"]) and isset($_POST["prix"]) and isset($_POST["description"]) and isset($_POST["image"]))
	{*/
	 $cri=new panier($_POST["type"],$_POST["CIN"],$_POST["IDProduit"],$_POST["IDService"],$_POST["quantite"]);
	$criC=new panierC();
	$criC->ajouterpanier($cri);
	header('Location: afficherpanier.php');
			   
				        
				/*   
				}
				else
				{
				    echo "CIN Déja Utilisé";
				}*/
				?>	