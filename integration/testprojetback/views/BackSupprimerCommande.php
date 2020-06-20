<?PHP
include "../Core/commandeC.php";
$commandeC=new commandeC();
if (isset($_GET["idCommande"])){
	$commandeC->supprimerCommande($_GET["idCommande"]);	

header('Location: backCommande.php');

}else{
	echo "vérifier les champs";
}
?>