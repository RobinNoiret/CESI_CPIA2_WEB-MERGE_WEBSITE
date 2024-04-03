<?php
/* Smarty version 3.1.36, created on 2024-04-03 11:54:10
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\modification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660d2742206e40_96847914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2d7d158413f6c78f7fd3aa5bb3de59a97017df' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\modification.tpl',
      1 => 1712138024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/modification/modificationOffre.tpl' => 1,
  ),
),false)) {
function content_660d2742206e40_96847914 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content">
<?php $_prefixVariable1 = 'internship';
$_smarty_tpl->_assignInScope('page', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:../tpl/modification/modificationOffre.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</div><?php }
}
