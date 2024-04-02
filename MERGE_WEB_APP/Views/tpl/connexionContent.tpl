<h1 class="form-text">Connexion</h1>
<div class="form-div">

    <form class="div-form" action="{$source}?page=connexion" method="post">

        <!--__________________________ Input pour la connexion __________________________-->
        <fieldset class="fieldset-group">
        <div id="formFields">
            <div>
                <label for="login" class="Form_label">Identifiant</label>
                <input type="text" class="Form_input" placeholder="prenom.nom" id="login" name="login" required>
            </div><br>
            <div>
                <label for="password" class="Form_label">Mot de passe</label>
                <input type="password" class="Form_input" placeholder="mot-de-passe" id="password" name="password" required>
            </div><br>

            <input type="submit" class="CTA_secondaire" value="Login">
        </div>
        </fieldset>
    </form>
</div>