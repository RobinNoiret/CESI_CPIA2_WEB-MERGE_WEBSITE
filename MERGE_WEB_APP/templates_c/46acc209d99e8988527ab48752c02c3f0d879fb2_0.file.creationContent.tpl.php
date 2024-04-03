<?php
/* Smarty version 3.1.36, created on 2024-04-03 20:57:15
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\creationContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660da68b905403_08158257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46acc209d99e8988527ab48752c02c3f0d879fb2' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\creationContent.tpl',
      1 => 1712158759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660da68b905403_08158257 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="form-text">Création d'un compte</h1>
<div class="form-div">
    
    <form class="div-form" action="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['actionPage']->value;?>
&action=display" method="post">

        <fieldset class="fieldset-group">

            <!--__________________________ Choisir le type de compte __________________________-->
            <div class="form-group">
                <div id="account-type">
                    <input type="radio" value="None" class="TypeCompte" id="compteTypeEtudiant" name="account" checked/>
                        <label for="type1" class="radio">Etudiant</label>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value == 'Admin') {?>
                    <input type="radio" value="None" class="TypeCompte" id="compteTypePilote" name="account" />
                        <label for="type2" class="radio">Pilote</label>
                    <?php }?>

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

    <?php echo '<script'; ?>
 src="Views/JS/form_crea.js"><?php echo '</script'; ?>
>


</div><?php }
}
