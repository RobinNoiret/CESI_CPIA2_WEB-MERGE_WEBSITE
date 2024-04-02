<?php
/* Smarty version 3.1.36, created on 2024-04-02 13:49:15
  from 'C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\connexionContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660bf0bb1e0616_71144848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82baf78df6f73589856f5044596bcb9c52bdeb9b' => 
    array (
      0 => 'C:\\Users\\Noiret\\Documents\\4 - Projets\\4.2 - Etudes\\4 - Développement WEB\\Site\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\connexionContent.tpl',
      1 => 1712058534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660bf0bb1e0616_71144848 (Smarty_Internal_Template $_smarty_tpl) {
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
