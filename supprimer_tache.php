<?php
// Connexion à la base
require 'connexion_bdd.php';

// Supprimer la tâche avec l'ID fourni en POST
$id = $_POST['id'];
$conn->query("DELETE FROM taches WHERE id=$id");
?>