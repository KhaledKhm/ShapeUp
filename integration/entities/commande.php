
<?PHP
class commande extends {
	
	
	private $idCommande
	private $statusCommande
	private $quantite
	private $dateCommande


	function __construct($idCommande,$statusCommande){
		$this->idCommande=$idCommande;
		$this->statusCommande=$statusCommande;
		$this->quantite=$quantite
		$this->dateCommande=$dateCommande
	}
	
	function getidCommande(){
		return $this->idCommande;
	}
	function getstatusCommande(){
		return $this->statusCommande;
	}
	function getquantite(){
		return $this->quantite;
	}
	function getdate(){
		return $this->dateCommande;
	}
	

	
	
	function setidEvent($idCommande){
		 $this->idCommande=$idCommande;
	}
	function setlibelleEvent($statusCommande){
		$this->statusCommande=$statusCommande;
	}
	function setlibelleEvent($quantite){
		$this->quantite=$quantite;
	}
	function setlibelleEvent($date){
		$this->dateCommande=$dateCommande;
	}
	

}

?>
