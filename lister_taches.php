<?php
require 'connexion_bdd.php';

// Sélection de toutes les tâches
$result = $conn->query("SELECT * FROM taches ORDER BY id DESC");

// Affichage HTML de chaque tâche
while ($row = $result->fetch_assoc()) {
  echo "<div>" . htmlspecialchars($row['texte']) .
       " <button onclick='modifierTache(" . $row['id'] . ")'>✏️</button>" .
       " <button onclick='supprimerTache(" . $row['id'] . ")'>🗑️</button>" .
       "</div>";
}
?>
