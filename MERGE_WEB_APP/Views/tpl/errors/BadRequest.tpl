<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 400</title>

    <link rel="stylesheet" href="Views/CSS/errors.css" />
</head>

<body id="Error400">
        <h1> Ooops !</h1>
        <h2> Bad Request </h2>
        <div class="error-picture"> 
            <img class="picture" src="Views/Assets/error400.png">
        </div>

        <div class="error-CTA">
            <a id="goHome" href="{$source}">Retour à l'acceuil</a>
        </div>
</body>

</html>

<!-- Commentaires :
Remarques :
- lors de l'affichage via Appache, le style et l'image ne s'affiche pas

=> Piste de solution : le problème vient des liens.

-->