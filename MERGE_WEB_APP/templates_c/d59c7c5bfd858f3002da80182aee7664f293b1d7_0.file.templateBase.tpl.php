<?php
/* Smarty version 3.1.36, created on 2024-04-03 09:39:42
  from 'C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\templateBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660d07bef05612_83663614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd59c7c5bfd858f3002da80182aee7664f293b1d7' => 
    array (
      0 => 'C:\\Users\\Noiret\\Documents\\4 - Projets\\4.2 - Etudes\\4 - Développement WEB\\Site\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\templateBase.tpl',
      1 => 1712129548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/header.tpl' => 1,
    'file:../tpl/homeContent.tpl' => 1,
    'file:../tpl/connexionContent.tpl' => 1,
    'file:../tpl/footer.tpl' => 1,
  ),
),false)) {
function content_660d07bef05612_83663614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html> 
<html lang="fr"> 

    <head> 
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1778706826660d07beca0970_49844545', 'head');
?>

    </head> 

   	<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1236952101660d07bed5ecb8_47370741', 'body');
?>

    </body> 
</html> <?php }
/* {block 'head'} */
class Block_1778706826660d07beca0970_49844545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1778706826660d07beca0970_49844545',
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
class Block_1236952101660d07bed5ecb8_47370741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1236952101660d07bed5ecb8_47370741',
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
            <?php }?>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php
}
}
/* {/block 'body'} */
}
