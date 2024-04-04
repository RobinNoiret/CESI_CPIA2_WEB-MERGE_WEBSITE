<?php
/* Smarty version 3.1.36, created on 2024-04-04 22:53:32
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\connexionContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660f134c6fedd0_82858012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a322d9539dab354b04219c6ed825b405243fee5' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\connexionContent.tpl',
      1 => 1712129977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f134c6fedd0_82858012 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="form-text">Connexion</h1>
<div class="form-div">

    <form class="div-form" action="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=connexion" method="post">

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
</div><?php }
}
