<?PHP
include "../core/produitC.php";
$produitC=new produitC();
if (isset($_POST["code"])){
	$produitC->supprimerProduit($_POST["code"]);
	header('Location:backproduct.php');
}

?>

