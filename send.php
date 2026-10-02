<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/vendor/autoload.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the form data
    if (empty($name) || empty($email) || empty($message)) {
        echo 'Please fill in all fields';
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // tls
        $mail->Username = 'email@example.com';
        $mail->Password = ''; // App Password
        $mail->setFrom('email@example.com', 'SMTP Demo'); // sender email
        $mail->addAddress('kjohn0319@gmail.com'); // recipient email
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
}
