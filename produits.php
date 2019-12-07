<?PHP
class panier{
	
	private $type;
	
	private $CIN;
	
	private $IDService;
	
	private $IDProduit;
	
	

	function __construct($type,$CIN,$IDProduit,$IDService){
		
		$this->type=$type;
		
		$this->CIN=$CIN;
		$this->IDProduit=$IDProduit;
		$this->IDService=$IDService;
		
	
	}
	
	
	function gettype(){
		return $this->type;
	}
	
	
	function getCIN(){
		return $this->CIN;
	}
	

	function getIDProduit(){
		return $this->IDProduit;
	}
	
	function getIDService(){
	   return	 $this->IDService;
	}
	function settype($type){
		 $this->type=$type;
	}
	
	
	function setCIN($CIN){
		 $this->CIN=$CIN;
	}
	

	function setIDProduit($IDProduit){
		$this->IDProduit=$IDProduit;
	}
	
	function setIDService($IDService){
	    $this->IDService=$IDService;
	}
	
}

?>