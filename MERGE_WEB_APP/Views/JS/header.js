// Sélection du header
const header = document.getElementById('navbar-header');
const content = document.getElementById('content');

// Fonction pour mettre à jour le style du header
function updateHeaderStyle() {
    if (window.scrollY > 0) {
        header.classList.add('navbar-fixed');
        content.style.marginTop = "3.3rem";
    } else {
        header.classList.remove('navbar-fixed');
        // Ne modifiez la marge supérieure que si la position de défilement est supérieure à 0
        if (window.scrollY === 0) {
            content.style.marginTop = "0";
        }
    }
}

// Ajout de l'écouteur d'événements sur le défilement de la fenêtre
window.addEventListener('scroll', updateHeaderStyle);
