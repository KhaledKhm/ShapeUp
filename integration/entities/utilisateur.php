<?PHP
class client{
	private $cin;
	private $nom;
	private $prenom;
	private $password;
	private $sexe;
	private $dateNaiss;
	private $adresse;
	private $numtel;
	private $email;
	private $dateInscription;
	private $role;
	function __construct($cin,$nom,$prenom,$password,$sexe,$dateNaiss,$adresse,$numtel,$email,$dateInscription,$role){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->password=$password;
		$this->sexe=$sexe;
		$this->dateNaiss=$dateNaiss;
		$this->adresse=$adresse;
		$this->numtel=$numtel;
		$this->email=$email;
		$this->dateInscription=$dateInscription;
		$this->role=$role;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
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
	function getNumtel(){
		return $this->numtel;
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

	function setCin($cin){	
		$this->cin=$cin;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setSexe($password){
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
	function setNumtel($prenom){
		$this->numtel=$numtel;
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