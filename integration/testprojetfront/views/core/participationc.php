
<?PHP
require_once"../config.php";
class participationC{
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
		function recupererutilisateur($cin){ 
		$sql="SELECT * from utilisateur where cinUtilisateur = :cin";
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



        function ajouterparticipation($participation)
	 {
		$sql="insert into participation (idParticipation,idEvent,cinUtilisateur) values (:idParticipation,:idEvent,:cinUtilisateur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idParticipation=$participation->getidparticipation();
        $idEvent=$participation->getidEvent();
        $cinUtilisateur=$participation->getcinUtilisateur();
        $req->bindValue(':idParticipation',$idParticipation);
		$req->bindValue(':idEvent',$idEvent);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);
        $req->execute();}
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	}

	
