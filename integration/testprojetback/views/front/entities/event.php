<?PHP
class evenement{
	private $idEvent;
	private $libelleEvent;
	private $descriptionEvent;
	private $nbParticipant;
	private $adresseEvent;
	private $dateEvent;
	



	function __construct($libelleEvent,$descriptionEvent,$nbParticipant,$adresseEvent,$dateEvent){
	    $this->idEvent=null;
		$this->libelleEvent=$libelleEvent;
		$this->descriptionEvent=$descriptionEvent;
		$this->nbParticipant=$nbParticipant;
		$this->adresseEvent=$adresseEvent;
		$this->dateEvent=$dateEvent;}
		
	
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
	function getadresseEvent(){
		return $this->adresseEvent;
	}
	function getdateEvent(){
		return $this->dateEvent;
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
	function setadresseEvent($adresseEvent){
		 $this->adresseEvent=$adresseEvent;
	}
	function setdateEvent($dateEvent){
		 $this->dateEvent=$dateEvent;
	}

	
	
	
	
}
 ?>