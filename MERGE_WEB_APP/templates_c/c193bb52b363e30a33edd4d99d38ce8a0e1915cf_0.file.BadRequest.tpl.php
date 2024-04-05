<?php
/* Smarty version 3.1.36, created on 2024-04-03 17:36:43
  from 'D:\Brieuc\CESI\A2_info\BLOCS\4. Développement web\Projet\CESI_CPIA2_WEB_PROJECT-1\MERGE_WEB_APP\Views\tpl\errors\BadRequest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660d778be3c8e4_27946211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c193bb52b363e30a33edd4d99d38ce8a0e1915cf' => 
    array (
      0 => 'D:\\Brieuc\\CESI\\A2_info\\BLOCS\\4. Développement web\\Projet\\CESI_CPIA2_WEB_PROJECT-1\\MERGE_WEB_APP\\Views\\tpl\\errors\\BadRequest.tpl',
      1 => 1712138964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d778be3c8e4_27946211 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 400</title>

    <link rel="stylesheet" href="Views/CSS/errors.css" />
</head>

<body id="Error400">
        <h1 id="h1_error"> Ooops !</h1>
        <h2 id="h2_error"> Bad Request </h2>
        <div class="error-picture"> 
            <img class="picture" src="Views/Assets/error400.png">
        </div>

        <div class="error-CTA">
            <a id="goHome" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">Retour à l'acceuil</a>
        </div>
</body>

</html>

<!-- Commentaires :
Remarques :
- lors de l'affichage via Appache, le style et l'image ne s'affiche pas

=> Piste de solution : le problème vient des liens.

--><?php }
}
