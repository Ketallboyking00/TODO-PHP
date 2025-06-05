<?php
// Connexion à la base de données MySQL
$host = 'localhost';
$user = 'root'; // utilisateur MySQL par défaut sous XAMPP
$pass = 'Talle2005.';     // mot de passe vide sous XAMPP
$db = 'todolist'; // nom de la base

// Création de la connexion
$conn = new mysqli($host, $user, $pass, $db);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>