<?PHP
include "../config.php";
class promotionC{
	 function recupererproduitsenpromotion(){
        $sql="SELECT prod.libelleP,prod.quantite,prod.prix,prom.tauxPromotion,prom.descriptionPromotion,prom.datedepartPromotion,prom.datefinPromotion from produit as prod INNER JOIN promotion as prom ON prod.code=prom.idProduit";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }

    function recupererproduits_cat(){
        $sql="SELECT prod.libelleP,prod.quantite,prod.prix,cat.libelleC from produit as prod INNER JOIN categorieproduit as cat ON prod.id=cat.id";
        //$sql="select * from produit";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }

    function recupererpromotion(){
        $sql="SELECT * from promotion LIMIT 1";
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