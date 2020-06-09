<?PHP
include "../core/appreciationC.php";
$appreciationC=new appreciationC();
if (isset($_POST["idAppreciation"])){
	$reclamationC->supprimerReclamation($_POST["idAppreciation"]);
	header('Location: backappreciations.php');
}

?>