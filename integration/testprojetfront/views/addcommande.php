

<?PHP
include "../Entities/commande.php";
include "../Core/commandeC.php";
   
/*if (isset($_POST['code']) and isset($_POST['libelleP']) and isset($_POST['quantite']) and isset($_POST['prix']) and isset($_POST['id']) and isset($_POST['img']) ){*/
session_start();
$commande1=new commande($_SESSION['c']);
$commande1C=new commandeC();
$commande1C->ajoutercommande($_SESSION['c']);
	
	header('Location: categories.php');
/*}else{
	echo "vérifier les champs";
}*/

?>
