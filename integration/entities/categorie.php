<?PHP
class categorie{

	private $id;
	private $libelleC;
	private $descriptionC;
	function __construct($id,$libelleC,$descriptionC){
		$this->id=$id;
		$this->libelleC=$libelleC;
		$this->descriptionC=$descriptionC;
	}
	
	function getId(){
		return $this->id;
	}
	function getLibel(){
		return $this->libelleC;
	}
	function getDesc(){
		return $this->descriptionC;
	}
	

	function setId($id){
		$this->id=$id;
	}
	function setLibel($libelleC){
		$this->libelleC;
	}
	function setDesc($descriptionC){
		$this->descriptionC=$descriptionC;
	}
	
}

?>