<?php

require_once __DIR__ . '/vendor/autoload.php';

$idEvent=$_GET["idEvent"];
$libelleEvent=$_GET["libelleEvent"];
$descriptionEvent=$_GET["descriptionEvent"];
$nbParticipant=$_GET["nbParticipant"];
$adresseEvent=$_GET["adresseEvent"];
$dateEvent=$_GET["dateEvent"];
$libelleCategorieEvent=$_GET["libelleCategorieEvent"];

$mdpdf = new \Mpdf\Mpdf();


//Contenu du PDF
 $data= "";

 //$mdpdf->Image('logo.png', 0, 0, 210, 297, 'png', '', true, false);

 $data.="<h1>Vos Informations</h1>";

 $data.="<strong>idEvent: </strong> " . $idEvent . "<br>";
 $data.="<strong>libelleEvent : </strong> " . $libelleEvent . "<br>";
 $data.="<strong>descriptionEvent : </strong> " . $descriptionEvent . "<br>";
 $data.="<strong>nbParticipant: </strong> " . $nbParticipant . "<br>";
 $data.="<strong>adresseEvent : </strong>" . $adresseEvent . "<br>";
 $data.="<strong>dateEvent : </strong>" . $dateEvent. "<br>";
  $data.="<strong>libelleCategorieEvent: </strong>" . $libelleCategorieEvent. "<br>";

//Création du PDF
$mdpdf->WriteHTML($data);

//Téléchargement du PDF
$mdpdf->Output("evenement ".$idEvent.".pdf","D");
?>