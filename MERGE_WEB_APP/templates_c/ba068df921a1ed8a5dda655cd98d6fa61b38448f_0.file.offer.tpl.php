<?php
/* Smarty version 3.1.36, created on 2024-04-04 14:36:26
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660e9ecac4ee17_60566871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba068df921a1ed8a5dda655cd98d6fa61b38448f' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\offer.tpl',
      1 => 1712234183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660e9ecac4ee17_60566871 (Smarty_Internal_Template $_smarty_tpl) {
?><form  action="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
if ($_smarty_tpl->tpl_vars['action']->value == 'change') {?>&id=<?php echo $_smarty_tpl->tpl_vars['intershipID']->value;
}?>" method="post">
<div class="stage-details">
    <div class="stage-actions">
            <div class="btn-close">X</div>
    </div>
    <div class="stage-title">
        <textarea id="internshipTitle" class="h2-action" value="<?php echo $_smarty_tpl->tpl_vars['internshipTitle']->value;?>
" placeholder="Stage - Nom de stage" name="internshipTitle"></textarea>
    </div>
    <div class="company-name">
    <input type="hidden" name="companyID" value="<?php echo $_smarty_tpl->tpl_vars['companyID']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>

    </div> 
</div>
<hr>
<div class="descr-block">
    <div class="details-list">
        <ul>
            <li><input type="number" name="remurenaration" id="" class="small-input-offer" value="<?php echo $_smarty_tpl->tpl_vars['remuneration']->value;?>
" placeholder="Base de rémunération"></li>
            <li><input type="number" name="placesNumber" id="" class="small-input-offer" value="<?php echo $_smarty_tpl->tpl_vars['placesNumber']->value;?>
" placeholder="Nombre de place"></li>
        </ul>
        <div class="details-wrapper">
            <div class="left-part">
                <div class="job-description">
                    <h3>Le Stage</h3>
                    <div class="description">
                        <h4>Descriptif du stage</h4>
                        <textarea name="desc-stage" id="descrArea" value="<?php echo $_smarty_tpl->tpl_vars['internshipDesc']->value;?>
" placeholder="Donner une description des missions et du contenu de l\'offre de stage ..."></textarea>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <div class="company-image">
                    <img src="Views/Assets/logo avec texte.png" alt="Logo d'une entreprise">
                </div>
                <div class="skills">
                    <h4>Compétences</h4>
                    <textarea name="competences" id="skillsArea" value="<?php echo $_smarty_tpl->tpl_vars['internshipComp']->value;?>
" placeholder="Compétence1, Compétence2, Compétence3 ..."></textarea>
                </div>
            </div>
        </div>
        <div class="buttons">
            <ul class="btn-list-modify">
                <?php if ($_smarty_tpl->tpl_vars['action']->value == 'change') {?>
                    <li><button class="btn-delete" href='<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['intershipID']->value;?>
'>Supprimer</button></li>
                <?php }?>
                <li><input type="submit" id="btn-save" class="CTA_secondaire" value="Enregistrer"></li>
            </ul>
        </div>
    </div>
</div>
</form><?php }
}
