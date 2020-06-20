<?PHP

include_once "../config.php";
include "../views/connexion.php";



class reclamationC {
function afficherReclamation ($reclamation){
		echo "Id reclamation: ".$reclamation->getIdReclamation()."<br>";
		echo "Type de reclamation: ".$reclamation->getTypeReclamation()."<br>";
		echo "Texte de reclamation: ".$reclamation->getTexteReclamation()."<br>";
		echo "Etat : ".$reclamation->getEtat()."<br>";
		echo "Texte Reponse: ".$reclamation->getTexteReponse()."<br>";
		echo "Cin : ".$reclamation->getCinUtilisateur()."<br>";

	}
	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (idReclamation, typeReclamation ,texteReclamation, etat, texteReponse, cinUtilisateur) values (:idReclamation = 'default', :typeReclamation, :texteReclamation, :etat, :texteReponse, :cinUtilisateur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idReclamation=$reclamation->getIdReclamation();
        $typeReclamation=$reclamation->getTypeReclamation();
        $texteReclamation=$reclamation->getTexteReclamation();
        $etat=$reclamation->getEtat();
        $texteReponse=$reclamation->getTexteReponse();
        $cinUtilisateur=$reclamation->getCinUtilisateur();


        //lier variable => paramètre
        $req->bindValue(':idReclamation',$idReclamation);
		$req->bindValue(':typeReclamation',$typeReclamation);
		$req->bindValue(':texteReclamation',$texteReclamation);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':texteReponse',$texteReponse);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);

            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherReclamations(){
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherReclamationsFront(){
		$sql="SElECT * From reclamation WHERE cinUtilisateur = $_SESSION[c]";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function afficherReclamationsNonTraitees(){
		$sql="SElECT * From reclamation where etat = 'non traitee'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function afficherReclamationsTraitees(){
		$sql="SElECT * From reclamation where etat = 'traitee'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function afficherReclamationsEnCours(){
		$sql="SElECT * From reclamation where etat = 'en cours'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerReclamation($idReclamation){
		$sql="DELETE FROM reclamation where idReclamation= :idReclamation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idReclamation',$idReclamation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$idReclamation){
		$sql="UPDATE reclamation SET  idReclamation =:idreclamationn, typeReclamation=:typeReclamation, texteReclamation=:texteReclamation, etat=:etat, texteReponse=:texteReponse, cinUtilisateur=:cinUtilisateur WHERE idReclamation=:idReclamation";

		$db = config::getConnexion();
try{

        $req=$db->prepare($sql);
        $idReclamationn=$reclamation->getIdReclamation();                
        $typeReclamation=$reclamation->getTypeReclamation();
        $texteReclamation=$reclamation->getTexteReclamation();
        $etat=$reclamation->getEtat();
        $texteReponse=$reclamation->getTexteReponse();
        $cinUtilisateur=$reclamation->getCinUtilisateur();

        
$datas = array(':idReclamationn'=>$idReclamationn, ':idReclamation'=>$idReclamation, ':typeReclamation'=>$typeReclamation,':texteReclamation'=>$texteReclamation,':etat'=>$etat, ':texteReponse'=>$texteReponse, ':cinUtilisateur'=>$cinUtilisateur);




		//lier variable => paramètre
		$req->bindValue(':idreclamationn',$idReclamationn);
		$req->bindValue(':idReclamation',$idReclamation);
		$req->bindValue(':typeReclamation',$typeReclamation);
		$req->bindValue(':texteReclamation',$texteReclamation);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':texteReponse',$texteReponse);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   	echo " Les datas : " ;
  	print_r($datas);
        }
		
	}
	function recupererReclamation($idReclamation){
		$sql="SELECT * from reclamation where idReclamation=$idReclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>