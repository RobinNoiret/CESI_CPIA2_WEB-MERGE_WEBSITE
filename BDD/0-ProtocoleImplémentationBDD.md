# Comment implémenter la base de données sur PHP myadmin

### Etape 1 : Se rendre sur la page home de PHP myadmin
http://localhost/phpmyadmin/index.php?route=/ 

Puis se rendre dans l'*onglet SQL*; *copier/coller* le code de création *(BDD-CreationDataBase.sql)* et l'exécuté

### Etape 2 : Peuplement des villes
Récupérer le *peuplement uniquement des villes* (jusqu'à ligne 31) et l'éxécuté sur l'onglet SQL de la nouvelle base de données nomée *mergedatabase*.

### Etape 3 : Vérification des id villes
Il y a tendance a y avoir des erreurs tel que les CityID qui commence à 26 ce qui pose problème pour le reste du peuplement.

#### Si problème au niveau des IDs
Dans le cas ou il y a un problème il faut donc utiliser le fichier SQL nommé BDD-CorrectionCityID qui vous permettra d'obtenir les IDs de 1 à 25.

#### Si aucun problème passer à la suite
Ne rien faire

### Etape 4 : Finir le peuplement
Vous pouvez maintenant compléter le peuplement (à partir de la ligne 32). Si tout ce passe bien vous pouvez maintenant travailler sur votre base. Dans le cas contraire contacter Robin.

<img src='C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\Assets\logo avec texte under.png' width='40%' height=40%'>