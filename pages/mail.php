<?php

$messageSent= false;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hackerpoulsteph@gmail.com';                     // SMTP username
    $mail->Password   = 'Becode2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('hackerpoulsteph@gmail.com', 'Hackers-PoulSteph');
    $mail->addAddress($email, "$firstname $lastname");     // Add a recipient
    

    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Your have contacted our $subject service";
    $mail->Body    = "Thank you $gender $lastname for contacting us.<br><br>Here is a copy of your message : <br><br> \" $message\" <br><br> We will get back to you within the next 48 hours. <br><br>Have a good hacking time!";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    $messageSent= true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}