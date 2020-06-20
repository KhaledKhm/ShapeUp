<?php

require_once __DIR__ . '/vendor/autoload.php';

$cinUtilisateur=$_GET["cinUtilisateur"];
$idCommande=$_GET["idCommande"];



$mdpdf = new \Mpdf\Mpdf();


//Contenu du PDF
 $data= "";

 //$mdpdf->Image('logo.png', 0, 0, 210, 297, 'png', '', true, false);

 $data.="<h1>Vos Informations</h1>";

 $data.="<strong>cinUtilisateur: </strong> " . $cinUtilisateur. "<br>";
 $data.="<strong>idCommande: </strong> " . idCommande . "<br>";
 
//Création du PDF
$mdpdf->WriteHTML($data);

//Téléchargement du PDF
$mdpdf->Output("commande".$idCommande.".pdf","D");
?>