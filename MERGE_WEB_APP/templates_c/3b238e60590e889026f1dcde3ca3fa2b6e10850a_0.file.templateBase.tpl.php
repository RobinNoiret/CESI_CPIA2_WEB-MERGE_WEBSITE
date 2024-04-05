<?php
/* Smarty version 3.1.36, created on 2024-04-05 03:27:41
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\templateBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660f538d259ba5_62311297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b238e60590e889026f1dcde3ca3fa2b6e10850a' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\templateBase.tpl',
      1 => 1712276842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/header.tpl' => 1,
    'file:../tpl/homeContent.tpl' => 1,
    'file:../tpl/connexionContent.tpl' => 1,
    'file:../tpl/companiesActions.tpl' => 1,
    'file:../tpl/companies.tpl' => 1,
    'file:../tpl/mLegaleContent.tpl' => 1,
    'file:../tpl/footer.tpl' => 1,
  ),
),false)) {
function content_660f538d259ba5_62311297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html> 
<html lang="fr"> 

    <head> 
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_801189102660f538d22d916_09489753', 'head');
?>

    </head> 

   	<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1522011060660f538d23a0a1_93528582', 'body');
?>

        
    </body> 
</html> <?php }
/* {block 'head'} */
class Block_801189102660f538d22d916_09489753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_801189102660f538d22d916_09489753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<meta charset="utf-8"> 	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="Views/CSS/main.css" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz@0,9..40;1,9..40&display=swap" rel="stylesheet">
        <link rel="manifest" href="/MERGE_WEB_APP/Manifest.json" />
        <meta name="theme-color" content="#ff7d00">
        <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/7fb23658f3.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        
        <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>	
    <?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_1522011060660f538d23a0a1_93528582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1522011060660f538d23a0a1_93528582',
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
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'companies') {?>
                <?php if ($_smarty_tpl->tpl_vars['action']->value == 'add') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:../tpl/companiesActions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } else { ?>
            	    <?php $_smarty_tpl->_subTemplateRender("file:../tpl/companies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'mentions') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:../tpl/mLegaleContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
