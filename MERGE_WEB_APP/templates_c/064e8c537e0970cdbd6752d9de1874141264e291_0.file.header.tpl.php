<?php
/* Smarty version 3.1.36, created on 2024-03-30 14:05:51
  from 'C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66080e2f5d9255_10313761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '064e8c537e0970cdbd6752d9de1874141264e291' => 
    array (
      0 => 'C:\\Users\\Noiret\\Documents\\4 - Projets\\4.2 - Etudes\\4 - Développement WEB\\Site\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\header.tpl',
      1 => 1711800162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66080e2f5d9255_10313761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <nav class="navbar">

        <a id="link_nav-logo" class="nav-logo" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">
            <img id="nav-logo" class="nav-logo" src="Views/Assets/logo avec texte.png">
        </a>

        <ul class="nav-links">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">Accueil</a></li>
                        <li><a href="#.html">Trouver un stage</a></li>
                        <li><a href="#.html">Trouver une entreprise</a></li>
            <?php if ($_smarty_tpl->tpl_vars['user']->value == 'admin') {?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value != 'pilote') {?>
                        <li><a href="#.html">Trouver un pilote</a></li>
                <?php }?>
                        <li><a href="#.html">Trouver un étudiant</a></li>
            <?php }?>
        </ul>
        
        <a id="link_user-icon" class="user-icon" href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).($_smarty_tpl->tpl_vars['connecAction']->value);?>
">
            <img id="user-icon"src="Views/Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header><?php }
}
