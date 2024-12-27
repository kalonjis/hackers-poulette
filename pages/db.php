<?php
// db.php

require_once __DIR__ . '/../init.php';  // Inclure init.php pour charger les variables d'environnement

// Connexion à la base de données
$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];; // La base de données créée précédemment

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>