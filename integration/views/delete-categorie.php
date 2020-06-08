<?PHP
include "../../core/produitC.php";
$categorieC=new categorieC();
//if (isset($_POST["id"])){
	$categorieC->supprimerCategorie($_POST["id"]);
	header('Location: backproduct.php');
//}

?>

