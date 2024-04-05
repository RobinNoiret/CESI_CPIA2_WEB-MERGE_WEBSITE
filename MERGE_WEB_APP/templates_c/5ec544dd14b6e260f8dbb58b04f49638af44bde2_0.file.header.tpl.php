<?php
<<<<<<< HEAD:MERGE_WEB_APP/templates_c/746e0906028383140d4fad91c9ec0bf31563fe29_0.file.header.tpl.php
/* Smarty version 3.1.36, created on 2024-04-05 01:45:02
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\header.tpl' */
=======
/* Smarty version 3.1.36, created on 2024-04-03 16:25:55
  from 'D:\Brieuc\CESI\A2_info\BLOCS\4. Développement web\Projet\CESI_CPIA2_WEB_PROJECT-1\MERGE_WEB_APP\Views\tpl\header.tpl' */
>>>>>>> main:MERGE_WEB_APP/templates_c/5ec544dd14b6e260f8dbb58b04f49638af44bde2_0.file.header.tpl.php

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
<<<<<<< HEAD:MERGE_WEB_APP/templates_c/746e0906028383140d4fad91c9ec0bf31563fe29_0.file.header.tpl.php
  'unifunc' => 'content_660f3b7e89eed5_63509522',
=======
  'unifunc' => 'content_660d66f3582944_12288189',
>>>>>>> main:MERGE_WEB_APP/templates_c/5ec544dd14b6e260f8dbb58b04f49638af44bde2_0.file.header.tpl.php
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec544dd14b6e260f8dbb58b04f49638af44bde2' => 
    array (
<<<<<<< HEAD:MERGE_WEB_APP/templates_c/746e0906028383140d4fad91c9ec0bf31563fe29_0.file.header.tpl.php
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\header.tpl',
      1 => 1712265708,
=======
      0 => 'D:\\Brieuc\\CESI\\A2_info\\BLOCS\\4. Développement web\\Projet\\CESI_CPIA2_WEB_PROJECT-1\\MERGE_WEB_APP\\Views\\tpl\\header.tpl',
      1 => 1712153567,
>>>>>>> main:MERGE_WEB_APP/templates_c/5ec544dd14b6e260f8dbb58b04f49638af44bde2_0.file.header.tpl.php
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD:MERGE_WEB_APP/templates_c/746e0906028383140d4fad91c9ec0bf31563fe29_0.file.header.tpl.php
function content_660f3b7e89eed5_63509522 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660d66f3582944_12288189 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> main:MERGE_WEB_APP/templates_c/5ec544dd14b6e260f8dbb58b04f49638af44bde2_0.file.header.tpl.php
?>
<header>
    <nav id="navbar-header" class="navbar">

        <a id="link_nav-logo" class="nav-logo" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">
            <img id="nav-logo" class="nav-logo" src="Views/Assets/logo avec texte.png">
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
            <img id="user-icon"src="Views/Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header><?php }
}
