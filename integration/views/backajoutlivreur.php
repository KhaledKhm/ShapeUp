<!--  ########################################################################################-->
<!--  ########################################################################################-->
<!--  ########################GESTION DE LIVRREUR ET LIVRAISON################################-->
<!--  #############################CREATED AND DONE BY:#######################################-->
<!--  #################################KHALED MAAMMAR#########################################-->
<!--  ######################################2A6###############################################-->
<!--  ########################################################################################-->
<!--  ########################################################################################-->

<?PHP

include "../entities/livreur.php";
include "../core/livreurC.php";

if (isset($_POST['cinLivreur']) and isset($_POST['nomLivreur']) and isset($_POST['prenomLivreur'])){
$livreur1=new livreur($_POST['cinLivreur'],$_POST['nomLivreur'],$_POST['prenomLivreur']);
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
$livreur1C=new livreurC();
$livreur1C->ajouterlivreur($livreur1);
header('Location: backlivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>