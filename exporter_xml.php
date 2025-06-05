<?php
require 'connexion_bdd.php';

// En-têtes HTTP pour forcer le téléchargement
header('Content-Type: text/xml');
header('Content-Disposition: attachment; filename="export.xml"');

// Début du fichier XML
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<taches>";

// Requête pour récupérer toutes les tâches
$result = $conn->query("SELECT * FROM taches");

// Affichage XML de chaque tâche
while ($row = $result->fetch_assoc()) {
  echo "<tache><texte>" . htmlspecialchars($row['texte']) . "</texte></tache>";
}

echo "</taches>";
?>