<?PHP
class commande{
	
	private $IDCommande;
	private $prixTotal;
	private $CIN;
	private $etat;
	private $date;

	function __construct($IDCommande,$CIN,$prixTotal,$etat,$date){
		$this->prixTotal=$prixTotal;
		$this->IDCommande=$IDCommande;
		$this->CIN=$CIN;
		$this->etat=$etat;
		$this->date=$date;
	
	}
	
	function getprixTotal(){
		return $this->prixTotal;
	}
	function getIDCommande(){
		return $this->IDCommande;
	}
	function getCIN(){
		return $this->CIN;
	}
	function getetat(){
		return $this->etat;
	}
	
	function getdate(){
		return $this->date;
	}

	function setIDCommande($IDCommande){
		$this->IDCommande=$IDCommande;
	}
	function setCIN($CIN){
		$this->CIN=$CIN;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setprixTotal($prixTotal){
		$this->prixTotal=$prixTotal;
	}
	function setdate($date){
		$this->date=$date;
	}
	
}

?>