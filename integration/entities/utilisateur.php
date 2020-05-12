<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  ########################CLASS CODE GETS AND SETS FOR USER###############################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->


<?PHP
include_once "../config.php";
class utilisateur{
	private $cinUtilisateur;
	private $nom;
	private $prenom;
	private $password;
	private $sexe;
	private $role;
	private $dateNaiss;
	private $adresse;
	private $numTel;
	private $email;
	private $dateInscription;
	//public $conn;

	function __construct($cinUtilisateur, $nom, $prenom, $password, $sexe, $dateNaiss, $adresse, $numTel, $email){
		$this->cinUtilisateur=$cinUtilisateur;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->password=$password;
		$this->sexe=$sexe;
		//$this->role=$role;
		$this->dateNaiss=$dateNaiss;
		$this->adresse=$adresse;
		$this->numTel=$numTel;
		$this->email=$email;
		$this->dateInscription=date("y-m-d");
	/*	$c=new config();
		$this->conn=$c->getConnexion();*/
	}
	
	function getCinUtilisateur(){
		return $this->cinUtilisateur;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getPassword(){
		return $this->password;
	}
	function getSexe(){
		return $this->sexe;
	}
	function getDateNaiss(){
		return $this->dateNaiss;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getNumTel(){
		return $this->numTel;
	}
	function getEmail(){
		return $this->email;
	}
	function getDateInscription(){
		return $this->dateInscription;
	}
	
	function getRole(){
		return $this->role;
	}


	function setCinUtilisateur($cinUtilisateur){	
		$this->cinUtilisateur=$cinUtilisateur;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setPassword($password){
		$this->password=$password;
	}
	function setSexe($sexe){
		$this->sexe=$sexe;
	}
	function setDateNaiss($dateNaiss){
		$this->dateNaiss=$dateNaiss;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setNumTel($numTel){
		$this->numTel=$numTel;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setDateInscription($dateInscription){
		$this->dateInscription=$dateInscription;
	}
	function setRole($role){
		$this->role=$role;
	}
	/*public function Logedin($conn,$cinUtilisateur,$password)
	{	$password=md5(md5($password));
		//echo "$password";
		$req="select * from utilisateur where cinUtilisateur='$cinUtilisateur' && password='$password'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
*/
	
	
}

?>