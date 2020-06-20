<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
function mailingP($libelleCategorieEvent,$descriptionCategorieEvent,$email)
{
	$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'eya.souissi@esprit.tn';             // SMTP username
    $mail->Password   = 'eyaeyaeya';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom('eya.souissi@esprit.tn', 'shape up');
    $mail->addAddress($email, 'Client du Shape Up');     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $corps="Notre Store vous offre un(e) ".$libelleCategorieEvent." qui est ".$descriptionCategorieEvent." Profitez Bien!";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'catégorie Event Shape Up!';
    $mail->Body    = $corps;

    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
function mailingB($libelleEvent,$descriptionEvent,$adresseEvent,$dateEvent,$email)
{
    $mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'eya.souii@esprit.tn';             // SMTP username
    $mail->Password   = 'eyaeyaa';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom('eya.souissi@esprit.tn', 'Shape Up');
    $mail->addAddress($email, 'Client du Shape Up');     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $corps="Notre Store vous annonce un nouveau évènement ".$libelleEvent." : ".$descriptionEvent." qui se déroule dans ".$adresseEvent." à ".$dateEvent."  Profitez Bien!";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Band Achats Shape Up!';
    $mail->Body    = $corps;

    $mail->send();

} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";}
}


?>

