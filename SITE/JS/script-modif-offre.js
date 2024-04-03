// Obtenir la date actuelle dans le fuseau horaire local
var currentDate = new Date();

// Extraire l'année, le mois et le jour
var year = currentDate.getFullYear();
var month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Ajouter un zéro devant si nécessaire
var day = String(currentDate.getDate()).padStart(2, '0'); // Ajouter un zéro devant si nécessaire

// Format de la date en YYYY-MM-DD
var formattedDate = `${year}-${month}-${day}`;

// Définir la valeur du champ d'entrée
document.getElementById('date').value = formattedDate;


// Obtenir la ville en fonction du contenu rentré
function searchCities() {
    const input = document.getElementById('villeInput').value.trim();
    const select = document.getElementById('suggestions');
    select.innerHTML = ''; // Efface les anciennes suggestions

    if (input.length < 3) {
        select.style.display = 'none'; // Cache la liste déroulante si l'entrée est trop courte
        return;
    }

    // Votre code de requête API ici
    // Par exemple, avec fetch :
    fetch(`https://api-adresse.data.gouv.fr/search/?q=${input}&type=municipality&autocomplete=1&limit=5`)
        .then(response => response.json())
        .then(data => {
            const cities = data.features;
            if (cities.length > 0) {
                cities.forEach(city => {
                    const cityName = city.properties.city;
                    const option = document.createElement('option');
                    option.value = cityName;
                    option.textContent = cityName;
                    select.appendChild(option);
                });
                select.style.display = 'block'; // Affiche la liste déroulante
            } else {
                select.style.display = 'none'; // Cache la liste déroulante si aucune ville n'est trouvée
            }
        })
        .catch(error => console.error('Erreur lors de la récupération des villes :', error));
}
