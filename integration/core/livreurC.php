<?PHP
include "../config.php";
class livreurC {
function afficherlivreur ($livreur){
		echo "Cin: ".$livreur->getCinLivreur()."<br>";
		echo "Nom: ".$livreur->getNomLivreur()."<br>";
		echo "Prénom: ".$livreur->getPrenomLivreur()."<br>";
	}
	function ajouterlivreur($livreur){
		$sql="insert into livreur (cinLivreur,nomLivreur,prenomLivreur) values (:cin, :nom,:prenom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($cin){
		$sql="DELETE FROM livreur where cinLivreur= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cinLivreur',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($livreur,$cinLivreur){
		$sql="UPDATE livreur SET cinLivreur=:cinn, nomLivreur=:nomLivreur,prenomLivreur=:prenomLivreur WHERE cinLivreur=:cinLivreur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$livreur->getCinLivreur();
        $nom=$livreur->getNomLivreur();
        $prenom=$livreur->getPrenomLivreur();
		$datas = array(':cinn'=>$cinn, ':cinLivreur'=>$cinLivreur, ':nomLivreur'=>$nomLivreur,':prenomLivreur'=>$prenomLivreur);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cinLivreur',$cinLivreur);
		$req->bindValue(':nomLivreur',$nomLivreur);
		$req->bindValue(':prenomLivreur',$prenomLivreur);	
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
}

?>