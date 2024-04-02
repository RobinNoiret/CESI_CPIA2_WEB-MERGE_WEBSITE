<?php
/* Smarty version 3.1.36, created on 2024-04-02 13:50:55
  from 'C:\Users\Noiret\Documents\4 - Projets\4.2 - Etudes\4 - Développement WEB\Site\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\errors\BadRequest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660bf11fbe00f6_34211397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61974f5d306814ad9f2d2f9e521a9e1673f5c6fd' => 
    array (
      0 => 'C:\\Users\\Noiret\\Documents\\4 - Projets\\4.2 - Etudes\\4 - Développement WEB\\Site\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\errors\\BadRequest.tpl',
      1 => 1712057643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660bf11fbe00f6_34211397 (Smarty_Internal_Template $_smarty_tpl) {
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
