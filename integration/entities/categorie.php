<?PHP
class categorie{

	private $id;
	private $libelleC;
	private $descriptionC;
	private $img;
	function __construct($id,$libelleC,$descriptionC,$img){
		$this->id=$id;
		$this->libelleC=$libelleC;
		$this->descriptionC=$descriptionC;
		$this->img=$img;
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
	function getImg(){
		return $this->img;
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
	function setImg($img){
		return $this->img;
	}
	
}

?>