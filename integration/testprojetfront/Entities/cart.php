<?PHP
class cart{

	private $idcart;
	private $cin;
	private $idProduit;
	private $idCommande;
	//private $quantite ;

	function __construct($cin,$idProduit,$quantite){
		
		
		$this->cin=$cin;
		$this->idProduit=$idProduit;
		$this->quantite=$quantite;
	
	}
	
	function getidcart(){
		return $this->idcart;
	}

	function getcin(){
		return $this->cin;
	}
	function getidProduit(){
		return $this->idProduit;
	}
	
	
	function getidCommande(){
		return $this->idCommande;
	}

	function getquantite(){
		return $this->quantite;
	}
	
	


}

?>