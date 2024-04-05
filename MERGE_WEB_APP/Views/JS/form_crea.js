document.addEventListener('DOMContentLoaded', function () {
    /* ____________________________________________ Constantes ____________________________________________ */

    const nombreLocalitesSelect = document.getElementById("nombreLocalites");
    const localitesContainer = document.getElementById("localitesContainer");

    nombreLocalitesSelect.addEventListener('change', function () {
        const nombreLocalites = parseInt(nombreLocalitesSelect.value);
        let localitesHTML = "";
        for (let i = 0; i < nombreLocalites; i++) {
            localitesHTML += `
                  <div>
                      <h3 class="Form_h3_localite">Localité ${i + 1} :</h3>
                      <div>
                          <label class="Form_label" for="numRue${i + 1}">Numéro de rue :</label>
                          <input class="Form_input" type="text" id="numRue${i + 1}" name="numRue${i + 1}">
                      </div>
                      <div>
                          <label class="Form_label" for="nomRue${i + 1}">Nom de rue :</label>
                          <input class="Form_input" type="text" id="nomRue${i + 1}" name="nomRue${i + 1}">
                      </div>
                      <div>
                          <label class="Form_label" for="codePostal${i + 1}">Code postal :</label>
                          <input type="text" class="codePostal" data-index="${i + 1}" name="codePostal${i + 1}">
                      </div>
                      <div>
                          <label class="Form_label" for="ville${i + 1}">Ville :</label>
                          <div class="resultsAPI" id="resultsAPI${i + 1}"></div>
                      </div>
                      <input class="Form_CTA_secondaire" type="submit" value="Soumettre">
                  </div>
              `;
        }
        localitesContainer.innerHTML = localitesHTML;
        // Ajouter un écouteur d'événements pour chaque champ de code postal
        document.querySelectorAll('.codePostal').forEach(input => {
            input.addEventListener('input', function () {
                const index = this.getAttribute('data-index');
                updateVille(index);
            });
        });
    });

});

function updateVille(index) {
    var html = "<select name='villes' class='formInput city_select'>";
    var codePostal = document.querySelector(`input[name='codePostal${index}']`).value;
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "https://apicarto.ign.fr/api/codes-postaux/communes/" + codePostal, true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            var villes = JSON.parse(xhr.responseText);
            for (let ville of villes) {
                html += "<option value=" + ville.nomCommune + ">" + ville.nomCommune + "</option>"
            };
            html += "</select>"
        } else {
            html = "<p>Erreur lors de la récupération des données.</p>";
        }
        document.getElementById("resultsAPI" + index).innerHTML = html;
    };

    xhr.send();
}
