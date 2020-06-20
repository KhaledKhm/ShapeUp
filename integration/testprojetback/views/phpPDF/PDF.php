<?php

require_once __DIR__ . '/vendor/autoload.php';

$idPromotion=$_GET["idPromotion"];
$tauxPromotion=$_GET["tauxPromotion"];
$descriptionPromotion=$_GET["descriptionPromotion"];
$idProduit=$_GET["idProduit"];
$datedepartPromotion=$_GET["datedepartPromotion"];
$datefinPromotion=$_GET["datefinPromotion"];

$mdpdf = new \Mpdf\Mpdf();

//Contenu du PDF
 $data= "";

 //$mdpdf->Image('logo.png', 0, 0, 210, 297, 'png', '', true, false);

 $data.="<h1>Vos Informations</h1>";

 $data.="<strong>idPromotion : </strong> " . $idPromotion . "<br>";
 $data.="<strong>tauxPromotion : </strong> " . $tauxPromotion . "<br>";
 $data.="<strong>descriptionPromotion : </strong> " . $descriptionPromotion . "<br>";
 $data.="<strong>idProduit : </strong> " . $idProduit . "<br>";
 $data.="<strong>datedepartPromotion : </strong>" . $datedepartPromotion . "<br>";
 $data.="<strong>datefinPromotion : </strong>" . $datefinPromotion . "<br>";

//Création du PDF
$mdpdf->WriteHTML($data);

//Téléchargement du PDF
$mdpdf->Output("Promotion N".$idPromotion.".pdf","D");
?>