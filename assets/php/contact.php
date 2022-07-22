<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.intelatlas.com ';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@intelatlas.com';                     // SMTP username
    $mail->Password   = 'Toughnfair@22';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@intelatlas.com', 'IntelAtlas');
    $mail->addAddress('walterg85@gmail.com', 'Walter Gonzalo');
    //Set the subject line
    $mail->Subject = 'Lead from Intelatlas';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body

    $mail->Body    =
    'Lead name: ' . $name .
    '<br />Email: ' . $email .
    '<br />Phone: ' . $phone .
    '<br />Message: ' . $message;

    $mail->AltBody =
    'Lead name: ' . $name .
    '<br />Email: ' . $email .
    '<br />Phone: ' . $phone .
    '<br />Message: ' . $message;

    $mail->send();
    ?><script>window.location="/?alert=msgSentSuccess"</script><?php
} catch (Exception $e) {
    echo "Message could not be sent, contact support!. Mailer Error: {$mail->ErrorInfo}";
}
