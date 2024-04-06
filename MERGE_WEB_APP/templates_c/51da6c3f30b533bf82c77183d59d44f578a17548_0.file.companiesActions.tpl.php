<?php
/* Smarty version 3.1.36, created on 2024-04-05 09:20:34
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\companiesActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660fa642b36263_67218035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51da6c3f30b533bf82c77183d59d44f578a17548' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\companiesActions.tpl',
      1 => 1712299942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fa642b36263_67218035 (Smarty_Internal_Template $_smarty_tpl) {
?><!--________________________________________ Formualaire de création ________________________________________-->
    
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
                        <!-- Afficher le message de succès s'il existe -->
                        <?php if ((isset($_smarty_tpl->tpl_vars['successMessage']->value))) {?>
                            <div class="success-message"><?php echo $_smarty_tpl->tpl_vars['successMessage']->value;?>
</div>
                        <?php }?>

                        <!-- Afficher le message d'erreur s'il existe -->
                        <?php if ((isset($_smarty_tpl->tpl_vars['errorMessage']->value))) {?>
                            <div class="error-message"><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</div>
                        <?php }?>
                    </div>
                </div>
            </div>  
        </fieldset>
    </form>


</div><?php }
}
