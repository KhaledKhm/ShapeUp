<?PHP

include "../entities/event.php";
include "../core/eventC.php";
include "phpmailer/mailing.php";
//if ( isset($_POST['libelleEvent']) and isset($_POST['descriptionEvent']) and   isset($_POST['nbParticipant']) and isset($_POST['adresseEvent']) and isset($_POST['dateEvent'])  and isset($_POST['idCategorieEvent'])){
  $evenement1=new evenement($_POST['libelleEvent'],$_POST['descriptionEvent'],$_POST['nbParticipant'],$_POST['adresseEvent'],$_POST['dateEvent'],$_POST['idCategorieEvent']);
$evenement1C=new evenementC();
$evenement1C->ajouterevenement($evenement1);

  
//}
//var_dump($_POST['idCategorieEvent']);
//else{
 // echo "vérifier les champs";
//}
header('Location: backevents.php');
//$evenementC=new evenementC;

//$email=$evenementC->recuperermail1();
//foreach($email as $row)
//{
//mailingB($_POST['libelleEvent'],$_POST['descriptionEvent'],$_POST['adresseEvent'],$_POST['dateEvent'],$row["email"]);
//}

#$evenementC=new evenementC();
#$categorieevent=$evenementC->recupererfk3($_POST['idCategorieEvent']);
#foreach($categorieevent as $row){
#	$libelleCategorieEvent= $row["libelleCategorieEvent"];
#}

?>
