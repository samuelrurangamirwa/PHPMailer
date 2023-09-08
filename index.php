
<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Passing `true` enables exceptions

try {
    // Server settings for Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com'; // Your Gmail email address
    $mail->Password = 'your_password'; // Your Gmail password or an App Password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption; `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to (587 for TLS, 465 for SSL)

    // Sender and recipient information
    $mail->setFrom('your_email@gmail.com', 'Your Name'); // Your Gmail email address and your name
    $mail->addAddress('recipient@example.com', 'Recipient Name'); // Recipient's email address and name

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Hello, Gmail!';
    $mail->Body = 'This is a test email sent with PHPMailer via Gmail.';

    // Send the email
    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>
