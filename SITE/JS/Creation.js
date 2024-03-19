document.addEventListener('DOMContentLoaded', function ()
{
/* ____________________________________________ Constantes ____________________________________________ */

  const formFields = document.getElementById("formFields");
  const compteTypeEntreprise = document.getElementById("compteTypeEntreprise");
  const compteTypePilote = document.getElementById("compteTypePilote");
  const compteTypeEtudiant = document.getElementById("compteTypeEtudiant");
  const localitesContainer = document.getElementById("localitesContainer");

  const entrepriseFieldsHTML = `
      <div>
          <label for="nomEntreprise">Nom de l'entreprise :</label>
          <input type="text" id="nomEntreprise" name="nomEntreprise">
      </div>

      <div>
          <label for="secteurActivite">Secteur d'activité :</label>
          <input type="text" id="secteurActivite" name="secteurActivite">
      </div>

      <div>
          <label for="nombreLocalites">Nombre de localités :</label>
          <select id="nombreLocalites" name="nombreLocalites">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
      </div>

      <div id="localitesContainer">
        <h3>Localité 1 :</h3>

        <div>
          <label for="numRue 1">Numéro de rue :</label>
          <input type="number" id="numRue" name="numRue 1">
        </div>

        <div>
          <label for="nomRue 1">Nom de rue :</label>
          <input type="text" id="nomRue" name="nomRue 1">
        </div>

        <div>
          <label for="codePostal 1">Code postal :</label>
          <input type="number" id="codePostal" name="CP">
        </div>

        <div id="CPflex">
          <label>Ville :</label>
          <div id="resultsDiv">
          </div>
        </div>
      </div>
  `;

  const piloteFieldsHTML = `
      <div>
          <label for="nomPilote">Nom :</label>
          <input type="text" id="nomPilote" name="nomPilote">
      </div>
      <div>
          <label for="prenomPilote">Prénom :</label>
          <input type="text" id="prenomPilote" name="prenomPilote">
      </div>
      <div>
          <label for="centrePilote">Centre :</label>
          <input type="text" id="centrePilote" name="centrePilote">
      </div>
      <div>
          <label for="promotionsAssignes">Promotions assignées :</label>
          <input type="text" id="promotionsAssignes" name="promotionsAssignes">
      </div>
  `;
  const etudiantFieldsHTML = `
      <div>
          <label for="nomEtudiant">Nom :</label>
          <input type="text" id="nomEtudiant" name="nomEtudiant">
      </div>
      <div>
          <label for="prenomEtudiant">Prénom :</label>
          <input type="text" id="prenomEtudiant" name="prenomEtudiant">
      </div>
      <div>
          <label for="centreEtudiant">Centre :</label>
          <input type="text" id="centreEtudiant" name="centreEtudiant">
      </div>
      <div>
          <label for="promotionEtudiant">Promotion :</label>
          <input type="text" id="promotionEtudiant" name="promotionEtudiant">
      </div>
  `;
  const submit = `
      <input type="submit" value="Soumettre">
  `;

/* ___________________________________ Sélection du type de compte ___________________________________ */

/* ___________________________ Compte Entreprise ___________________________ */
compteTypeEntreprise.addEventListener('change', function () {
  if (compteTypeEntreprise.checked) {
      formFields.innerHTML = entrepriseFieldsHTML + submit;

      /* ____________________________ Nombre de localité adaptatives _____________________________ */
      const nombreLocalitesSelect = document.getElementById("nombreLocalites");
      const localitesContainer = document.getElementById("localitesContainer");

      nombreLocalitesSelect.addEventListener('change', function () {
          const nombreLocalites = parseInt(nombreLocalitesSelect.value);
          let localitesHTML = "";
          for (let i = 0; i < nombreLocalites; i++) {
              localitesHTML += `
                  <div>
                      <h3>Localité ${i + 1} :</h3>
                      <div>
                          <label for="numRue${i + 1}">Numéro de rue :</label>
                          <input type="text" id="numRue${i + 1}" name="numRue${i + 1}">
                      </div>
                      <div>
                          <label for="nomRue${i + 1}">Nom de rue :</label>
                          <input type="text" id="nomRue${i + 1}" name="nomRue${i + 1}">
                      </div>
                      <div>
                          <label for="codePostal${i + 1}">Code postal :</label>
                          <input type="text" id="codePostal" name="codePostal${i + 1}" onchange="updateVille(${i + 1})">
                      </div>
                      <div>
                          <label for="ville${i + 1}">Ville :</label>
                          <div id="resultsAPI">

                          </div>
                      </div>
                  </div>
              `;
          }
          localitesContainer.innerHTML = localitesHTML;
      });
  }
});

/* ___________________________ Compte Pilote ___________________________ */
  compteTypePilote.addEventListener('change', function () {
      if (compteTypePilote.checked) {
          formFields.innerHTML = piloteFieldsHTML + submit;
      }
  });

/* ___________________________ Compte Etudiant __________________________ */
  compteTypeEtudiant.addEventListener('change', function () {
      if (compteTypeEtudiant.checked) {
          formFields.innerHTML = etudiantFieldsHTML + submit;
      }
  });
});

function updateVille(index) {

  var html = "<select name='villes' class='formInput' id='city_select'>";
  var codePostal = document.getElementById('codePostal').value;
  var xhr = new XMLHttpRequest();

  console.log("https://apicarto.ign.fr/api/codes-postaux/communes/" + codePostal);
  xhr.open("GET", "https://apicarto.ign.fr/api/codes-postaux/communes/" + codePostal, true);

  xhr.onload = function()
  {
      console.log(xhr.status);
      if (xhr.status === 200)
      {
        var villes = JSON.parse(xhr.responseText);
        console.log(villes);

        for (let ville of villes)
          {
            html += "<option value=" + ville.nomCommune +">" + ville.nomCommune + "</option>"
          };

          html += "</select>"
      }
      else
      {
        console.log("erreur");
        html = "<p>Erreur lors de la récupération des données.</p>";
      }
      document.getElementById("resultsAPI").innerHTML = html;
  };

  xhr.send();
  console.log('la ville a perdu le focus !');
}


