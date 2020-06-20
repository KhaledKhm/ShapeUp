<?PHP
include "../config.php";
class categorieeventC{
	function ajoutercategorie($categorieevent)
	 {
		$sql="insert into categorieevent(libelleCategorieEvent,desciptionCategorieEvent) values (:libelleCategorieEvent,:desciptionCategorieEvent)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $libelleCategorieEvent=$categorieevent->getlibelleCategorieEvent();
        $desciptionCategorieEvent=$categorieevent->getdescriptionCategorieEvent();
		$req->bindValue(':libelleCategorieEvent',$libelleCategorieEvent);
		$req->bindValue(':descriptionCategorieEvent',$desciptionCategorieEvent);
        $req->execute();}
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}}