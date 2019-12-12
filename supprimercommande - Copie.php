<?PHP
include "../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_GET["IDCommande"])){
	$commandeC->supprimercommande($_GET["IDCommande"]);
	header('Location: affichercommande.php');
}

?>