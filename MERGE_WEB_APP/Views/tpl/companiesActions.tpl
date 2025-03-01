<!--________________________________________ Formualaire de création ________________________________________-->
    
<h1 class="form-text">Création d'une Entreprise</h1>
<div class="form-div">
    
    <form class="div-form" action="" method="post">

        <fieldset class="fieldset-group">

            <div id="formFields">
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
                        <input class="Form_CTA_secondaire" type="submit" value="Soumettre">
                        
                    </div>
                </div>
            </div>  
        </fieldset>
    </form>


</div>