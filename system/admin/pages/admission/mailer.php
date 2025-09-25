<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'shimshimdiola@gmail.com'; // SMTP username
    $mail->Password = 'dsintxrbpykvlnih'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
    $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // Recipients
    $mail->setFrom('sanjosehighDepartment@gmail.com', 'Registrar');
    $mail->addAddress($email, 'Mrs. Registrar'); // Add a recipient
    $mail->addAddress('shimshimdiola@gmail.com'); // Name is optional
    $mail->addReplyTo('shimshimdiola@gmail.com', 'Information');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Evsu student credentials.';

    // Email body with id_number and password in bold

    $mail->Body = 'Hi!<br><br>
              Here is your login information:<br>
              <strong>ID Number:</strong> ' . $id_number . '<br>
              <strong>Password:</strong> ' . $password . '<br>';

    $mail->AltBody = 'Hi! Your login information:<br>ID Number: ' . $id_number . ' - Password: ' . $password;

    // Replace $id_number and $password with the actual values you want to include


    // Send the email
    $mail->send();

    // Display a success message
    echo "Message has been sent successfully.";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
