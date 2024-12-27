<?php
session_start(); // Démarre la session

// Inclure les fichiers nécessaires
require_once 'db.php';
require_once 'validate.php';
require_once 'mail.php'; // Inclure le fichier pour envoyer l'email

// Récupérer les données du formulaire
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Valider les données
$errors = validate_form($_POST);

// Si aucune erreur, insérer dans la base de données et envoyer l'email
if (empty($errors)) {
    // Préparer la requête SQL pour l'insertion des données
    $stmt = $conn->prepare("INSERT INTO user (firstname, lastname, email, gender, country, subject, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $firstname, $lastname, $email, $gender, $country, $subject, $message);

    // Exécuter la requête préparée
    if ($stmt->execute()) {
        // En cas de succès, envoyer l'email
        $emailSent = send_email($email, $firstname, $lastname, $message, $subject, $gender);

        if ($emailSent) {
            $_SESSION['success'] = 'Success';
            header('Location: ../index.php');
            exit;
        } else {
            $_SESSION['error'] = 'Error sending email';
            header('Location: ../index.php');
            exit;
        }
    } else {
        $_SESSION['error'] = "Erreur lors de l'insertion : " . $stmt->error;
        header('Location: ../index.php');
        exit;
    }

    // Fermer la déclaration et la connexion
    $stmt->close();
    $conn->close();
} else {
    // Si des erreurs ont été collectées, les stocker dans la session et rediriger vers le formulaire
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: ../index.php');
    exit;
}
?>
