# Comment définir nos pages d'erreurs par défault dans Apache

### Etape 1 :
Ouvrir le fichier httpd.conf

### Etape 2 :
Aller au allentour de la ligne 473, Apache à déjà expliqué sous forme de commentaire comment personnaliser ses pages d'erreurs.
On devrait voir le code suivant :

```
#
# Customizable error responses come in three flavors:
# 1- plain text 2- local redirects 3- external redirects
#
# Some examples:
#ErrorDocument 500 "The server made a boo boo."
#ErrorDocument 404 /missing.html
#ErrorDocument 404 "/cgi-bin/missing_handler.pl"
#ErrorDocument 402 http://www.example.com/subscription_info.html
#
```

### Etape 3 :
A la suite de ce code ajouté la configuration permettant de lier notre page d'erreur au code d'erreur associé.

```
# Personnalisation des pages d'erreurs
ErrorDocument 400 "/MERGE_WEB_APP/Views/tpl/errors/BadRequest.tpl"
ErrorDocument 401 "/MERGE_WEB_APP/Views/tpl/errors/AuthorisationRequise.tpl"
ErrorDocument 404 "/MERGE_WEB_APP/Views/tpl/errors/RessourceIntrouvable.tpl"
ErrorDocument 500 "/MERGE_WEB_APP/Views/tpl/errors/ServerError.tpl"
```

### Conclusion :
On peut maintenant tester en essayant à accéder à une ressource qui n'existe pas sur le serveur. Si tout fonctionne correctement on devrait voir la page d'erreur personnalisé s'afficher.