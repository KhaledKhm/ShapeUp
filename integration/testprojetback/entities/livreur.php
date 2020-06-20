<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  #######################CLASS CODE GETS AND SETS FOR LIVREUR#############################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->

<?PHP
class livreur{
	private $cinLivreur;
	private $nomLivreur;
	private $prenomLivreur;
	function __construct($cinLivreur,$nomLivreur,$prenomLivreur){
		$this->cinLivreur=$cinLivreur;
		$this->nomLivreur=$nomLivreur;
		$this->prenomLivreur=$prenomLivreur;
	}
	
	function getCinLivreur(){
		return $this->cinLivreur;
	}
	function getNomLivreur(){
		return $this->nomLivreur;
	}
	function getPrenomLivreur(){
		return $this->prenomLivreur;
	}

	function setCinLivreur($cinLivreur){	
		$this->cinLivreur=$cinLivreur;
	}
	function setNomLivreur($nomLivreur){
		$this->nomLivreur=$nomLivreur;
	}
	function setPrenomLivreur($prenomLivreur){
		$this->prenomLivreur=$prenomLivreur;
	}	
}

?>