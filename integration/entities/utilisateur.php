<?PHP
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

	function __construct($cinUtilisateur, $nom, $prenom, $password, $sexe,$role, $dateNaiss, $adresse, $numTel, $email){
		$this->cinUtilisateur=$cinUtilisateur;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->password=md5($password);
		$this->sexe=$sexe;
		$this->role=$role;
		$this->dateNaiss=$dateNaiss;
		$this->adresse=$adresse;
		$this->numTel=$numTel;
		$this->email=$email;
		$this->dateInscription=date("y-m-d");
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
		return md5($this->password);
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
	
	
	}

?>