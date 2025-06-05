// Charge toutes les tâches depuis le serveur
function chargerTaches() {
  fetch('lister_taches.php')
    .then(res => res.text())
    .then(html => document.getElementById("liste_taches").innerHTML = html);
}

// Envoie une nouvelle tâche au serveur
function ajouterTache() {
  const texte = document.getElementById("tache").value;
  fetch('ajouter_tache.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: 'texte=' + encodeURIComponent(texte)
  }).then(() => {
    document.getElementById("tache").value = ''; // Réinitialiser le champ
    chargerTaches(); // Recharger la liste
  });
}

// Supprime une tâche en fonction de son ID
function supprimerTache(id) {
  fetch('supprimer_tache.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: 'id=' + id
  }).then(() => chargerTaches());
}

// Permet de modifier une tâche (avec une boîte de dialogue)
function modifierTache(id) {
  const nouveauTexte = prompt("Modifier la tâche :");
  if (nouveauTexte) {
    fetch('modifier_tache.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: 'id=' + id + '&texte=' + encodeURIComponent(nouveauTexte)
    }).then(() => chargerTaches());
  }
}

// Importe les tâches depuis un fichier XML
function chargerDepuisXML() {
  fetch('importer_xml.php').then(() => chargerTaches());
}

// Exporte les tâches vers un fichier XML
function exporterVersXML() {
  window.location.href = 'exporter_xml.php';
}