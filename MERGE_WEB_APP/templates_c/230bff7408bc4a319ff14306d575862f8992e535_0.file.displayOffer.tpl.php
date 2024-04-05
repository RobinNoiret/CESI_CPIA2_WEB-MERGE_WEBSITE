<?php
/* Smarty version 3.1.36, created on 2024-04-05 02:24:12
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\offerTemplates\displayOffer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660f44ac082560_12203953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '230bff7408bc4a319ff14306d575862f8992e535' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\offerTemplates\\displayOffer.tpl',
      1 => 1712276645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f44ac082560_12203953 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="stage-details">
    <div class="stage-actions">
            <!-- aletrnative à la div inférieur<div class="btn-close"><a href="">X</a></div> -->
            <div class="close">
            <a href="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=display">
                <i class="fa-solid fa-xmark"></i>
                </a>
            </div>
    </div>
    <div class="stage-title">
        <h2 class="h2-action"><?php echo $_smarty_tpl->tpl_vars['internshipTitle']->value;?>
</h2>
    </div>
    <div class="company-name">
    <input type="hidden" name="companyID" value="<?php echo $_smarty_tpl->tpl_vars['companyID']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyAddress']->value;?>

    </div> 
</div>
<hr>
<div class="descr-block">
    <div class="details-list">
        <ul class="data-list">
            <li><p class="small-input-offer">Date de publication : <?php echo $_smarty_tpl->tpl_vars['publicationDate']->value;?>
</p></li>
            <li><p class="small-input-offer">Base de rémunération : <?php echo $_smarty_tpl->tpl_vars['remuneration']->value;?>
</p></li>
            <li><p class="small-input-offer">Nombres de places : <?php echo $_smarty_tpl->tpl_vars['placesNumber']->value;?>
</p></li>
        </ul>
        <div class="details-wrapper">
            <div class="left-part">
                <div class="job-description">
                    <h3>Le Stage</h3>
                    <div class="description">
                        <h4>Descriptif du stage</h4>
                        <p class="textarea" id="descrArea"><?php echo $_smarty_tpl->tpl_vars['internshipDesc']->value;?>
</p>
                        </div>
                </div>
            </div>
            <div class="right-part">
                <div class="company-image">
                    <img src="Views/Assets/logo avec texte.png" alt="Logo d'une entreprise">
                </div>
                <div class="skills">
                    <h4>Compétences</h4>
                    <p  id="skillsArea" class="textarea" ><?php echo $_smarty_tpl->tpl_vars['internshipComp']->value;?>
</p>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['user']->value != 'Etudiant') {?>
        <div class="buttons">
            <ul class="btn-list-modify">
                <?php if ($_smarty_tpl->tpl_vars['action']->value == 'change') {?>
                    <li><a class="CTA_secondaire" href='<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['intershipID']->value;?>
'>Supprimer</a></li>
                <?php }?>
                <li><a type="submit" id="btn-save" class="CTA_secondaire" href='<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
?page=internship&action=change&id=<?php echo $_smarty_tpl->tpl_vars['intershipID']->value;?>
'>Modifier</a></li>
            </ul>
        </div>
        <?php }?>
    </div>
</div><?php }
}
