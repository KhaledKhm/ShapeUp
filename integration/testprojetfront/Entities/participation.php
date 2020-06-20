<?PHP
class participation{
	private $idParticipation;
	private $cinUtilisateur;
	private $idvent;
	

	




	function __construct($cinUtilisateur,$idEvent){
	    $this->idParticipation=null;
		$this->cinUtilisateur=$cinUtilisateur;
		$this->idEvent=$idEvent;
		
	}
		
	
	function getidParticipation(){
		return $this->idParticipation;
	}
	function getcinUtilisateur(){
		return $this->cinUtilisateur;
	}
	function getidEvent(){
		return $this->idEvent;}
	function setidEvent($idEvent){
		$this->idEvent=$idEvent;
	}
	

	function setcinUtilisateur($cinUtilisateur){
		$this->cinUtilisateur=$cinUtilisateur;
	}
	function idEvent($idEvent){
		 $this->idEvent=$idEvent;
	}
}