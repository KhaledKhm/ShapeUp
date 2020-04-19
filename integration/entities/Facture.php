
<?PHP
class facture extends {
	private $numFacture
	private $prixFacture
	private $DateFacture
	private $idCommande
	private $cinutilisateur


	function __construct($idCommande,$statusCommande){
		$this->numFacture=$numFacture;
		$this->prixFacture=$prixFacture;
		$this->DateFacture=$DateFacture;
		$this->idCommande=$idCommande;
		$this->cinutilisateur=$cinutilisateur;
	}
	function getNumFacture (){
		return $this->numFacture;
	}
	function getPrixFactured(){
		return $this->prixFacture;
	}
	function getdateFacture(){
		return $this->DateFacture;
	}
	function getidcommande(){
		return $this->idCommande;
	}
	function getcinutilisateur(){
		return $this->cinutilisateur;
	}
	

	function setnumFacture($numFacture){
		 $this->numFacture=$numFacture;
	function setPrixFacture($prixFacture){
		 $this->prixFacture=$prixFacture;
	function setdateFacture($DateFacture){
		 $this->DateFacture=$DateFacture;
	function setidcommande($idCommande){
		 $this->idCommande=$idCommande;
	function setidEvent($idCommande){
		 $this->cinutilisateur=$cinutilisateur;
	
	
}
?>
