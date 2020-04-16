<?PHP 
class promotion
{
	private $idPromotion;
	private $tauxPromotion;
	private $descriptionPromotion;
	private $idProduit;

	function __construct(,$tauxPromotion,$descriptionPromotion,$idProduit){
		$this->idPromotion=NULL;
		$this->tauxPromotion=$tauxPromotion;
		$this->descriptionPromotion=$descriptionPromotion;
		$this->idProduit=$idProduit;
	}

	function getidPromotion(){
		return $this->idPromotion;
	}

	function gettauxPromotion(){
		return $this->tauxPromotion;
	}

	function getdescriptionPromotion(){
		return $this->descriptionPromotion;
	}

	function getidProduit(){
		return $this->idProduit;
	}


	function setidPromotion($idPromotion){
		$this->idPromotion=$idPromotion;
	}

	function settauxPromotion($tauxPromotion){
		$this->tauxPromotion=$tauxPromotion;
	}

	function setdescriptionPromotion($descriptionPromotion){
		$this->descriptionPromotion=$descriptionPromotion;
	}

	function setidProduit($idProduit){
		$this->idProduit=$idProduit;
	}

}
?>