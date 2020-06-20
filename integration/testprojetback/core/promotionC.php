<?PHP
include_once "../config.php";
class promotionC{
	function ajouterpromotion($promotion){
		$sql="insert into promotion (idPromotion,tauxPromotion,descriptionPromotion,idProduit,datedepartPromotion,datefinPromotion) values 
(:idPromotion, :tauxPromotion,:descriptionPromotion,:idProduit,:datedepartPromotion,:datefinPromotion)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idPromotion=$promotion->getidPromotion();
        $tauxPromotion=$promotion->gettauxPromotion();
        $descriptionPromotion=$promotion->getdescriptionPromotion();
        $idProduit=$promotion->getidProduit();
        $datedepartPromotion=$promotion->getdatedepartPromotion();
        $datefinPromotion=$promotion->getdatefinPromotion();
        $req->bindValue(':idPromotion',$idPromotion);
		$req->bindValue(':tauxPromotion',$tauxPromotion);
		$req->bindValue(':descriptionPromotion',$descriptionPromotion);
		$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':datedepartPromotion',$datedepartPromotion);
		$req->bindValue(':datefinPromotion',$datefinPromotion);
        $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}


    function recupererliste(){
        $sql="SELECT * from promotion";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function supprimerpromotion($idPromotion){
        $sql="DELETE FROM promotion where idPromotion= :idPromotion";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idPromotion',$idPromotion);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierpromotion($promotion,$idPromotion){
        $sql="UPDATE promotion SET  tauxPromotion=:tauxPromotion,descriptionPromotion=:descriptionPromotion,idProduit=:idProduit,datedepartPromotion=:datedepartPromotion,datefinPromotion=:datefinPromotion WHERE idPromotion=:idPromotion";
        $db = config::getConnexion();
        try{

        $req=$db->prepare($sql);
        $tauxPromotion=$promotion->gettauxPromotion();
        $descriptionPromotion=$promotion->getdescriptionPromotion();
        $idProduit=$promotion->getidProduit();
        $datedepartPromotion=$promotion->getdatedepartPromotion();
        $datefinPromotion=$promotion->getdatefinPromotion();
        $req->bindValue(':idPromotion',$idPromotion);
        $req->bindValue(':tauxPromotion',$tauxPromotion);
        $req->bindValue(':descriptionPromotion',$descriptionPromotion);
        $req->bindValue(':idProduit',$idProduit);
        $req->bindValue(':datedepartPromotion',$datedepartPromotion);
        $req->bindValue(':datefinPromotion',$datefinPromotion);
        $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }


    function recupererpromotion($idPromotion){
            $sql="SELECT * from promotion where idPromotion=$idPromotion";
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
        $sql="SELECT * from produit";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererfk2($idProduit){
    $sql="SELECT * from produit where code=$idProduit";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
    }

    function recuperermail(){
    $sql="SELECT email from utilisateur where role=0";
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