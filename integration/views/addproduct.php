<?PHP
include "../../entities/produit.php";
include "../../core/produitC.php";
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

/*if (isset($_POST['code']) and isset($_POST['libelleP']) and isset($_POST['quantite']) and isset($_POST['prix']) and isset($_POST['id']) and isset($_POST['img']) ){*/
$produit1=new produit(/*$_POST['code'],*/$_POST['libelleP'],$_POST['quantite'],$_POST['prix'],$_POST['id'],$file);
$produit1C=new produitC();
$produit1C->ajouterProduit($produit1);
header('Location: backproduct.php');
	
/*}else{
	echo "vérifier les champs";
}*/

?>