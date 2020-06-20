<?PHP
include_once "../config.php";
class categorieeventC{
		 function recuperermail(){
    $sql="SELECT email from utilisateur";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    
	}
	function ajoutercategorie($categorieevent)
	 {
		$sql="insert into categorieevent(idCategorieEvent,libelleCategorieEvent,descriptionCategorieEvent) values (:idCategorieEvent,:libelleCategorieEvent,:descriptionCategorieEvent)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idCategorieEvent=$categorieevent->getidCategorieEvent();
        $libelleCategorieEvent=$categorieevent->getlibelleCategorieEvent();
        $descriptionCategorieEvent=$categorieevent->getdescriptionCategorieEvent();
        $req->bindValue(':idCategorieEvent',$idCategorieEvent);
		$req->bindValue(':libelleCategorieEvent',$libelleCategorieEvent);
		$req->bindValue(':descriptionCategorieEvent',$descriptionCategorieEvent);
        $req->execute();}
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
function affichercategorie ($categorieevent)

{       echo "idCategorieEvent: ".$categorieevent->getidCategorieEvent()."<br>";
		echo "libelleCategorieEvent: ".$categorieevent->getlibelleCategorieEvent()."<br>";
		echo "descriptionCategorieEvent: ".$categorieevent->getdescriptionCategorieEvent()."<br>";
		
	}
	function affichercategories()
	{
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SElECT * From categorieevent";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function modifiercategorie($categorieevent,$idCategorieEvent){
		$sql="UPDATE categorieevent SET libelleCategorieEvent=:libelleCategorieEvent,descriptionCategorieEvent=:descriptionCategorieEvent where idCategorieEvent=:idCategorieEvent";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$libelleCategorieEvent=$categorieevent->getlibelleCategorieEvent();
        $descriptionCategorieEvent=$categorieevent->getdescriptionCategorieEvent();
        
		$req->bindValue(':idCategorieEvent',$idCategorieEvent);
		$req->bindValue(':libelleCategorieEvent',$libelleCategorieEvent);
		$req->bindValue(':descriptionCategorieEvent',$descriptionCategorieEvent);

		
            $s=$req->execute();
			
     //       header('Location: backlivreur.php');
        }
        catch (Exception $e){
        /*    echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);*/
        }
		
	}

	function supprimercategorie($libelleCategorieEvent){
		$sql="DELETE FROM categorieevent where libelleCategorieEvent=:libelleCategorieEvent";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':libelleCategorieEvent',$libelleCategorieEvent);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
	function supprimereventcat($libelleCategorieEvent)
	{ $sql="DELETE * FROM evenement where libelleCategorieEvent=:libelleCategorieEvent";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':libelleCategorieEvent',$libelleCategorieEvent);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}
		function recupererevent($idCategorieEvent){ 
		$sql=" SELECT * from categorieevent where idCategorieEvent=$idCategorieEvent";
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

   
}

	
	

	