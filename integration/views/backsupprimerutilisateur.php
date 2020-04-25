<?PHP
include "../core/utilisateurC.php";
$utilisateurC=new utilisateurC();
if (isset($_GET["cinUtilisateur"])){
	$utilisateurC->supprimerutilisateur($_GET["cinUtilisateur"]);	

header('Location: backafficherutilisateur.php');

}else{
	echo "vérifier les champs";
}
?>