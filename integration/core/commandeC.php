<?PHP
include "../config.php";

class commandeC {

	function ajoutercommande($cin){



		$db = config::getConnexion();		

		$sqlb="INSERT into commande (cinUtilisateur,statusCommande) values 
        (:cinUtilisateur,:statusCommande)";

        $reqb=$db->prepare($sqlb);

       
        $statusCommande='En cours';

		$reqb->bindValue(':statusCommande',$statusCommande);
		$reqb->bindValue(':cinUtilisateur',$cin);
		//$req->bindValue(':img',$img);
        $reqb->execute();
 

        $sqlc="SELECT * FROM commande WHERE cinUtilisateur=".$cin." ORDER BY idCommande DESC LIMIT 1";
		$reqc=$db->prepare($sqlc);
		$reqc->execute();
		

		$sqla="SELECT * FROM cart WHERE cin=".$cin;
		$reqa=$db->prepare($sqla);
		$reqa->fetch();
		foreach ($reqa as $r) {
			$sqlb="INSERT INTO detailcommande (idproduit,cin,idcommande,qte) VALUES (".$r['idProduit'].",".$r['cin'].",".$reqc['idCommande'].",".$r['quantite'].")";
			$reqb=$db->prepare($sqlb);
			$reqb->execute();
		}




        
	}


function afficherCommande ($commande){
		echo "idProduit:".$commande->getidProduit(). "<br>";
		echo "statusCommande:".$commande->getstatusCommande()."<br>";
		echo "idProduit:".$commande->getidProduit()."<br>";
		echo "quantite".$commande->getquantite()."<br>";
		echo "cinUtilisateur".$commande->getcinUtilisateur()."<br>";
	}

function afficherCommandes(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cinUtilisateur= a.cinUtilisateur";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}	
      function supprimerCommande($idCommande){
		$sql="DELETE FROM commande where idCommande= :idCommande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCommande',$idCommande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	 function supprimertousCommande($idCommande){
		$sql="DELETE * FROM commande ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>