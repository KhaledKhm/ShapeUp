<?PHP
include "../core/appreciationC.php";
$appreciationC=new appreciationC();
if (isset($_POST["idAppreciation"])){
	$appreciationC->supprimerAppreciation($_POST["idAppreciation"]);
	header('Location: frontafficherAppreciation.php');
}

?>