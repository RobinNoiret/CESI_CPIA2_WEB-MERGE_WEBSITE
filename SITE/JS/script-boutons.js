// Sélection des éléments DOM pour l'icône de cœur
var btnvarlike = document.getElementById('btn-like');
var btnvarapply = document.getElementById('btn-apply');
var icon = btnvarlike.querySelector('i');

// Ajout des gestionnaires d'événements pour le clic sur le bouton "like"
btnvarlike.addEventListener('click', toggleHeartIcon);

btnvarlike.addEventListener('mousedown', buttonClicked);
btnvarlike.addEventListener('mouseup', buttonReleased);

btnvarapply.addEventListener('mousedown', buttonClicked);
btnvarapply.addEventListener('mouseup', buttonReleased);

// Fonction pour gérer l'effet d'enfoncement du bouton
function buttonClicked(event) {
    // Récupère l'ID de l'élément cliqué
    var buttonId = event.target.id;
    console.log(buttonId);

    // Vérifie quel bouton a été pressé et ajoute la classe d'effet d'enfoncement
    if (buttonId === 'btn-like') {
        btnvarlike.classList.add('pressed');
    } else if (buttonId === 'btn-apply') {
        btnvarapply.classList.add('pressed');
    }
}

// Fonction pour gérer le retour à la normale du bouton
function buttonReleased(event) {
    // Récupère l'ID de l'élément cliqué
    var buttonId = event.target.id;

    // Vérifie quel bouton a été relâché et supprime la classe d'effet d'enfoncement
    if (buttonId === 'btn-like') {
        btnvarlike.classList.remove('pressed');
    } else if (buttonId === 'btn-apply') {
        btnvarapply.classList.remove('pressed');
    }
}


// Fonction pour basculer entre les icônes de cœur gris et orange
function toggleHeartIcon() {
    if (icon.style.color == '#f6f6f6') {
        icon.classList.toggle('heart--gray');
    } else {
        icon.classList.toggle('heart--orange');
    }
}

// Sélection de toutes les étoiles
const stars = document.querySelectorAll(".fa-star");

// Sélection de l'input
const note = document.querySelector("#rate")

// Ajout du gestionnaire d'événements pour le survol sur les étoiles
for (star of stars) {
    star.addEventListener("mouseover", handleStarHover);
    // On écoute le clic
    star.addEventListener("click", function(){
        note.value = this.dataset.value;
    });
    star.addEventListener("mouseout", function() {
        resetStars(note.value);
    });
}

// Fonction pour gérer le survol sur les étoiles
function handleStarHover() {
    resetStars(); // Réinitialisation de la couleur des étoiles
    this.style.color = "#FF7D00"; // Coloration de l'étoile survolée en jaune

    // Coloration des étoiles précédentes au survol
    let previousStar = this.previousElementSibling;
    while (previousStar) {
        previousStar.style.color = "#FF7D00";
        previousStar = previousStar.previousElementSibling;
    }
}

// Fonction pour réinitialiser la couleur des étoiles
function resetStars(note = 0) {
    for (star of stars){
        if (star.dataset.value > note){
            console.log(star.dataset.value);
            console.log(note);
            star.style.color = "#1D1D1D";
        }else{
            star.style.color = "#FF7D00";
        }
    }
}
