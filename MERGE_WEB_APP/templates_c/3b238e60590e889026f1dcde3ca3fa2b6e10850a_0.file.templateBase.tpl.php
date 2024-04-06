<?php
<<<<<<< HEAD
/* Smarty version 3.1.36, created on 2024-04-02 16:27:50
=======
/* Smarty version 3.1.36, created on 2024-04-05 09:38:39
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\templateBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
<<<<<<< HEAD
  'unifunc' => 'content_660c15e61e6d36_39199738',
=======
  'unifunc' => 'content_660faa7f4cb7b0_17362200',
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b238e60590e889026f1dcde3ca3fa2b6e10850a' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\templateBase.tpl',
<<<<<<< HEAD
      1 => 1712063760,
=======
      1 => 1712302395,
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/header&footer/header.tpl' => 1,
    'file:../tpl/homeContent.tpl' => 1,
    'file:../tpl/connexionContent.tpl' => 1,
<<<<<<< HEAD
    'file:../tpl/header&footer/footer.tpl' => 1,
  ),
),false)) {
function content_660c15e61e6d36_39199738 (Smarty_Internal_Template $_smarty_tpl) {
=======
    'file:../tpl/companiesActions.tpl' => 1,
    'file:../tpl/companies.tpl' => 1,
    'file:../tpl/mLegaleContent.tpl' => 1,
    'file:Views/tpl/offerTemplates/modifyOffer.tpl' => 1,
    'file:Views/tpl/offerTemplates/displayOffer.tpl' => 1,
    'file:Views/tpl/offerTemplates/displayOffers.tpl' => 1,
    'file:../tpl/footer.tpl' => 1,
  ),
),false)) {
function content_660faa7f4cb7b0_17362200 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html> 
<html lang="fr"> 

    <head> 
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1562383917660c15e61da1c6_34206803', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1265135982660faa7f4b5e74_70400671', 'head');
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
?>

    </head> 

   	<body>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1497944695660c15e61de854_46732862', 'body');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_359708952660faa7f4bbfe6_08680182', 'body');
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
?>

        
    </body> 
</html> <?php }
/* {block 'head'} */
<<<<<<< HEAD
class Block_1562383917660c15e61da1c6_34206803 extends Smarty_Internal_Block
=======
class Block_1265135982660faa7f4b5e74_70400671 extends Smarty_Internal_Block
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1562383917660c15e61da1c6_34206803',
=======
    0 => 'Block_1265135982660faa7f4b5e74_70400671',
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<meta charset="utf-8"> 	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#ff7d00">

        <link rel="stylesheet" href="Views/CSS/main.css" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz@0,9..40;1,9..40&display=swap" rel="stylesheet">
        <link rel="manifest" href="Manifest.json" />
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
<<<<<<< HEAD
class Block_1497944695660c15e61de854_46732862 extends Smarty_Internal_Block
=======
class Block_359708952660faa7f4bbfe6_08680182 extends Smarty_Internal_Block
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
{
public $subBlocks = array (
  'body' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1497944695660c15e61de854_46732862',
=======
    0 => 'Block_359708952660faa7f4bbfe6_08680182',
>>>>>>> 48d42b46cbef886bb7e782af6281967eec1e71aa
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php $_smarty_tpl->_subTemplateRender("file:../tpl/header&footer/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'internship') {?>
                <?php if ($_smarty_tpl->tpl_vars['action']->value == 'change' || $_smarty_tpl->tpl_vars['action']->value == 'add') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:Views/tpl/offerTemplates/modifyOffer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'displayOne') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:Views/tpl/offerTemplates/displayOffer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("file:Views/tpl/offerTemplates/displayOffers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            <?php }?>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../tpl/header&footer/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        <?php echo '<script'; ?>
 src="Views/JS/header.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="Views/JS/form_crea.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'body'} */
}
