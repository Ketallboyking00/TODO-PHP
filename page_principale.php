<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Gestionnaire de Tâches</title>
  <link rel="stylesheet" href="style_taches.css"> <!-- CSS personnalisé -->
</head>
<body>

  <h1>Ma To-Do List</h1>

  <!-- Champ de saisie d'une nouvelle tâche -->
  <input type="text" id="tache" placeholder="Nouvelle tâche...">
  <button onclick="ajouterTache()">Ajouter</button>
  
  <!-- Zone où la liste des tâches sera affichée -->
  <div id="liste_taches"></div>

  <!-- Boutons pour importer/exporter les tâches en XML -->
  <button onclick="chargerDepuisXML()">📥 Charger depuis XML</button>
  <button onclick="exporterVersXML()">📤 Exporter en XML</button>

  <script src="script_ajax.js"></script> <!-- Script JS -->
  <script>
    window.onload = chargerTaches; // Charger la liste dès le chargement de la page
  </script>
</body>
</html>