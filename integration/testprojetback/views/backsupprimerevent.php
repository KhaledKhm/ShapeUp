<?PHP
include "../entities/event.php";
include "../core/eventC.php";
$evenementC=new evenementC();
//if (isset($_POST["idEvent"])){
$evenementC->supprimerevent($_GET["idEvent"]);


	header('Location: backevents.php');
//}
 //selse { echo"verifier";}
?>