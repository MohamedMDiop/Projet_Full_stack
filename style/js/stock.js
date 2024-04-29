// Fonction pour mettre à jour la quantité restante lors de la sélection d'une culture
function mettreAJourQuantite() {
  const cultureChoisie = document.getElementById('choixCulture').value;
  const quantiteRestante = document.getElementById('quantiteRestante');

  // Remplacer les valeurs par vos données réelles
  switch (cultureChoisie) {
    case 'culture1':
      quantiteRestante.textContent = 15;
      break;
    case 'culture2':
      quantiteRestante.textContent = 8;
      break;
    case 'culture3':
      quantiteRestante.textContent = 20;
      break;
    default:
      quantiteRestante.textContent = 0;
  }
}

// Attacher l'événement "change" à la sélection de culture
document.getElementById('choixCulture').addEventListener('change', mettreAJourQuantite);
