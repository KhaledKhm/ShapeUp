 <?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

function mailouss($idReclamation)
{
include_once "../core/reclamationC.php";
include_once "../entities/reclamation.php";
include_once "../core/utilisateurC.php";
include_once "../entities/utilisateur.php";
$reclamation2C=new reclamationC();
$listeReclamations2=$reclamation2C->recupererReclamation($idReclamation);
foreach($listeReclamations2 as $row){
    $cinUtilisateurmail=$row['cinUtilisateur'];

$Utilisateur1C=new UtilisateurC();
$listeUtilisateur=$Utilisateur1C->recupererutilisateur($cinUtilisateurmail);
foreach($listeUtilisateur as $row2){
    $email=$row2['email'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
//try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'houssem.ouerdiane@esprit.tn';                 // SMTP username
    $mail->Password = 'fallout3';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('houssem.ouerdiane@esprit.tn', 'Mailer');
    $mail->addAddress($email);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
}
}
/* I can use it to add attachements 
    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
//include_once "../core/reclamationC.php";
//include_once "../entities/reclamation.php";
//include_once "backmodifierReclamation.php";

$reclamation1C=new reclamationC();
$listeReclamations=$reclamation1C->recupererReclamation($idReclamation);

$body='<p><strong>Hello</strong>This is my first mail with PHPMailer</p>' ;

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'This is a test email';
    $mail->Body    = '<b>Bonjour!</b>';
    foreach($listeReclamations as $row){
    $mail->Body    = '<strong>Id reclamation</strong> ' . $row['idReclamation'] . '<br />'  .     '<strong>Type Reclamation</strong> ' . $row['typeReclamation'] . '<br />' .
     '<strong>Texte Reclamation</strong> ' . $row['texteReclamation'] . '<br />' .
     '<strong>Etat</strong> ' . $row['etat'] . '<br />' .
     '<strong>Texte Reponse</strong> ' . $row['texteReponse'] . '<br />' .
     '<strong>Cin Utilisateur</strong> ' . $row['cinUtilisateur'] . '<br />';
}
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} /*catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}*/
