<?php
<<<<<<< HEAD
/* Smarty version 3.1.36, created on 2024-04-03 21:05:47
=======
/* Smarty version 3.1.36, created on 2024-04-03 14:05:32
>>>>>>> main
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\templateBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
<<<<<<< HEAD
  'unifunc' => 'content_660da88b13a007_21194903',
=======
  'unifunc' => 'content_660d460cb1ca49_29386060',
>>>>>>> main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b238e60590e889026f1dcde3ca3fa2b6e10850a' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\templateBase.tpl',
<<<<<<< HEAD
      1 => 1712170988,
=======
      1 => 1712145426,
>>>>>>> main
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/header.tpl' => 1,
    'file:../tpl/homeContent.tpl' => 1,
    'file:../tpl/connexionContent.tpl' => 1,
    'file:../tpl/offer.tpl' => 1,
    'file:../tpl/footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_660da88b13a007_21194903 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660d460cb1ca49_29386060 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html> 
<html lang="fr"> 

    <head> 
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_368548386660da88b12b027_02024918', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295647747660d460caf8889_30069714', 'head');
>>>>>>> main
?>

    </head> 

   	<body>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1472698730660da88b130608_62683242', 'body');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1218390286660d460cb08e21_13180625', 'body');
>>>>>>> main
?>

        
    </body> 
</html> <?php }
/* {block 'head'} */
<<<<<<< HEAD
class Block_368548386660da88b12b027_02024918 extends Smarty_Internal_Block
=======
class Block_295647747660d460caf8889_30069714 extends Smarty_Internal_Block
>>>>>>> main
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_368548386660da88b12b027_02024918',
=======
    0 => 'Block_295647747660d460caf8889_30069714',
>>>>>>> main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<meta charset="utf-8"> 	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="Views/CSS/main.css" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz@0,9..40;1,9..40&display=swap" rel="stylesheet">
        
        <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>	
    <?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
<<<<<<< HEAD
class Block_1472698730660da88b130608_62683242 extends Smarty_Internal_Block
=======
class Block_1218390286660d460cb08e21_13180625 extends Smarty_Internal_Block
>>>>>>> main
{
public $subBlocks = array (
  'body' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1472698730660da88b130608_62683242',
=======
    0 => 'Block_1218390286660d460cb08e21_13180625',
>>>>>>> main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php $_smarty_tpl->_subTemplateRender("file:../tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="Content">
        
            <?php if ($_smarty_tpl->tpl_vars['page']->value == 'home') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:../tpl/homeContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'connexion') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:../tpl/connexionContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'display') {?>
            <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'dispalyOne') {?>
            <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'change' || $_smarty_tpl->tpl_vars['action']->value == 'add') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:../tpl/offer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        <?php echo '<script'; ?>
 src="Views/JS/header.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'body'} */
}
