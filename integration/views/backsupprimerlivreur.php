<?PHP
include "../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["cinLivreur"])){
	$livreurC->supprimerlivreur($_POST["cinLivreur"]);
	
}
header('Location: backlivreur.php');
?>