<?PHP
include "../config.php";
class categorieeventC{
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
		
	}}
	

	