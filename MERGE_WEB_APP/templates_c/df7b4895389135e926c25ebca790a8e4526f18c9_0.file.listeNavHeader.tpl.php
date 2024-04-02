<?php
/* Smarty version 3.1.36, created on 2024-04-02 15:20:53
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\header&footer\listeNavHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660c0635b87547_25463885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df7b4895389135e926c25ebca790a8e4526f18c9' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\header&footer\\listeNavHeader.tpl',
      1 => 1712063953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660c0635b87547_25463885 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav-links">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">Accueil</a></li>
                        <li><a href="#.html">Trouver un stage</a></li>
                        <li><a href="#.html">Trouver une entreprise</a></li>
<?php if ($_smarty_tpl->tpl_vars['user']->value == 'Admin') {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value != 'Pilote') {?>
                        <li><a href="#.html">Trouver un pilote</a></li>
    <?php }?>
                        <li><a href="#.html">Trouver un étudiant</a></li>
<?php }?>
</ul><?php }
}
