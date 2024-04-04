<?php
/* Smarty version 3.1.36, created on 2024-04-04 22:31:26
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\homeContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_660f0e1e8929e7_11758692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdb50ddc8672c40abf88474b37bb8950562c621a' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\homeContent.tpl',
      1 => 1712261727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f0e1e8929e7_11758692 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="landing">

    <!-- ___________________________________________ Image de fond ___________________________________________ -->

    <div id="landing-pictureBG">
        <img id="picture" src="Views/Assets/Picture backgroundhome-firstpicture-min.png">
    </div>

    <!-- ____________________________________________ Bloc stats ____________________________________________ -->

    <div class="landing-stats">
        <div class="stats-block" id="stats-students">
            <div class="stats-number"><?php echo $_smarty_tpl->tpl_vars['studentsNumber']->value;?>
</div>
            <div class="stats-text">Etudiants</div>
        </div>

        <div class="stats-block" id="stats-companies">
            <div class="stats-number"><?php echo $_smarty_tpl->tpl_vars['companiesNumber']->value;?>
</div>
            <div class="stats-text">Entreprises</div>
        </div>

        <div class="stats-block" id="stats-pilotes">
            <div class="stats-number"><?php echo $_smarty_tpl->tpl_vars['pilotesNumber']->value;?>
</div>
            <div class="stats-text">Pilotes</div>
        </div>
    </div>

    <!-- __________________________________________ Bloc domaines __________________________________________ -->

    <div class="landing-domains">
        <h2>Quels domaines ?</h2>

        <div class="domains">
            <div class="domain" id="domain-IT">
                <a href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).('?page=internship&action=research&domain=IT');?>
">
                <img class="domain-pictures" src="Views/Assets/TechnologyIT.png">
                </a>
                <h4 class="domain-title">IT</h4>
            </div>

            <div class="domain" id="domain-services">
                <a href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).('?page=internshi&action=researchp&domain=Services');?>
">
                <img class="domain-pictures" src="Views/Assets/Serviceservice.png">
                </a>
                <h4 class="domain-title">Services</h4>
            </div>

            <div class="domain" id="domain-Health">
                <a href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).('?page=internship&action=research&domain=Santé');?>
">
                <img class="domain-pictures" src="Views/Assets/Health Care - Health Researchhealth.png">
                </a>
                <h4 class="domain-title">Santé</h4>
            </div>

            <div class="domain" id="domain-Finances">
                <a href="<?php echo ($_smarty_tpl->tpl_vars['source']->value).('?page=internship&action=research&domain=Finances');?>
">
                <img class="domain-pictures" src="Views/Assets/Business Planbusiness.svg">
                </a>
                <h4 class="domain-title">Finances</h4>
            </div>
        </div>
    </div>

    <!-- ________________________________________ Bloc articles __________________________________________ -->

    <div class="landing-articles">
        <article class="articles-pict_right">
            <div class="articles-text">
                <h4>Explorez et trouver votre voie</h4>

                <p>
                    Plongez dans des fiches métiers détaillées pour explorer les différentes professions. Apprenez-en plus
                    sur les compétences requises, les responsabilités et les opportunités de carrière dans chaque domaine. 
                    Que vous soyez passionné par le développement informatique, le marketing ou la finance, ces fiches vous 
                    guideront vers le métier qui vous correspond le mieux.
                </p>

                <a class="CTA_secondaire" href="https://www.emploi-store.fr/portail/parcours-conseils/choisisFuturMetier/fiche-metier">
                    Découvrir les fiches métiers
                </a>
            </div>

            <img class="article-picture" src="Views/Assets/Placeholder imageexplorez et trouver votre voie.png">

        </article>

        <article class="articles-pict_left">
            <img class="article-picture" src="Views/Assets/Placeholder imagedéveloppez votre réseau.png">
            
            <div class="articles-text">
                <h4>Développez votre réseau</h4>

                <p>
                    Restez à l’affût des événements professionnels ! Salons de l’emploi, conférences, webinaires… Ces occasions
                    sont idéales pour rencontrer des employeurs, élargir votre réseau et découvrir des opportunités de stage ou
                    d’alternance. Préparez votre CV, prévoyez des questions pertinentes et soyez prêt à briller lors de ces rencontres.
                </p>

                <a class="CTA_secondaire" href="https://www.nsalons.com/entreprises/france/">
                    Découvrir les évènements
                </a>
            </div>
            <img class="article-picture-responsive" src="Views/Assets/Placeholder imagedéveloppez votre réseau.png">
        </article>

        <article class="articles-pict_right">
            <div class="articles-text">
                <h4>Préparez-vous !</h4>

                <p>
                    L’entretien est une étape cruciale dans votre recherche d’emploi. Préparez-vous en amont : révisez vos compétences,
                    entraînez-vous à répondre aux questions courantes, et travaillez sur votre présentation personnelle. Montrez votre
                    motivation, votre confiance et votre intérêt pour l’entreprise. Vous serez ainsi prêt à convaincre les recruteurs
                    que vous êtes le candidat idéal !
                </p>

                <a class="CTA_secondaire" href="https://www.welcometothejungle.com/fr/articles/preparer-entretien-stage">
                    Découvrir comment vous préparez
                </a>
            </div>

            <img class="article-picture" src="Views/Assets/Placeholder imagepréparez vous.png">
        </article>

    </div>

</div><?php }
}
