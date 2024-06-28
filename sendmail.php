<?php
//customized template from https://github.com/PHPMailer/PHPMailer?tab=readme-ov-file#a-simple-example

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'shop.gabriel-haardt.de';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'noreply@shop.gabriel-haardt.de';                     //SMTP username
    $mail->Password = 'UavRvCZywC96vN3x9Nc8';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@shop.gabriel-haardt.de', 'Webshop');
    $mail->addAddress($mail_recipient);     //Add a recipient

    //Content
    $mail->isHTML(false);                                  //Set email format to HTML
    $mail->Subject = $mail_subject;
    $mail->Body = $mail_message;

    $mail->send();
    echo 'Wir haben Ihnen eine Mail gesendet. ';
} catch (Exception $e) {
    echo "Wir konnten Ihnen leider keine Mail senden. Folgender Fehler ist aufgetreten: {$mail->ErrorInfo}";
}