<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  ########################CORE CODE AND FUNCTIONS FOR USER################################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->


<?PHP
include_once "../config.php";
class utilisateurC {
function afficherutilisateur ($utilisateur){
		echo "cinUtilisateur: ".$utilisateur->getCinUtilisateur()."<br>";
		echo "nom: ".$utilisateur->getNom()."<br>";
		echo "prenom: ".$utilisateur->getPrenom()."<br>";
		echo "password: ".$utilisateur->getPassword()."<br>";
		echo "sexe: ".$utilisateur->getSexe()."<br>";
		echo "role: ".$utilisateur->getRole()."<br>";
		echo "dateNaiss: ".$utilisateur->getDateNaiss()."<br>";
		echo "adresse: ".$utilisateur->getAdresse()."<br>";
		echo "numTel: ".$utilisateur->getNumTel()."<br>";
		echo "email: ".$utilisateur->getEmail()."<br>";
		echo "dateInscription: ".$utilisateur->getDateInscription()."<br>";
	}
	function ajouterutilisateur($utilisateur){
		$sql="insert into utilisateur (cinUtilisateur,nom,prenom,password,sexe,role,dateNaiss,adresse,numTel,email,dateInscription) values (:cinUtilisateur,:nom,:prenom,:password,:sexe,:role,:dateNaiss,:adresse,:numTel,:email,:dateInscription)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cinUtilisateur=$utilisateur->getCinUtilisateur();
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $password=$utilisateur->getPassword();
		$sexe=$utilisateur->getSexe();
		$role=$utilisateur->getRole();
        $dateNaiss=$utilisateur->getDateNaiss();
        $adresse=$utilisateur->getAdresse();
        $numTel=$utilisateur->getNumTel();
		$email=$utilisateur->getEmail();
		$dateInscription=$utilisateur->getDateInscription();
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':password',$password);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':role',$role);
		$req->bindValue(':dateNaiss',$dateNaiss);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':numTel',$numTel);
        $req->bindValue(':email',$email);	
        $req->bindValue(':dateInscription',$dateInscription);			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherutilisateurs(){
		$sql="SElECT * From utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerutilisateur($cinUtilisateur){
		$sql="DELETE FROM utilisateur where cinUtilisateur= :cinUtilisateur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);
		try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierutilisateur($utilisateur,$cinUtilisateur){
		$sql="UPDATE utilisateur SET cinUtilisateur=:cinUtilisateurn, nom=:nom,prenom=:prenom,password=:password,sexe=:sexe,role=:role,dateNaiss=:dateNaiss,adresse=:adresse,numTel=:numTel,email=:email WHERE cinUtilisateur=:cinUtilisateur";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$cinUtilisateurn=$utilisateur->getCinUtilisateur();
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $password=$utilisateur->getPassword();
		$sexe=$utilisateur->getSexe();
		$role=$utilisateur->getRole();
        $dateNaiss=$utilisateur->getDateNaiss();
        $adresse=$utilisateur->getAdresse();
        $numTel=$utilisateur->getNumTel();
		$email=$utilisateur->getEmail();

		$datas = array(':cinUtilisateurn'=>$cinUtilisateurn, ':cinUtilisateur'=>$cinUtilisateur, ':nom'=>$nom,':prenom'=>$prenom,':password'=>$password,':sexe'=>$sexe, ':role'=>$role,':dateNaiss'=>$dateNaiss,':adresse'=>$adresse,':numTel'=>$numTel,':email'=>$email);
		$req->bindValue(':cinUtilisateurn',$cinUtilisateurn);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':password',$password);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':role',$role);
		$req->bindValue(':dateNaiss',$dateNaiss);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':numTel',$numTel);
        $req->bindValue(':email',$email);	
		
		
            $s=$req->execute();
			
    
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererutilisateur($cinUtilisateur){
		$sql="SELECT * from utilisateur where cinUtilisateur=$cinUtilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>