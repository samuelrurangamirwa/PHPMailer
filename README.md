# PHP Mailer

PHP Mailer is a powerful and easy-to-use email library for PHP that allows you to send email messages via various protocols including SMTP and mail().

## Installation

You can install PHP Mailer using [Composer](https://getcomposer.org/):

```bash
composer require phpmailer/phpmailer
```

## Usage

Here's a simple example of how to send an email using PHP Mailer:

```

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
```

For more advanced usage and configuration options, please refer to the [official documentation](https://github.com/PHPMailer/PHPMailer.git).

## Features

Send email via SMTP or PHP's mail() function.
Supports HTML and plain text email content.
Attachments and inline images.
Secure and easy-to-configure SMTP settings.
Comprehensive documentation.
