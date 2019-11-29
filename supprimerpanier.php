<?PHP
include "../core/produitsC.php";
$panierC=new panierC();
if (isset($_GET["IDProduit"])){
	$panierC->supprimerpanier($_GET["IDProduit"]);
	header('Location: afficherpanier.php');
}

?>