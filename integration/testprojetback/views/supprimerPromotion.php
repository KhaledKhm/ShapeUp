<?PHP
include "../core/promotionC.php";
$promotionC=new promotionC();
//if (isset($_POST["idPromotion"])){
	$promotionC->supprimerpromotion($_GET["idPromotion"]);
	header('Location: backpromotions.php');
//}

?>