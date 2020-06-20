<?PHP
include "../config.php";


class appreciationC {
function afficherAppreciation ($appreciation){
		echo "Id appreciation: ".$appreciation->getIdAppreciation()."<br>";
		echo "Texte appreciation: ".$appreciation->gettexteAppreciation()."<br>";
		echo "Note appreciation: ".$appreciation->getNoteAppreciation()."<br>";
		echo "Cin : ".$appreciation->getCinUtilisateur()."<br>";

	}
	function ajouterAppreciation($appreciation){
		$sql="insert into appreciation (idAppreciation, texteAppreciation, noteAppreciation, cinUtilisateur) values (:idAppreciation = 'default', :texteAppreciation, :noteAppreciation, :cinUtilisateur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idAppreciation=$appreciation->getIdAppreciation();
        $texteAppreciation=$appreciation->gettexteAppreciation();
        $noteAppreciation=$appreciation->getNoteAppreciation();
        $cinUtilisateur=$appreciation->getCinUtilisateur();

        //lier variable => paramètre
        $req->bindValue(':idAppreciation',$idAppreciation);
		$req->bindValue(':texteAppreciation',$texteAppreciation);
		$req->bindValue(':noteAppreciation',$noteAppreciation);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);

            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherAppreciations(){
		$sql="SElECT * From appreciation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	function afficherAppreciationsFront(){
		$sql="SElECT * From appreciation WHERE cinUtilisateur = $_SESSION[c]";
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
	function supprimerAppreciation($idAppreciation){
		$sql="DELETE FROM appreciation where idAppreciation= :idAppreciation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idAppreciation',$idAppreciation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAppreciation($appreciation,$idAppreciation){
		$sql="UPDATE appreciation SET idAppreciation =:idAppreciationn, texteAppreciation=:texteAppreciation, noteAppreciation=:noteAppreciation, cinUtilisateur=:cinUtilisateur WHERE idAppreciation=:idAppreciation";

		$db = config::getConnexion();
try{

        $req=$db->prepare($sql);
        $idAppreciationn=$appreciation->getIdAppreciation();                
        $texteAppreciation=$appreciation->gettexteAppreciation();
        $noteAppreciation=$appreciation->getNoteAppreciation();
        $cinUtilisateur=$appreciation->getCinUtilisateur();

        
$datas = array(':idAppreciationn'=>$idappreciationn, ':idAppreciation'=>$idAppreciation, ':texteAppreciation'=>$texteAppreciation,':noteAppreciation'=>$noteAppreciation, ':cinUtilisateur'=>$cinUtilisateur);




		//lier variable => paramètre
		$req->bindValue(':idAppreciationn',$idAppreciationn);
		$req->bindValue(':idAppreciation',$idAppreciation);
		$req->bindValue(':texteAppreciation',$texteAppreciation);
		$req->bindValue(':noteAppreciation',$noteAppreciation);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   	echo " Les datas : " ;
  	print_r($datas);
        }
		
	}
	function recupererAppreciation($idAppreciation){
		$sql="SELECT * from appreciation where idAppreciation=$idAppreciation";
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