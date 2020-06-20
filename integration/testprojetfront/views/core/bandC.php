<?PHP
include_once "../config.php";
class bandC{
	function ajouterband($band){
		$sql="insert into bandachat (idBand,tauxBand,descriptionBand,cinUtilisateur) values 
(:idBand,:tauxBand,:descriptionBand,:cinUtilisateur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idBand=$band->getidBand();
        $tauxBand=$band->gettauxBand();
        $descriptionBand=$band->getdescriptionBand();
        $cinUtilisateur=$band->getcinUtilisateur();
        //lier variable => paramètre
        $req->bindValue(':idBand',$idBand);
		$req->bindValue(':tauxBand',$tauxBand);
		$req->bindValue(':descriptionBand',$descriptionBand);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);
        $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

    function recupererliste(){
        $sql="SELECT * from bandachat where tauxBand != 0";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

     function supprimerband($idBand){
        $sql="DELETE FROM bandachat where idBand= :idBand";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idBand',$idBand);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierband($band,$idBand){
        $sql="UPDATE bandachat SET  tauxBand=:tauxBand,descriptionBand=:descriptionBand,cinUtilisateur=:cinUtilisateur WHERE idBand=:idBand";
        $db = config::getConnexion();
        try{

        $req=$db->prepare($sql);
        //$idPromotion=$promotion->getidPromotion();
        $tauxBand=$band->gettauxBand();
        $descriptionBand=$band->getdescriptionBand();
        $cinUtilisateur=$band->getcinUtilisateur();
        //$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
        //lier variable => paramètre
        //$req->bindValue(':idPromotion2',$idPromotion2);
        $req->bindValue(':idBand',$idBand);
        $req->bindValue(':tauxBand',$tauxBand);
        $req->bindValue(':descriptionBand',$descriptionBand);
        $req->bindValue(':cinUtilisateur',$cinUtilisateur);

            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   //echo " Les datas : " ;
  //print_r($datas);
        }
        
    }

    function recupererband($idBand){
        $sql="SELECT * from bandachat where idBand=$idBand";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererfk(){
        $sql="SELECT * from utilisateur where role=0";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function recuperermail($cinUtilisateur){
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