<?PHP
class appreciation{
	private $idAppreciation;
	private $texteAppreciation;
	private $noteAppreciation;
	private $cinUtilisateur;

	function __construct($idAppreciation, $texteAppreciation, $noteAppreciation, $cinUtilisateur){
		$this->idAppreciation=$idAppreciation;
		$this->texteAppreciation=$texteAppreciation;
		$this->noteAppreciation=$noteAppreciation;
		$this->cinUtilisateur=$cinUtilisateur;
	}
	
	function getIdAppreciation(){
		return $this->idAppreciation;
	}
	function gettexteAppreciation(){
		return $this->texteAppreciation;
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

	function settexteAppreciation($texteAppreciation){
		$this->texteAppreciation=$texteAppreciation;
	}
	function setNoteAppreciation($noteAppreciation){
		$this->noteAppreciation=$noteAppreciation;
	}
	function setCinUtilisateur($cinUtilisateur){
		$this->cinUtilisateur=$cinUtilisateur;
	}

	
}

?>