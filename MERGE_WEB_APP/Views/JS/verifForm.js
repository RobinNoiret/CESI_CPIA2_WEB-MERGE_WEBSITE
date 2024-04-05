/*
/_____________________ Expressions Régulières _____________________
// Page de connexion
var regexLogin = /^[a-zA-Z]+\.[a-zA-Z]+$/;
var regexPassword = NULL;       // Pas de format sur les passwords de la BDD donc pas possible d'appliqué un REGEX

// Page de  création
var regexText = /^[a-zA-Z\s]+$/;
var regexNumRue = /^\d+\s?[a-zA-Z]*$/;
var regexNomRue = /^[a-zA-Z\s-]+$/;
var regexCodePostal = /^\d{5}$/;


*/


//_____________________ Fonction de vérification _____________________
function validationConnexion()
{
    var LoginField = document.getElementById("JeSuisIdentifiant");                     // Champ Login
    var PasswordField = document.getElementById("PasswordField");                  // Champ Password
    console.log("J'ai bien récup les éléments");

if (LoginField == "") {alert("Veuillez saisir votre identifiant");return false; }       // Test du champs identifiant
else if (!isValidLogin(LoginField)) {alert("Votre identifiant doit être de la forme : prénom.nom");
        return false;}

console.log("J'ai bien fait ma validation login");
    
if (PasswordField == "") {alert("Veuillez saisir le nom de la ville.");return false;}   // TEst du champs mot de passe
console.log("J'ai bien fait ma validation mot de passe");

alert("Connexion réussite !");
return true;
}

function affichageCompany()
{
    var CompanyIDField = document.getElementById("CompanyID");
    console.log("J'ai bien récup les éléments");

    if (CompanyIDField == "") {alert("Veuillez saisir l'identifiant");return false; }       // Test du champs identifiant
else if (!isValidLogin(CompanyIDField)) {alert("Votre identifiant doit être un nombre entier");
        return false;}
}

//_____________________ Fonction de validation _____________________
function isValidLogin(LoginField) {
    var postalRegex = /^[a-zA-Z]+\.[a-zA-Z]+$/;         //Définition Regex du login
    return postalRegex.test(LoginField.value);}               //Test du format

function isValidLogin(LoginField) {
    var postalRegex = /^\d+\s?/;                        //Définition Regex de l'ID
    return postalRegex.test(LoginField.value);}               //Test du format



