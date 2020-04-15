<?PHP
class livraison{
	private $idLivraison;
	private $destinaion;
	private $cinClient;
	private $cinLivreur;
	private $idCommande;
	function __construct($idLivraison,$destinaion,$cinClient,$cinLivreur,$idCommande){
		$this->idLivraison=$idLivraison;
		$this->destinaion=$destinaion;
		$this->cinClient=$cinClient;
		$this->cinLivreur=$cinLivreur;
		$this->idCommande=$idCommande;
	}
	
	function getIdLivraison(){
		return $this->idLivraison;
	}
	function getDestination(){
		return $this->destinaion;
	}
	function getCinClient(){
		return $this->cinClient;
	}
	function getCinLivreur(){
		return $this->cinLivreur;
	}
	function getIdCommande(){
		return $this->idCommande;
	}

	function setDestination($destinaion){
		$this->destinaion=$destinaion;
	}
	function setCinClient($cinClient){
		$this->cinClient=$cinClient;
	}
	function setCinLivreur($cinLivreur){
		$this->cinLivreur=$cinLivreur;
	}
	function setIdCommande($idCommande){
		$this->idCommande=$idCommande;
	}
	
}

?>