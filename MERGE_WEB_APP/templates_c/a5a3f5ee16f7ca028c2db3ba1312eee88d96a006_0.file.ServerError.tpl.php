<?php
/* Smarty version 3.1.36, created on 2024-04-03 23:06:55
  from 'D:\Brieuc\CESI\A2_info\BLOCS\4. Développement web\Projet\CESI_CPIA2_WEB_PROJECT-1\MERGE_WEB_APP\Views\tpl\errors\ServerError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660dc4efc2bff7_55975885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a3f5ee16f7ca028c2db3ba1312eee88d96a006' => 
    array (
      0 => 'D:\\Brieuc\\CESI\\A2_info\\BLOCS\\4. Développement web\\Projet\\CESI_CPIA2_WEB_PROJECT-1\\MERGE_WEB_APP\\Views\\tpl\\errors\\ServerError.tpl',
      1 => 1712138964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660dc4efc2bff7_55975885 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 500</title>

    <link rel="stylesheet" href="Views/CSS/errors.css" />

</head>

<body id="Error500">
        <h1 id="h1_error"> Ooops !</h1>
        <h2 id="h2_error"> Le serveur nous a lâché</h2>
        <div class="error-picture"> 
            <img class="picture" src="Views/Assets/error500.png">
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
