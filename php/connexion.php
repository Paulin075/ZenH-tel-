<?php
$servername = "localhost"; // Ou l'adresse de ton serveur de base de données
$username = "root";
$password = "";
$dbname = "zenHotel";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}
?>