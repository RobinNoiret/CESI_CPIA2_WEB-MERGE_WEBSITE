
<h1 class="form-text">Création d'un compte</h1>
<div class="form-div">
    
    <form class="div-form" action="{source}?page={$page}&action=display" method="post">

        <fieldset class="fieldset-group">

            <!--__________________________ Choisir le type de compte __________________________-->
            <div class="form-group">
                <div id="account-type">
                    <input type="radio" value="None" class="TypeCompte" id="compteTypeEtudiant" name="account" checked/>
                        <label for="type1" class="radio">Etudiant</label>

                    {if $user eq 'Admin'}
                    <input type="radio" value="None" class="TypeCompte" id="compteTypePilote" name="account" />
                        <label for="type2" class="radio">Pilote</label>
                    {/if}

                    <input type="radio" value="None" class="TypeCompte" id="compteTypeEntreprise" name="account" />
                        <label for="type3" class="radio">Entreprise</label>
                </div>
            </div><br>

            <!--_________________________ Input en fonction du compte _________________________-->
            <div id="formFields">
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

                  <input class="Form_CTA_secondaire" type="submit" value="Soumettre">
            </div>

        </fieldset>
    </form>


</div>