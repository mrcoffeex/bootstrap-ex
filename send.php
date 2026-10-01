<?php

declare(strict_types=1);
 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
 
require __DIR__ . '/vendor/autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // tls
    $mail->Username = 'support@courtrivals.app';
    $mail->Password = 'Semicircle_123'; // App Password
    $mail->setFrom('support@courtrivals.app', 'SMTP Demo');
    $mail->addAddress('kjohn0319@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'SMTP Demo';
    $mail->Body = '<p>Name: ' . $name . '</p><p>Email: ' . $email . '</p><p>Message: ' . $message . '</p>';
    $mail->AltBody = 'Sent with PHPMailer.';
 
    if ($mail->send()) {
        echo 'Email Sent';
    } else {
        echo 'Email Not Sent';
    }

} catch (Exception $e) {
    echo 'Failed: ' . $mail->ErrorInfo;
}
