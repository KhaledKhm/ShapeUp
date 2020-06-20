<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  ################CORE CODE AND FUNCTIONS FOR LIVREUR ET LIVRAISON########################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->

<?PHP
include_once "../config.php";
class livraisonC {
function afficherlivraison ($livraison){
		echo "idLivraison: ".$livraison->getIdLivraison()."<br>";
		echo "destination: ".$livraison->getDestination()."<br>";
		echo "cinClient: ".$livraison->getCinClient()."<br>";
		echo "cinLivreur: ".$livraison->getCinLivreur()."<br>";
		echo "idCommande: ".$livraison->getIdCommande()."<br>";
	}
	function ajouterlivraison($livraison){
		$sql="insert into livraison (idLivraison,destination,cinUtilisateur,cinLivreur,idCommande) values (:idLivraison, :destination,:cinUtilisateur,:cinLivreur,:idCommande)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idLivraison=$livraison->getIdLivraison();
        $destinaion=$livraison->getDestination();
        $cinUtilisateur=$livraison->getCinClient();
        $cinLivreur=$livraison->getCinLivreur();
		$idCommande=$livraison->getIdCommande();
		$req->bindValue(':idLivraison',$idLivraison);
		$req->bindValue(':destination',$destination);
		$req->bindValue(':cinUtilisateur',$cinUtilisateur);
		$req->bindValue(':cinLivreur',$cinLivreur);
        $req->bindValue(':idCommande',$idCommande);			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraisons(){
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
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$idLivraison){
		$sql="UPDATE livraison SET destination=:destination,cinLivreur=:cinLivreur WHERE idLivraison=:idLivraison";
		
		$db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
		//$idLivraisonn=$livraison->getIdLivraison();
        $destination=$livraison->getDestination();
      //  $cinUtilisateur=$livraison->getCinClient();
        $cinLivreur=$livraison->getCinLivreur();
	//	$idCommande=$livraison->getIdCommande();
		$datas = array(':destinaion'=>$destination,':cinLivreur'=>$cinLivreur);
		//$req->bindValue(':idLivraisonn',$idLivraisonn);
		$req->bindValue(':idLivraison',$idLivraison);
		$req->bindValue(':destination',$destination);
		//$req->bindValue(':cinUtilisateur',$cinUtilisateur);
		$req->bindValue(':cinLivreur',$cinLivreur);	
      //  $req->bindValue(':idCommande',$idCommande);			
		
            $s=$req->execute();
			
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