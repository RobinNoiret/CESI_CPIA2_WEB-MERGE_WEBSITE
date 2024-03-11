
/* _________________________________________ Formulaire adaptatif _________________________________________ */

/* __________________________ Constantes __________________________ */

const formFields = document.getElementById("formFields");
const compteTypeEntreprise = document.getElementById("compteTypeEntreprise");
const compteTypePilote = document.getElementById("compteTypePilote");
const compteTypeEtudiant = document.getElementById("compteTypeEtudiant");

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
      <label for="localites">Localités :</label>
      <input type="text" id="localites" name="localites">
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

/* __________________________ Fonctions __________________________ */

// Ajouter des gestionnaires d'événements pour chaque radio bouton
document.addEventListener('DOMContentLoaded', function ()
{
    let TypeAccountSelect = document.getElementById("TypeCompte");

    TypeAccountSelect.addEventListener('change', function ()
    {
        if (TypeAccountSelect.value === compteTypeEntreprise)
        {
            formFields.innerHTML = entrepriseFieldsHTML;
        }

        if (TypeAccountSelect.value === compteTypePilote)
        {
            formFields.innerHTML = piloteFieldsHTML;
        }

        if (TypeAccountSelect.value === compteTypeEtudiant)
        {
            formFields.innerHTML = etudiantFieldsHTML;
        }
    });
});