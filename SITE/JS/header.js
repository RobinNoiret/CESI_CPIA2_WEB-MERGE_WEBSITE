// Sélection du header
const header = document.getElementById('header');

// Fonction pour mettre à jour le style du header
function updateHeaderStyle() {
    if (window.scrollY > 0) {
        header.classList.add('header-fixed');
    } else {
        header.classList.remove('header-fixed');
    }
}

// Ajout de l'écouteur d'événements sur le défilement de la fenêtre
window.addEventListener('scroll', updateHeaderStyle);
