<?PHP 
class promotion
{
	private $idPromotion;
	private $tauxPromotion;
	private $descriptionPromotion;
	private $idProduit;
	private $datedepartPromotion;
	private $datefinPromotion;

	function __construct($tauxPromotion,$descriptionPromotion,$idProduit,$datedepartPromotion,$datefinPromotion){
		$this->idPromotion=NULL;
		$this->tauxPromotion=$tauxPromotion;
		$this->descriptionPromotion=$descriptionPromotion;
		$this->idProduit=$idProduit;
		$this->datedepartPromotion=$datedepartPromotion;
		$this->datefinPromotion=$datefinPromotion;
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

	function getdatedepartPromotion(){
		return $this->datedepartPromotion;
	}

	function getdatefinPromotion(){
		return $this->datefinPromotion;
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

	function setdatedepartPromotion($datedepartPromotion){
		$this->datedepartPromotion=$datedepartPromotion;
	}

	function setdatefinPromotion($datefinPromotion){
		$this->datefinPromotion=$datefinPromotion;
	}

}
?>