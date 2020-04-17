<?PHP
class evenement extends {
	private $idEvent;
	private $libelleEvent;
	private $desciptionEvent;
	private $nbParticipant;
	private $adresseEvent;
	private $dateEvent;
	private $idPromotion;
	private $idCategorieEvent;
	private $cinUtilisateur;



	function __construct($idEvent,$libelleEvent,$desciptionEvent,$nbParticipant,$adresseEvent,$dateEvent,$idPromotion,$idCategorieEvent,$cinUtilisateur){
		$this->idEvent=$idEvent;
		$this->libelleEvent=$libelleEvent;
		$this->descriptionEvent=$descriptionEvent;
		$this->nbParticipant=$nbParticipant;
		$this->adresseEvent=$adresseEvent;
		$this->dateEvent=$dateEvent;
		$this->idPromotion=$idPromotion;
		$this->idCategorieEvent=$idCategorieEvent;
		$this->cinUtilisateur=$cinUtilisateur;	}

	
	function getidEvent(){
		return $this->idEvent;
	}
	function getlibelleEvent(){
		return $this->libelleEvent;
	}
	function getdescriptionEvent(){
		return $this->descriptionEvent;
	}
	function getnbParticipant(){
		return $this->nbParticipant;
	}
	function getdateEvent(){
		return $this->dateEvent;
	}
	function getidPromotion(){
		return $this->idPromotion;
	}
	function getidCategorieEvent(){
		return $this->idCategorieEvent;
	}
	function getcinUtilisateur(){
		return $this->cinUtilisateur;
	}
	
	


function setidEvent($idEvent){
		 $this->idEvent=$idEvent;
	}
	function setlibelleEvent($libelleEvent){
		$this->libelleEvent=$libelleEvent;
	}
	function setdescriptionEvent($descriptionEvent){
		 $this->descriptionEvent=$descriptionEvent;
	}
	function setnbParticipant($nbParticipant){
		 $this->nbParticipant=$nbParticipant;
	}
	function setdateEvent($dateEvent){
		 $this->dateEvent=$dateEvent;
	}
	function setidPromotion($idPromotion){
		 $this->idPromotion=$idPromotion;
	}
	function setidCategorieEvent($idCategorieEvent){
		$this->idCategorieEvent=$idCategorieEvent;
	}
	function setcinUtilisateur($cinUtilisateur){
		 $this->cinUtilisateur=$cinUtilisateur;
	}
	
	
	
}

?>