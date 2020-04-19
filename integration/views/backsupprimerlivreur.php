<?PHP
include "../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_GET["cinLivreur"])){
	$livreurC->supprimerlivreur($_GET["cinLivreur"]);	

header('Location: backlivreur.php');

}else{
	echo "vérifier les champs";
}
?>