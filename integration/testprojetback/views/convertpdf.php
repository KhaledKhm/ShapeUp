<?php  
include "../core/reclamationC.php";
include "../entities/reclamation.php";

$reclamation1C=new reclamationC();
$listeReclamations=$reclamation1C->afficherReclamations();

require_once __DIR__ . '/vendor/autoload.php';

//create new PDF instance
$mpdf = new \Mpdf\Mpdf();
$i=1;

//creating our PDF
foreach($listeReclamations as $row)
{
$data = '';

$data .= "<h1>Reclamation numero $i </h1>";   //(.= does concatenation)
   //(.= does concatenation)

//Add data

$data .= '<strong>Id reclamation</strong> ' . $row['idReclamation'] . '<br />';
$data .= '<strong>Type Reclamation</strong> ' . $row['typeReclamation'] . '<br />';
$data .= '<strong>Texte Reclamation</strong> ' . $row['texteReclamation'] . '<br />';
$data .= '<strong>Etat</strong> ' . $row['etat'] . '<br />';
$data .= '<strong>Texte Reponse</strong> ' . $row['texteReponse'] . '<br />';
$data .= '<strong>Cin Utilisateur</strong> ' . $row['cinUtilisateur'] . '<br />';

$i=$i+1;
//write PDF 
$mpdf->WriteHTML($data);
}

//output to browser
$mpdf->Output('myfile.pdf', 'D'); //D pour Download

?>