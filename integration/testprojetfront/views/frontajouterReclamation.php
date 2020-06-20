<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['idReclamation']) and isset($_POST['typeReclamation']) and isset($_POST['texteReclamation']) and isset($_POST['etat']) and isset($_POST['texteReponse']) and isset($_POST['cinUtilisateur'])){
$reclamation1=new reclamation($_POST['idReclamation'],$_POST['typeReclamation'],$_POST['texteReclamation'],$_POST['etat'],$_POST['texteReponse'],$_POST['cinUtilisateur']);
$reclamation1C=new reclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
header('Location: thankyoureclamation.php');
	
}else{
echo "vérifier les champs";
}

?>