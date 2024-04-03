<?php
/* Smarty version 3.1.36, created on 2024-04-03 11:54:10
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\modification\modificationOffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660d27422cd4d3_69202188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '045f68b69bf3c57dc0c31d2aa73df7b310eec905' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\modification\\modificationOffre.tpl',
      1 => 1712137732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d27422cd4d3_69202188 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="stage-details">
    <div class="stage-title">
        <textarea name="" id="" value="<?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholderTitle']->value;?>
"></textarea>
    </div>
    <div class="stage-actions">
            <div class="btn-close">X</div>
    </div>
    <div class="company-name">
        <?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>

    </div> 
</div>
<hr>
<div class="descr-block">
    <div class="details-list">
        <ul>
            <li><textarea name="" id="" class=""></textarea></li>
            <!-- A duppliquer ou supprimer avec une classe unique -->
        </ul>
        <div class="details-wrapper">
            <div class="job-description">
                <h3>Le Stage</h3>
                <div class="description">
                    <h4>Descriptif du stage</h4>
                    <textarea name="desc-stage" id="" cols="80" rows="20"></textarea>
                </div>
            </div>
            <div class="company-image">
                <img src="" alt="">
            </div>
            <div class="skills">
                <h4>Compétences</h4>
                <textarea name="competences" id="" cols="40" rows="10"></textarea>
            </div>
        </div>
        <div class="buttons">
            <ul class="btn-list-modify">
                <li><button class="btn-delete">Supprimer</button></li>
                <li><button class="btn-save">Enregistrer</button></li>
            </ul>
        </div>
    </div>
</div><?php }
}
