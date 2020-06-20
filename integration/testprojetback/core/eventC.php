<?PHP
require_once"../config.php";
class evenementC {






	function recupererliste()
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
		$sql="insert into evenement (idEvent,libelleEvent,descriptionEvent,nbParticipant,adresseEvent,dateEvent,libelleCategorieEvent) values (:idEvent,:libelleEvent, :descriptionEvent,:nbParticipant,:adresseEvent ,:dateEvent, :libelleCategorieEvent)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
         $idEvent=$evenement->getidEvent();
        $libelleEvent=$evenement->getlibelleEvent();
        $descriptionEvent=$evenement->getdescriptionEvent();
        $nbParticipant=$evenement->getnbParticipant();
        $adresseEvent=$evenement->getadresseEvent();
        $dateEvent=$evenement->getdateEvent();
        $libelleCategorieEvent=$evenement->getlibelleCategorieEvent();
     
        $req->bindValue(':idEvent',$idEvent);
		$req->bindValue(':libelleEvent',$libelleEvent);
		$req->bindValue(':descriptionEvent',$descriptionEvent);
		$req->bindValue(':nbParticipant',$nbParticipant);
		$req->bindValue(':adresseEvent',$adresseEvent);
		$req->bindValue(':dateEvent',$dateEvent); 
		$req->bindValue(':libelleCategorieEvent',$libelleCategorieEvent);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function supprimerevent($idEvent){
		$sql="DELETE FROM evenement where idEvent=:idEvent";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idEvent',$idEvent);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimereventcat	($libelleCategorieEvent){
		$sql="DELETE FROM evenement where libelleCategorieEvent=:libelleCategorieEvent";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':libelleCategorieEvent',$libelleCategorieEvent);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierevent($evenement,$idEvent){
		$sql="UPDATE evenement SET libelleEvent=:libelleEvent, descriptionEvent=:descriptionEvent,nbParticipant=:nbParticipant,adresseEvent=:adresseEvent,dateEvent=:dateEvent,libelleCategorieEvent=:libelleCategorieEvent where idEvent=:idEvent";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$libelleEvent=$evenement->getlibelleEvent();
        $descriptionEvent=$evenement->getdescriptionEvent();
        $nbParticipant=$evenement->getnbParticipant();
        $adresseEvent=$evenement->getadresseEvent();
        $dateEvent=$evenement->getdateEvent();
       
        $libelleCategorieEvent=$evenement->getlibelleCategorieEvent();
      
		$req->bindValue(':idEvent',$idEvent);
		$req->bindValue(':libelleEvent',$libelleEvent);
		$req->bindValue(':descriptionEvent',$descriptionEvent);
		$req->bindValue(':nbParticipant',$nbParticipant);
		$req->bindValue(':adresseEvent',$adresseEvent);	
		$req->bindValue(':dateEvent',$dateEvent);
	
		$req->bindvalue('libelleCategorieEvent',$libelleCategorieEvent);

            $s=$req->execute();
			
     //       header('Location: backlivreur.php');
        }
        catch (Exception $e){
          echo " Erreur ! ".$e->getMessage();
   //echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
		function recupererevent($idEvent){ 
		$sql="SELECT * from evenement where idEvent=$idEvent";
		$db = config::getConnexion();
		try{

		$liste=$db->query($sql);
		//var_dump($liste);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function recupererfk(){
        $sql="SELECT * from categorieevent";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function recupererfk3($libelleCategorieEvent){ 
		$sql="SELECT * from where code=$libelleCategorieEvent";
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
	  function recuperermail(){
    $sql="SELECT email from utilisateur";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    }
function rechercherListeevenement($idEvent){
		$sql="SELECT * from evenement where idEvent=$idEvent";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function affichertri(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From evenement order by nbParticipant";
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