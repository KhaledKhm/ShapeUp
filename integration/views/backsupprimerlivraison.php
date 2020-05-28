<?PHP
include_once "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_GET["idLivraison"])){
	$livraisonC->supprimerlivraison($_GET["idLivraison"]);	

header('Location: backlivreur.php');

}else{
	echo "vérifier les champs";
}
?>