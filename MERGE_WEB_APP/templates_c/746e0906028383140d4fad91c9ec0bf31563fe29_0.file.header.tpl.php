<?php
/* Smarty version 3.1.36, created on 2024-03-27 17:17:07
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6604468349fcd8_07649410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746e0906028383140d4fad91c9ec0bf31563fe29' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\header.tpl',
      1 => 1711554543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604468349fcd8_07649410 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <nav class="navbar">

        <a href="index.html">
            <img id="nav-logo" src="Assets/logo avec texte.png">
        </a>

        <ul class="nav-links">
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="#.html">Trouver un stage</a></li>
                        <li><a href="#.html">Trouver une entreprise</a></li>
            <?php if ($_smarty_tpl->tpl_vars['user']->value == 'admin') {?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value != 'pilote') {?>
                        <li><a href="#.html">Trouver un pilote</a></li>
                <?php }?>
                        <li><a href="#.html">Trouver un étudiant</a></li>
            <?php }?>
        </ul>
        
        <a href="connexion.html">
            <img src="Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header><?php }
}
