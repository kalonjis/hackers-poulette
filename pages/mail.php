<?php
// mail.php

require_once __DIR__ . '/../init.php';  // Inclure init.php pour charger les variables d'environnement

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Fonction pour envoyer l'email
function send_email($email, $firstname, $lastname, $message, $subject, $gender) {
    $messageSent = false;

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = $_ENV['MAIL_HOST'];;                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $_ENV['MAIL_USERNAME'];                     // SMTP username
        $mail->Password   = $_ENV['MAIL_PASSWORD'];                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = $_ENV['MAIL_PORT'];                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($_ENV['MAIL_USERNAME'], 'Hackers-PoulSteph');
        $mail->addAddress($email, "$firstname $lastname");     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "You have contacted our $subject service";
        $mail->Body    = " $gender $lastname, <br>Thank you for contacting us.<br>Here is a copy of your message : <br><br> \"$message\" <br><br> We will get back to you within the next 48 hours. <br><br>Have a good hacking time!<br><em>The Hackers-Poulette Team</em>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $messageSent = true; // Set success flag
    } catch (Exception $e) {
        // If email could not be sent
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // Return the result
    return $messageSent;
}
?>



