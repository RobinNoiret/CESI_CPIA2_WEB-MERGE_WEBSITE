
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

//_____________________ Fonction de validation _____________________
function isValidLogin(LoginField) {
    var postalRegex = /^[a-zA-Z]+\.[a-zA-Z]+$/;         //Définition Regex du login
    return postalRegex.test(LoginField.value);}               //Test du format



