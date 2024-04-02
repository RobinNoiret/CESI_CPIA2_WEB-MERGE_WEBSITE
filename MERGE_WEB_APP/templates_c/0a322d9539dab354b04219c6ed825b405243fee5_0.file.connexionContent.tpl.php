<?php
/* Smarty version 3.1.36, created on 2024-04-02 13:53:04
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\connexionContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660bf1a0cfd667_35703176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a322d9539dab354b04219c6ed825b405243fee5' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\connexionContent.tpl',
      1 => 1712056066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660bf1a0cfd667_35703176 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login-div">

<h1 class="login-text">Connexion</h1>

<form class="login-form" action="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=connexion" method="post">
    <fieldset class="fieldset-group">

        <div class="form-group">
            <label for="login" class="form-label-usr">Identifiant</label>
            <input type="text" class="form-field-usr" placeholder="prenom.nom" id="login" name="login" required>
        </div>

        <div class="form-group">
            <label for="password" class="form-label-pwd">Mot de passe</label>
            <input type="password" class="form-field-pwd" placeholder="mot-de-passe" id="password" name="password" required>
        </div>

        <input type="submit" class="CTA-button" value="Login">

    </fieldset>
</form>

</div><?php }
}
