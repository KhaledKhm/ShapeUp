<?PHP
include_once "../config.php";

class cartC {

	function ajoutercart($cart){
		$sql="insert into cart (cin,idProduit,quantite) values 
      (:cin,:idProduit,:quantite)";
		$db = config::getConnexion();
		try{	
        $req=$db->prepare($sql);

       
       
        
        $cin=$cart->getcin(); 
        $idProduit=$cart->getidProduit(); 
        $quantite=$cart->getquantite();
       
		
		
		$req->bindValue(':cin',$cin);
		$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':quantite',$quantite);
		
		
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}


function affichercarts($cin){
		$sql="SELECT * FROM cart INNER JOIN produit ON cart.idProduit = produit.code WHERE cart.cin= ".$cin;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}	
  
function supprimercart($idcart){
		$sql="DELETE FROM cart where idcart= :idcart";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idcart',$idcart);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	 function supprimertouscart($cin){
		$sql="DELETE FROM cart where cin =".$cin;
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
         
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function countcart($cin){
		$sql= "SELECT * FROM cart WHERE cin=".$cin;
		$db = config::getConnexion();
		try{
		$req=$db->query($sql);
		if($req->execute())
		{
			$toto=$req->rowCount();
		return $toto;
		}
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}




}

?>