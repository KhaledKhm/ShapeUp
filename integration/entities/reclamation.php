<?PHP
class reclamation{
	private $idReclamation;
	private $typeReclamation;
	private $texteReclamation;
	private $etat;
	private $texteReponse;
	private $cinUtilisateur;

	function __construct($idReclamation, $typeReclamation, $texteReclamation, $etat, $texteReponse, $cinUtilisateur){
		$this->idReclamation=$idReclamation;
		$this->typeReclamation=$typeReclamation;
		$this->texteReclamation=$texteReclamation;
		$this->etat=$etat;
		$this->texteReponse=$texteReponse;
		$this->cinUtilisateur=$cinUtilisateur;
	}
	
	function getIdReclamation(){
		return $this->idReclamation;
	}
	function getTypeReclamation(){
		return $this->typeReclamation;
	}
	function getTexteReclamation(){
		return $this->texteReclamation;
	}
	function getEtat(){
		return $this->etat;
	}
	function getTexteReponse(){
		return $this->texteReponse;
	}
		function getCinUtilisateur(){
		return $this->cinUtilisateur;
	}


    function setIdReclamation($idReclamation){
		$this->idReclamation=$idReclamation;
	}

	function setTypeReclamation($typeReclamation){
		$this->typeReclamation=$typeReclamation;
	}
	function setTexteReclamation($texteReclamation){
		$this->texteReclamation=$texteReclamation;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setTexteReponse($texteReponsee){
		$this->texteReponse=$texteReponse;
	}
	function setCinUtilisateur($cinUtilisateur){
		$this->cinUtilisateur=$cinUtilisateur;
	}

	
}

?>