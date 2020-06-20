<?PHP
class categorieevent {
	private $idCategorieEvent;
	private $libelleCategorieEvent;
	private $descriptionCategorieEvent;


	function __construct($libelleCategorieEvent,$descriptionCategorieEvent){
		$this->idCategorieEvent=null;
		$this->libelleCategorieEvent=$libelleCategorieEvent;
		$this->descriptionCategorieEvent=$descriptionCategorieEvent;	
	}

	
	function getidCategorieEvent(){
		return $this->idCategorieEvent;
	}
	function getlibelleCategorieEvent(){
		return $this->libelleCategorieEvent;
	}
	function getdescriptionCategorieEvent(){
		return $this->descriptionCategorieEvent;
	}
	


function setidCategorieEvent($idCategorieEvent){
		 $this->idCategorieEvent=$idCategorieEvent;
	}
	function setlibelleCategorieEvent($libelleCategorieEvent){
		$this->libelleCategorieEvent=$libelleCategorieEvent;
	}
	function setdescriptionCategorieEvent($descriptionCategorieEvent){
		 $this->descriptionCategorieEvent=$descriptionCategorieEvent;
	}}
	
?>