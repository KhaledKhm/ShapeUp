<?PHP
include "../entities/participation.php";
include "../core/participationc.php";
include "../core/eventc.php";
include "../entities/event.php";

$idEvent=$_GET["idEvent"];
$cin=11111111;
$participation1=new participation($cin,$idEvent);
$participation1C= new participationC();
$participation1C->ajouterparticipation($participation1);

$evenementC=new evenementC();
$result=$evenementC->recupererevent($idEvent);
/*	foreach($result as $row){
	$nbParticipant=$row['nbParticipant'];
	var_dump($nbParticipant);
}
*/
	header('Location: frontajoutevenement.php');
//}
 //selse { echo"verifier";}
?>