<?PHP
include "../config.php";
class livraisonC {
function afficherlivraison ($livraison){
		echo "idLivraison: ".$livraison->getIdLivraison()."<br>";
		echo "destination: ".$livraison->getDestination()."<br>";
		echo "cinClient: ".$livraison->getCinClient()."<br>";
		echo "cinLivreur: ".$livraison->getCinLivreur()."<br>";
		echo "idCommande: ".$livraison->getIdCommande()."<br>";
	}
	function ajouterlivraison($livraison){
		$sql="insert into livraison (idLivraison,destination,cinClient,cinLivreur,idCommande) values (:idLivraison, :destination,:cinClient,:cinLivreur,:idCommande)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idLivraison=$livraison->getIdLivraison();
        $destinaion=$livraison->getDestination();
        $cinClient=$livraison->getCinClient();
        $cinLivreur=$livraison->getCinLivreur();
		$idCommande=$livraison->getIdCommande();
		$req->bindValue(':idLivraison',$idLivraison);
		$req->bindValue(':destination',$destination);
		$req->bindValue(':cinClient',$cinClient);
		$req->bindValue(':cinLivreur',$cinLivreur);
        $req->bindValue(':idCommande',$idCommande);			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraisons(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.idLivraison= a.idLivraison";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($idLivraison){
		$sql="DELETE FROM livraison where idLivraison= :idLivraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idLivraison',$idLivraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$idLivraison){
		$sql="UPDATE livraison SET idLivraison=:idLivraisonn, destination=:destination,cinClient=:cinClient,cinLivreur=:cinLivreur,idCommande=:idCommande WHERE idLivraison=:idLivraison";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idLivraisonn=$livraison->getIdLivraison();
        $destination=$livraison->getDestination();
        $cinClient=$livraison->getCinClient();
        $cinLivreur=$livraison->getCinLivreur();
		$idCommande=$livraison->getIdCommande();
		$datas = array(':idLivraisonn'=>$idLivraisonn, ':idLivraison'=>$idLivraison, ':destinaion'=>$destination,':cinClient'=>$cinClient,':cinLivreur'=>$cinLivreur,':idCommande'=>$idCommande);
		$req->bindValue(':idLivraisonn',$idLivraisonn);
		$req->bindValue(':idLivraison',$idLivraison);
		$req->bindValue(':destination',$destination);
		$req->bindValue(':cinClient',$cinClient);
		$req->bindValue(':cinLivreur',$cinLivreur);	
        $req->bindValue(':idCommande',$idCommande);			
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivraison($idLivraison){
		$sql="SELECT * from livraison where idLivraison=$idLivraison";
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