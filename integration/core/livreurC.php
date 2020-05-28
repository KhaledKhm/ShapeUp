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
		
        $cin=$livreur->getCinLivreur();
        $nom=$livreur->getNomLivreur();
        $prenom=$livreur->getPrenomLivreur();
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

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierlivreur($livreur,$cinLivreur){
		$sql="UPDATE livreur SET cinLivreur=:cinn, nomLivreur=:nomLivreur,prenomLivreur=:prenomLivreur WHERE cinLivreur=:cinLivreur";
		
		$db = config::getConnexion();

try{		
        $req=$db->prepare($sql);
		$cinn=$livreur->getCinLivreur();
        $nomLivreur=$livreur->getNomLivreur();
        $prenomLivreur=$livreur->getPrenomLivreur();
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cinLivreur',$cinLivreur);
		$req->bindValue(':nomLivreur',$nomLivreur);
		$req->bindValue(':prenomLivreur',$prenomLivreur);	
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
        }
		
	}


	function recupererlivreur($cinLivreur){
		$sql="SELECT * from livreur where cinLivreur=$cinLivreur";
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
	/*
class livraisonC {
function afficherlivraison ($livraison){
		echo "idLivraison: ".$livraison->getIdLivraison()."<br>";
		echo "destination: ".$livraison->getDestination()."<br>";
		echo "cinClient: ".$livraison->getCinClient()."<br>";
		echo "cinLivreur: ".$livraison->getCinLivreur()."<br>";
		echo "idCommande: ".$livraison->getIdCommande()."<br>";
	}
	function ajouterlivraison($livraison){
		$sql="insert into livraison (idLivraison,destination,cinUtilisateur,cinLivreur,idCommande) values (:idLivraison, :destination,:cinClient,:cinLivreur,:idCommande)";
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
		$req->bindValue(':cinUtilisateur',$cinClient);
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
		$sql="UPDATE livraison SET idLivraison=:idLivraisonn, destination=:destination,cinClient=:cinClient,cinLivreur=:cinLivreur,idCommande=:idCommande WHERE idLivraison=:idLivraison";
		
		$db = config::getConnexion();
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
}*/

?>