<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // If installed via Composer

$mail = new PHPMailer(true);

try {
    // SMTP Settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';       // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 's06053570@gmail.com'; // Your Gmail
    $mail->Password = 'ihmu quol wmah exgl';    // Your generated App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption
    $mail->Port = 587; // Port (TLS = 587, SSL = 465)

    // Email Settings
    $mail->setFrom('s06053570@gmail.com', 'Your Name'); // Sender
    $mail->addAddress('recipient@example.com', 'Recipient Name'); // Recipient
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = 'This is a test email sent using PHPMailer and Gmail SMTP!';
    $mail->isHTML(true);

    // Send Email
    $mail->send();
    echo 'Email has been sent successfully!';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>
