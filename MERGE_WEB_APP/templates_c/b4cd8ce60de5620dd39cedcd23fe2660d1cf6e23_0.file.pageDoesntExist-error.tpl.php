<?php
/* Smarty version 3.1.36, created on 2024-04-01 10:58:57
  from 'C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\errors\pageDoesntExist-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660a77514c79e7_52388000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4cd8ce60de5620dd39cedcd23fe2660d1cf6e23' => 
    array (
      0 => 'C:\\Users\\Noiret\\Documents\\4 - Projets\\4.2 - Etudes\\4 - Développement WEB\\Site\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\errors\\pageDoesntExist-error.tpl',
      1 => 1711800162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660a77514c79e7_52388000 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 406</title>

    <link rel="stylesheet" href="Views/CSS/main.css" />
</head>

<body id="Error406">
        <h1> Ooops !</h1>
        <h2> La page n'existe pas </h2>
        <div class="error-picture"> 
            <img class="picture" src="Views/Assets/error406.png">
        </div>

        <div class="error-CTA">
            <a id="goHome" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">Retour à l'acceuil</a>
        </div>
</body>

</html><?php }
}
