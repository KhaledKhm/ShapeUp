<?PHP
include "../../config.php";
class produitC{
     function     afficherProduit ($produit){
		echo "Code: ".$produit->getCode()."<br>";
		echo "Libelle: ".$produit->getLibelle()."<br>";
		echo "Quantite: ".$produit->getQuant()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
		echo "ID categorie: ".$produit->getId()."<br>";
		echo "Image: ".$produit->getImg()."<br>";
	}
	
	function ajouterProduit($produit){
		$img=$produit->getImg();
		$sql="insert into produit (libelleP,quantite,prix,id,img) values 
      (:libelleP,:quantite,:prix,:id,'$img')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       // $code=$produit->getCode();
        $libelleP=$produit->getLibelle();
        $quantite=$produit->getQuant();
        $prix=$produit->getPrix();
        $id=$produit->getId();
        
       
        //lier variable => paramètre
        //$req->bindValue(':code',$code);
		$req->bindValue(':libelleP',$libelleP);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':id',$id);
		//$req->bindValue(':img',$img);
		
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherProduits(){
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e>getMessage());
        }	
	}


	function supprimerProduit($code){
		$sql="DELETE FROM produit where code= :code";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code',$code);
		try{
            $req->execute();
            header('Location: index.php');
        }
       catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	   function modifierProduit($produit,$code){
	   	 $img=$produit->getImg();
$sql="UPDATE produit SET libelleP=:libelleP,quantite=:quantite,prix=:prix,id=:id,img='$img' WHERE code=:code";
$db = config::getConnexion();
try{

        $req=$db->prepare($sql);

//$codeN=$produit->getCode();
        $libelleP=$produit->getLibelle();
        $quantite=$produit->getQuant();
        $prix=$produit->getPrix();
        $id=$produit->getId();
       
        
$req->bindValue(':libelleP',$libelleP);
$req->bindValue(':quantite',$quantite);
$req->bindValue(':prix',$prix);
$req->bindValue(':id',$id);
$req->bindValue(':code',$code);

//$req->bindValue(':img',$img);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
}




	function modifiercolProduit($col,$nv,$libelleP)
	{
		$sq2 = "Update produit set $col=:nv where libelleP=:libelleP";
		$db = config::getConnexion();
		try {
		$req = $db->prepare($sq2);
        //lier variable => paramètre
        $req->bindValue(':libelleP',$libelleP);
		$req->bindValue(':nv',$nv);
		$req->execute();
	}

	catch(Exception $e){
	echo 'Erreur :'.$e->getMessage();
	}
		
	}








            function recupererProduit($code){
		    $sql="SELECT * from produit where code=$code";
		    $db = config::getConnexion();
		     try{
		    $liste=$db->query($sql);
		    return $liste;
		    }
            catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
	       }


	       function afficherProduitsTrier(){
	
		$sql="SElECT * From produit Order By prix Desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	   }

	    function afficherProduitsTrierQ(){
	
		$sql="SElECT * From produit Order By quantite Desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	   }

function rechercherProduits($libelleP){
		$sql="SELECT * from produit where libelleP='$libelleP'";
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




class categorieC {
      function     afficherCategorie ($categorie){
		echo "Identifiant: ".$categorie->getId()."<br>";
		echo "Libelle: ".$categorie->getLibel()."<br>";
		echo "Description: ".$categorie->getDesc()."<br>";
		echo "Image: ".$produit->getImg()."<br>";

	}
	

	function ajouterCategorie($categorie){
		$img=$categorie->getImg();
		$sql="insert into categorieproduit (id,libelleC,descriptionC,img) values 
(:id,:libel,:descc,'$img')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$categorie->getId();
        $libelleC=$categorie->getLibel();
        $descriptionC=$categorie->getDesc();
        
        //lier variable => paramètre
        $req->bindValue(':id',$id);
		$req->bindValue(':libel',$libelleC);
		$req->bindValue(':descc',$descriptionC);
		//$req->bindValue(':img',$img);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherCategories(){
		$sql="SElECT * From categorieproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($id){
		$sql="DELETE FROM categorieproduit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierCategorie($categorie,$id){
		  $img=$categorie->getImg();
		$sql="UPDATE categorieproduit SET id=:iid, libelleC=:libel,descriptionC=:descc,img='$img' WHERE id=:id";
		$db = config::getConnexion();
try{

        $req=$db->prepare($sql);
		$iid=$categorie->getId();
        $libelleC=$categorie->getLibel();
        $descriptionC=$categorie->getDesc();
       
        
		//$datas = array(':iid'=>$iid, ':id'=>$id, ':libel'=>$libelleC,':descc'=>$descriptionC,':img'=>$img);
		//lier variable => paramètre
		$req->bindValue(':iid',$iid);
		$req->bindValue(':id',$id);
		$req->bindValue(':libel',$libelleC);
		$req->bindValue(':descc',$descriptionC);
       // $req->bindValue(':img',$img);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	 function recupererCategorie($id){
		$sql="SELECT * from categorieproduit where id=$id";
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