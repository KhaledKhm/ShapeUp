<?PHP
include "../config.php";
class evenementC {
function afficherevent ($evenement)

{       echo "idEvent: ".$evenement->getidEvent()."<br>";
		echo "libelleEvent: ".$evenement->getlibelleEvent()."<br>";
		echo "desciptionEvent: ".$evenement->getdescriptionEvent()."<br>";
		echo "nbParticipant: ".$evenement->getnbParticipant()."<br>";
		echo "adresseEvent: ".$evenement->getadresseEvent()."<br>";
		echo "dateEvent: ".$evenement->getdateEvent()."<br>";

	}
	function afficherevents()
	{
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SElECT * From evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function ajouterevenement($evenement)
	 {
		$sql="insert into evenement (idEvent,libelleEvent,descriptionEvent,nbParticipant,adresseEvent,dateEvent) values (:idEvent,:libelleEvent, :descriptionEvent,:nbParticipant,:adresseEvent ,:dateEvent)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
         $idEvent=$evenement->getidEvent();
        $libelleEvent=$evenement->getlibelleEvent();
        $descriptionEvent=$evenement->getdescriptionEvent();
        $nbParticipant=$evenement->getnbParticipant();
        $adresseEvent=$evenement->getadresseEvent();
        $dateEvent=$evenement->getdateEvent();
        $req->bindValue(':idEvent',$idEvent);
		$req->bindValue(':libelleEvent',$libelleEvent);
		$req->bindValue(':descriptionEvent',$descriptionEvent);
		$req->bindValue(':nbParticipant',$nbParticipant);
		$req->bindValue(':adresseEvent',$adresseEvent);
		$req->bindValue(':dateEvent',$dateEvent);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function supprimerevent($libelleEvent){
		$sql="DELETE FROM evenement where libelleEvent=:libelleEvent";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':libelleEvent',$libelleEvent);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
	function modifierevent($evenement,$libelleEvent){
		$sql="UPDATE evenement SET libelleEvent=:libelle, descriptionEvent=:descriptionEvent,nbParticipant=:nbParticipant,adresseEvent=:adresseEvent,dateEvent=:dateEvent where libelleEvent=:libelleEvent";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$libelle=$evenement->getlibelleEvent();
        $descriptionEvent=$evenement->getdescriptionEvent();
        $nbParticipant=$evenement->getnbParticipant();
        $adresseEvent=$evenement->getadresseEvent();
        $dateEvent=$dateEvent->getdateEvent();
		$req->bindValue(':libelle',$libelle);
		$req->bindValue(':libelleEvent',$libelleEvent);
		$req->bindValue(':descriptionEvent',$descriptionEvent);
		$req->bindValue(':nbParticipant',$nbParticipant);
		$req->bindValue(':adresseEvent',$adresseEvent);	
		$req->bindValue(':dateEvent',$dateEvent);
		
            $s=$req->execute();
			
     //       header('Location: backlivreur.php');
        }
        catch (Exception $e){
        /*    echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);*/
        }
		
	}
		function recupererevent($libelleEvent){ 
		$sql="SELECT * from evenement where libelleEvent=$libelleEvent";
		$db = config::getConnexion();
		try{

		$liste=$db->query($sql);
		var_dump($liste);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	}
	/*function afficherlivreurs(){
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
	function supprimerlivreur($cinLivreur){
		$sql="DELETE FROM livreur where cinLivreur= :cinLivreur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cinLivreur',$cinLivreur);
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
}*/


?>