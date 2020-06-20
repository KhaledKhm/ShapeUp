<?PHP
include_once "../config.php";
class bandC{
	function recupererband($cinUtilisateur)
    {
         $sql="SELECT * from bandachat where cinUtilisateur=$cinUtilisateur  ORDER BY idBand DESC LIMIT 1";
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