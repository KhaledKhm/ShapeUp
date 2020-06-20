<?PHP
class commande {
	
	
	private $cinUtilisateur ;


	function __construct($cinUtilisateur){
	

		$this->cinUtilisateur=$cinUtilisateur;
	}
	
	function getidCommande(){
		return $this->idCommande;
	}
	function getstatusCommande(){
		return $this->statusCommande;
	}
	function getidProduit(){
		return $this->idProduit;
	}
	function getquantite(){
		return $this->quantite;
	}
	function getcinUtilisateur(){
		return $this->cinUtilisateur;
	}
	function getprix(){
		return $this->prix;
	}
	
	

	
	
	function setidCommande($idCommande){
		 $this->idCommande=$idCommande;
	}
	function setStatusCommande($statusCommande){
		$this->statusCommande=$statusCommande;
	}
	function setidProduit($idProduit){
		$this->idProduit=$idProduit;
	}
	
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setcinUtilisateur($cinUtilisateur){
		$this->dateCommande=$cinUtilisateur;
	}




}

?>
