<?php
require 'connexion_bdd.php';

// Récupération de l’ID et du texte modifié
$id = $_POST['id'];
$texte = $_POST['texte'];
// Mise à jour dans la base
$stmt = $conn->prepare("UPDATE taches SET texte=? WHERE id=?");
$stmt->bind_param("si", $texte, $id);
$stmt->execute();
?>