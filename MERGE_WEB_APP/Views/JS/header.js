// Sélection du header
const header = document.getElementById('navbar-header');

// Fonction pour mettre à jour le style du header
function updateHeaderStyle() {
    if (window.scrollY > 0) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}

// Ajout de l'écouteur d'événements sur le défilement de la fenêtre
window.addEventListener('scroll', updateHeaderStyle);
