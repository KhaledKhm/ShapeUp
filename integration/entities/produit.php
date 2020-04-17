<?PHP
class produit{

	private $code;
	private $libelleP;
	private $quantite;
	private $prix;
	private $id;
	function __construct($code,$libelleP,$quantite,$prix,$id){
		$this->code=$code;
		$this->libelleP=$libelleP;
		$this->quantite=$quantite;
		$this->prix=$prix;
		$this->id=$id;
	}
	
	function getCode(){
		return $this->code;
	}

	function getLibelle(){
		return $this->libelleP;
	}
	function getQuant(){
		return $this->quantite;
	}
	function getPrix(){
		return $this->prix;
	}
	function getId(){
		return $this->id;
	}

	function setCode($code){
		$this->code=$code;
	}
	function setLibelle($libelleP){
		$this->libelleP=$libelleP;
	}
	function setQuant($quantite){
		$this->quantite=$quantite;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
    function setId($id){
		$this->id=$id;
	}
	
}

?>