<?PHP
class appreciation{
	private $idappreciation;
	private $typeAppreciation;
	private $noteAppreciation;
	private $cinUtilisateur

	function __construct($idappreciation, $typeAppreciation, $noteAppreciation, $cinUtilisateur){
		$this->idappreciation=$idappreciation;
		$this->typeAppreciation=$typeAppreciation;
		$this->noteAppreciation=$noteAppreciation;
		$this->cinUtilisateur=$cinUtilisateur;
	}
	
	function getIdAppreciation(){
		return $this->idAppreciation;
	}
	function getTypeAppreciation(){
		return $this->typeAppreciation;
	}
	function getNoteAppreciation(){
		return $this->noteAppreciation;
	}
	function getCinUtilisateur(){
		return $this->cinUtilisateur;
	}


	function setIdAppreciation($idAppreciation){
		$this->idAppreciation=$idAppreciation;
	}

	function setTypeAppreciation($typeAppreciation){
		$this->typeAppreciation=$typeAppreciation;
	}
	function setNoteAppreciation($noteAppreciation){
		$this->noteAppreciation=$noteAppreciation;
	}
	function setCinUtilisateur($cinUtilisateur){
		$this->cinUtilisateur=$cinUtilisateur;
	}

	
}

?>