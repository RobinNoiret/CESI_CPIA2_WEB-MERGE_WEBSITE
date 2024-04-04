<?php
/* Smarty version 3.1.36, created on 2024-04-04 22:47:51
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\offerTemplates\displayOffers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660f11f755b4f9_74510302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de909167c1d25ac6cdb1298a700aff01aa73d7cd' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\offerTemplates\\displayOffers.tpl',
      1 => 1712263657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f11f755b4f9_74510302 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="internship-details">
    <div class="internship-actions">
    </div>
    <div class="Title">
        <h2 class="h2-action">Trouver un stage</h2>
    </div>
    <div class="internship-search">
        <form action="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=search" method="post">
            <input type="submit" id="search-btn" class="CTA_secondaire" value="Rechercher">
        </form>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['user']->value != 'Student') {?>
        <div class="intership-button">
            <form id="addForm">
            <buttonbutton class="CTA_secondaire" action='<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=add'>Ajouter</button>
            </form>
        </div>
    <?php }?>
</div>
<div class="table">
    <div class="rows">
        <table>
            <thead>
                <tr id="internship-header-table" class="header-table">
                    <td id="header-title" class='title-column'>Offre de stage<td>
                    <td id="header-company" class='company-column'>Entreprise<td>
                    <td id="header-city" class='city-column'>Localisation<td>
                    <td id="header-descr" class='descr-column'>Description<td>
                    <td id="header-date" class='date-column'>Date de publication<td>
                    <td id="header-places" class='places-column'> Nombre de places<td>
                    <td id="header-open" class='open-column'><td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value != 'Student') {?><td id="header-modify" class='modify-Column'><td><?php }?>
                </tr>
            </thead>
            <thbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'elem');
$_smarty_tpl->tpl_vars['elem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elem']->value) {
$_smarty_tpl->tpl_vars['elem']->do_else = false;
?>
                <p></p>

                <tr>
                    <td class='title-column'><?php echo $_smarty_tpl->tpl_vars['elem']->value['title'];?>
<td>
                    <td class='company-column'><?php echo $_smarty_tpl->tpl_vars['elem']->value['companyName'];?>
<td>
                    <td class='city-column'><?php echo $_smarty_tpl->tpl_vars['elem']->value['address'];?>
<td>
                    <td class='descr-column'><?php echo $_smarty_tpl->tpl_vars['elem']->value['short_descr'];?>
<td>
                    <td class='date-column'><?php echo $_smarty_tpl->tpl_vars['elem']->value['publicationDate'];?>
<td>
                    <td class='places-column'><?php echo $_smarty_tpl->tpl_vars['elem']->value['placesNumber'];?>
<td>
                    <td class='open-column'><a class="CTA_secondaire" href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=displayOne&id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['ID'];?>
">Découvrir l'offre<a><td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value != 'Student') {?><td class='fa-solid fa-pen-to-square'><a href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=displayOne&id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['ID'];?>
"><a><td><?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </thbody>
        </table>
    </div>
    <div class="pagination">
    </div>
</div><?php }
}
