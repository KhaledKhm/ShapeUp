<?PHP
include "../core/reclamationC.php";
$reclamationC=new reclamationC();
if (isset($_POST["idReclamation"])){
	$reclamationC->supprimerReclamation($_POST["idReclamation"]);
	header('Location: backreclamations.php');
}

?>