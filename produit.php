<?PHP
class Produit{
	private $IDProduit;
	private $nom;
	private $prix;
	private $nbProduit;
	private $description;


	function __construct($IDProduit,$nom,$prix,$nbProduit,$description){
		$this->prix=$prix;
		$this->nom=$nom;
		$this->nbProduit=$nbProduit;
		$this->IDProduit=$IDProduit;
		$this->description=$description;

	
	}
	
	function getPrix(){
		return $this->prix;
	}
	function getNom(){
		return $this->nom;
	}
	function getnbProduit(){
		return $this->nbProduit;
	}

	function getdescription(){
		return $this->description;
	}
	
	function getIDProduit(){
		return $this->IDProduit;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setnbProduit($nbProduit){
		$this->nbProduit=$nbProduit;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}

	function setdescription($description){
		$this->description=$description;
	}

	function setIDProduit($IDProduit){
		$this->IDProduit=$IDProduit;
	}
	
}

?>