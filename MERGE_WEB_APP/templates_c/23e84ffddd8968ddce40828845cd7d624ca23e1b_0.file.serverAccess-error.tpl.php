<?php
/* Smarty version 3.1.36, created on 2024-03-27 21:10:02
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\errors\serverAccess-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66047d1a613094_82771667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23e84ffddd8968ddce40828845cd7d624ca23e1b' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\errors\\serverAccess-error.tpl',
      1 => 1711570012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66047d1a613094_82771667 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>

    <link rel="stylesheet" href="CSS/style_error.css" />
</head>

<body id="Error404">
        <h1> Ooops !</h1>
        <h2> Erreur d'accès au server...</h2>
        <div class="error-picture"> 
            <img class="picture" src="Assets/404 error.png">
        </div>

        <div class="error-CTA">
            <a id="goHome" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
">Retour à l'acceuil</a>
        </div>
</body>

</html><?php }
}
