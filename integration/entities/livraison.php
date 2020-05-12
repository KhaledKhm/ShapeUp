<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  ######################CLASS CODE GETS AND SETS FOR LIVRAISON############################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->

<?PHP
class livraison{
	private $idLivraison;
	private $destination;
	private $cinClient;
	private $cinLivreur;
	private $idCommande;
	function __construct($idLivraison,$destination,$cinClient,$cinLivreur,$idCommande){
		$this->idLivraison=$idLivraison;
		$this->destination=$destination;
		$this->cinClient=$cinClient;
		$this->cinLivreur=$cinLivreur;
		$this->idCommande=$idCommande;
	}
	
	function getIdLivraison(){
		return $this->idLivraison;
	}
	function getDestination(){
		return $this->destination;
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

	function setDestination($destination){
		$this->destination=$destination;
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