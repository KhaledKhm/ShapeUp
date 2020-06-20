<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
function mailingP($tauxPromotion,$descriptionPromotion,$datedepartPromotion,$datefinPromotion,$libelleProduit,$email)
{
	$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'houssem.ouerdiane@esprit.tn';             // SMTP username
    $mail->Password   = 'fallout3';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom('houssem.ouerdiane@esprit.tn', 'Shape Up');
    $mail->addAddress($email, 'Client du Shape Up');     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $corps="Notre Store vous offre un(e) ".$descriptionPromotion." de ".$tauxPromotion."% de ".$datedepartPromotion." vers ".$datefinPromotion." sur le produit ".$libelleProduit." Profitez Bien!";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Promotion Shape Up!';
    $mail->Body    = $corps;

    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}



function mailingB($tauxBand,$descriptionBand,$email)
{
	$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'houssem.ouerdiane@esprit.tn';             // SMTP username
    $mail->Password   = 'fallout3';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom('houssem.ouerdiane@esprit.tn', 'Shape Up');
    $mail->addAddress($email, 'Client du Shape Up');     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $corps="Notre Store vous offre un Band d'achats : ".$descriptionBand." a valeur de ".$tauxBand."DT Profitez Bien!";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Band Achats Shape Up!';
    $mail->Body    = $corps;

    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>