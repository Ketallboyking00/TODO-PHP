<?php
require 'connexion_bdd.php';

// Chargement du fichier XML
$xml = simplexml_load_file("fichier_taches.xml");

// Boucle sur chaque <tache> dans le XML
foreach ($xml->tache as $t) {
  $texte = $t->texte;
  $stmt = $conn->prepare("INSERT INTO taches (texte) VALUES (?)");
  $stmt->bind_param("s", $texte);
  $stmt->execute();
}
?>