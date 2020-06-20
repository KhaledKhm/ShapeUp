<?PHP
ob_start();
include "../entities/band.php";
include "../core/bandC.php";
include "phpmailer/mailing.php";

if (isset($_POST['tauxBand']) and isset($_POST['descriptionBand']) and isset($_POST['cinUtilisateur'])){
$band1=new band($_POST['tauxBand'],$_POST['descriptionBand'],$_POST['cinUtilisateur']);
$band1C=new bandC();
$band1C->ajouterband($band1);
}else{
	echo "vérifier les champs";
}
$bandC=new bandC();
$email=$bandC->recuperermail($_POST['cinUtilisateur']);
foreach($email as $row)
{
	mailingB($_POST['tauxBand'],$_POST['descriptionBand'],$row["email"]);
}
header('Location: backbands.php');
ob_end_fluch();
?>
