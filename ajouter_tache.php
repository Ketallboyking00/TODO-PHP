<?php
// Inclure la connexion à la base
require 'connexion_bdd.php';

// Récupérer le texte de la tâche envoyé en POST
$texte = $_POST['texte'];

// Si la tâche n’est pas vide, l’insérer en base
if (!empty($texte)) {
  $stmt = $conn->prepare("INSERT INTO taches (texte) VALUES (?)");
  $stmt->bind_param("s", $texte);
  $stmt->execute();
}
?>