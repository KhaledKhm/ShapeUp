<?PHP 
class bandachat
{
	private $idBand;
	private $tauxBand;
	private $descriptionBand;
	private $cinUtilisateur;

	function __construct($tauxBand,$descriptionBand,$cinUtilisateur){
		$this->idBand=NULL;
		$this->tauxBand=$tauxBand;
		$this->descriptionBand=$descriptionBand;
		$this->cinUtilisateur=$cinUtilisateur;
	}

	function getidBand(){
		return $this->idBand;
	}

	function gettauxBand(){
		return $this->tauxBand;
	}

	function getdescriptionBand(){
		return $this->descriptionBand;
	}

	function getcinUtilisateur(){
		return $this->cinUtilisateur;
	}


	function setidBand($idBand){
		$this->idBand=$idBand;
	}

	function settauxBand($tauxBand){
		$this->tauxBand=$tauxBand;
	}

	function setdescriptionPromotion($descriptionPromotion){
		$this->descriptionBand=$descriptionBand;
	}

	function setcinUtilisateur($idUtilisateur){
		$this->cinUtilisateur=$cinUtilisateur;
	}

}
?>