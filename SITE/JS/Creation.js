document.addEventListener('DOMContentLoaded', function ()
{
/* ____________________________________________ Constantes ____________________________________________ */

  const formFields = document.getElementById("formFields");
  const compteTypeEntreprise = document.getElementById("compteTypeEntreprise");
  const compteTypePilote = document.getElementById("compteTypePilote");
  const compteTypeEtudiant = document.getElementById("compteTypeEtudiant");
  //const localitesContainer = document.getElementById("localitesContainer");

  const entrepriseFieldsHTML = `
    <div>
        <label class="Form_label" for="nomEntreprise">Nom de l'entreprise :</label>
        <input class="Form_input" type="text" id="nomEntreprise" name="nomEntreprise">
    </div>

    <div>
          <label class="Form_label" for="secteurActivite">Secteur d'activité :</label>
          <input class="Form_input" type="text" id="secteurActivite" name="secteurActivite">
      </div>

      <div>
          <label class="Form_label" for="nombreLocalites">Nombre de localités :</label>
          <select id="nombreLocalites" name="nombreLocalites">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
      </div>


    <div id="localitesContainer">
        <div class="localite">
            <h3 class="Form_h3_localite">Localité 1 :</h3>
            <div>
                <label class="Form_label" for="numRue1">Numéro de rue :</label>
                <input class="Form_input" type="text" id="numRue1" name="numRue1">
            </div>
            <div>
                <label class="Form_label" for="nomRue1">Nom de rue :</label>
                <input class="Form_input" type="text" id="nomRue1" name="nomRue1">
            </div>
            <div>
                <label class="Form_label" for="codePostal1">Code postal :</label>
                <input type="text" class="codePostal" name="codePostal1" onchange="updateVille(1)">
            </div>
            <div>
                <label class="Form_label" for="ville1">Ville :</label>
                <div class="resultsAPI"></div>
            </div>
        </div>
    </div>
  `;
  const piloteFieldsHTML = `
      <div>
          <label class="Form_label" for="nomPilote">Nom :</label>
          <input class="Form_input" type="text" id="nomPilote" name="nomPilote">
      </div>
      <div>
          <label class="Form_label" for="prenomPilote">Prénom :</label>
          <input class="Form_input" type="text" id="prenomPilote" name="prenomPilote">
      </div>
      <div>
          <label class="Form_label" for="centrePilote">Centre :</label>
          <input class="Form_input" type="text" id="centrePilote" name="centrePilote">
      </div>
      <div>
          <label class="Form_label" for="promotionsAssignes">Promotions assignées :</label>
          <input class="Form_input" type="text" id="promotionsAssignes" name="promotionsAssignes">
      </div>
  `;
  const etudiantFieldsHTML = `
      <div>
          <label class="Form_label" for="nomEtudiant">Nom :</label>
          <input class="Form_input" type="text" id="nomEtudiant" name="nomEtudiant">
      </div>
      <div>
          <label class="Form_label" for="prenomEtudiant">Prénom :</label>
          <input class="Form_input" type="text" id="prenomEtudiant" name="prenomEtudiant">
      </div>
      <div>
          <label class="Form_label" for="centreEtudiant">Centre :</label>
          <input class="Form_input" type="text" id="centreEtudiant" name="centreEtudiant">
      </div>
      <div>
          <label class="Form_label" for="promotionEtudiant">Promotion :</label>
          <input class="Form_input" type="text" id="promotionEtudiant" name="promotionEtudiant">
      </div>
  `;
  const submit = `
      <input class="Form_CTA_secondaire" class="Form_CTA_secondaire" type="submit" value="Soumettre">
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
                          <label class="Form_label" for="numRue${i + 1}">Numéro de rue :</label>
                          <input class="Form_input" type="text" id="numRue${i + 1}" name="numRue${i + 1}">
                      </div>
                      <div>
                          <label class="Form_label" for="nomRue${i + 1}">Nom de rue :</label>
                          <input class="Form_input" type="text" id="nomRue${i + 1}" name="nomRue${i + 1}">
                      </div>
                      <div>
                          <label class="Form_label" for="codePostal${i + 1}">Code postal :</label>
                          <input type="text" class="codePostal${i + 1}" name="codePostal${i + 1}" onchange="updateVille(${i + 1})">
                      </div>
                      <div>
                          <label class="Form_label" for="ville${i + 1}">Ville :</label>
                          <div id="resultsAPI${i + 1}">

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


// Dans la fonction updateVille, utilisez des sélecteurs de classe et de l'index pour récupérer les éléments correspondants
function updateVille(index) {
    var html = "<select name='villes' class='formInput city_select'>";
    var codePostal = document.getElementsByClassName('codePostal')[index - 1].value;
    var xhr = new XMLHttpRequest();

    console.log("https://apicarto.ign.fr/api/codes-postaux/communes/" + codePostal);
    xhr.open("GET", "https://apicarto.ign.fr/api/codes-postaux/communes/" + codePostal, true);

    xhr.onload = function() {
        console.log(xhr.status);
        if (xhr.status === 200) {
            var villes = JSON.parse(xhr.responseText);
            console.log(villes);

            for (let ville of villes) {
                html += "<option value=" + ville.nomCommune + ">" + ville.nomCommune + "</option>"
            };

            html += "</select>"
        } else {
            console.log("erreur");
            html = "<p>Erreur lors de la récupération des données.</p>";
        }
        document.getElementsByClassName("resultsAPI")[index - 1].innerHTML = html;
    };

    xhr.send();
    console.log('la ville a perdu le focus !');
}

//________________________________________________________________________________________________________________________//
// Note : 19/03/2024                                                                                                      //
// Problème : Auto complète Ville en fonction du code postal                                                              //
// Source du problème : on cherche à la fois à  avoir des données différentes sur un ID donné pour chaque localité.       //
// Solution : Il faudrait réussir à la fois à avoir un select spécifique pour chaque ville.                               //
//________________________________________________________________________________________________________________________//

//________________________________________________________________________________________________________________________//
// Note : 19/03/2024    
// Problème : Le principe d'automatiquement compléter les villes en fonction du code postal ne fonctionne pas             //
//      au delà de une localité.                                                                                          //
//________________________________________________________________________________________________________________________//

//________________________________________________________________________________________________________________________//
// Note : 19/03/2024                                                                                                      //
// Problème : Impossible de mettre de la mise en forme (ajouter des classes) pour l'input du code postal et               //
//      les options du nombre de localité. Il doit y avoir un problème entre l'ajour des classes et l'automatisation      //
//________________________________________________________________________________________________________________________//