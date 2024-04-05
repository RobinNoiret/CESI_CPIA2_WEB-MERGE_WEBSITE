<?php
/* Smarty version 3.1.36, created on 2024-04-05 03:27:41
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660f538d424ac9_38177697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746e0906028383140d4fad91c9ec0bf31563fe29' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\header.tpl',
      1 => 1712276842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f538d424ac9_38177697 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <nav id="navbar-header" class="navbar">

        <a id="link_nav-logo" class="nav-logo" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">
            <img id="nav-logo" class="nav-logo" src="Views/Assets/logo avec texte.png" alt="Logo Merge">
        </a>

        <ul <?php if ($_smarty_tpl->tpl_vars['user']->value == 'Admin' || $_smarty_tpl->tpl_vars['user']->value == 'Pilote') {?>class="nav-links-big"<?php } else { ?>class="nav-links-small"<?php }?>>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">Accueil</a></li>
                        <li><a href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).('?page=internship');?>
">Trouver un stage</a></li>
                        <li><a href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).('?page=company');?>
">Trouver une entreprise</a></li>
            <?php if ($_smarty_tpl->tpl_vars['user']->value == 'Admin') {?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value != 'Pilote') {?>
                        <li><a href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).('?page=pilote');?>
">Trouver un pilote</a></li>
                <?php }?>
                        <li><a href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).('?page=student');?>
">Trouver un étudiant</a></li>
            <?php }?>
        </ul>
        
        <a id="link_user-icon" class="user-icon" href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).($_smarty_tpl->tpl_vars['connecAction']->value);?>
">
            <img id="user-icon"src="Views/Assets/user-circle.svg" alt="Icon de compte utilisateur" class="user-icon">
        </a>

    </nav>
</header><?php }
}
