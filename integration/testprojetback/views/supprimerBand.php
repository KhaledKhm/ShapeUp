<?PHP
include "../core/bandC.php";
$bandC=new bandC();
//if (isset($_POST["idBand"])){
	$bandC->supprimerband($_GET["idBand"]);
	header('Location: backbands.php');
//}

?>