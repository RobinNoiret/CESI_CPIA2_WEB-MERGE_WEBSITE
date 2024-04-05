<?php
/* Smarty version 3.1.36, created on 2024-04-05 03:28:42
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\companies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660f53ca064c50_55517087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06ab57a8ae41c292a1d5f695e211f9e6d4fa2789' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\companies.tpl',
      1 => 1712276842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f53ca064c50_55517087 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Liste des entreprises</h1>

<div class="search-container">
    <form action="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=company" method="post">
        <input type="text" name="companyID" placeholder="Entrez l'ID de l'entreprise">
        <input type="text" name="companyName" placeholder="Entrez le nom de l'entreprise">
        <input type="text" name="activityArea" placeholder="Entrez le secteur d'activité">
        <button type="submit" name="search">Rechercher</button>
    </form>
    <a href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=company&action=add" class="add-company-button">Ajouter une entreprise</a>
</div>

<div class="table-container">

    <table>
        <thead>
            <tr>
                <th>ID de l'entreprise</th>
                <th>Nom de l'entreprise</th>
                <th>Secteur d'activité</th>
                <th>Localités</th>
                <th>Nombre de candidats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>

                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['company']->value['companyID'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['company']->value['companyName'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['company']->value['activityArea'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['company']->value['localities'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['company']->value['applicantCount'];?>
</td>
                    <td class="modify">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=company&action=edit&companyID=<?php echo $_smarty_tpl->tpl_vars['company']->value['companyID'];?>
" class="fa-solid fa-pen-to-square"></a>
                    </td>
                    <td class="delete">
                    </td>
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

</div>


<?php }
}
