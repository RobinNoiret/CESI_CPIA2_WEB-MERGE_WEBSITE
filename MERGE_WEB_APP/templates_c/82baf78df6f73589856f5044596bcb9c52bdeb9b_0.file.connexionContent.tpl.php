<?php
/* Smarty version 3.1.36, created on 2024-03-30 14:05:51
  from 'C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\connexionContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66080e2f714f46_60906814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82baf78df6f73589856f5044596bcb9c52bdeb9b' => 
    array (
      0 => 'C:\\Users\\Noiret\\Documents\\4 - Projets\\4.2 - Etudes\\4 - Développement WEB\\Site\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\connexionContent.tpl',
      1 => 1711803946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66080e2f714f46_60906814 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="form-text">Connexion</h1>
<div class="form-div">

    <form class="div-form" action="#" method="post">

        <!--__________________________ Input pour la connexion __________________________-->
        <fieldset class="fieldset-group">
        <div id="formFields">
            <div>
                <label for="login" class="Form_label">Identifiant</label>
                <input type="text" class="Form_input" placeholder="prenom.nom" id="login" name="login" required>
            </div>
            <div>
                <label for="password" class="Form_label">Mot de passe</label>
                <input type="password" class="Form_input" placeholder="mot-de-passe" id="password" name="password" required>
            </div>

            <input type="submit" class="Form_CTA_secondaire" value="Login">
        </div>
        </fieldset>
    </form>
</div><?php }
}
