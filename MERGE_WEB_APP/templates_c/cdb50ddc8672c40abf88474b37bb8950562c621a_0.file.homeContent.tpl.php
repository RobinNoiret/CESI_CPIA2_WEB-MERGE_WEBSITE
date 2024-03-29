<?php
/* Smarty version 3.1.36, created on 2024-03-29 17:38:40
  from 'C:\Users\flore\OneDrive\Documents\Cours\Cesi\A2\04 - Dev Web\Projet\Projet-git-part\CESI_CPIA2_WEB_PROJECT\MERGE_WEB_APP\Views\tpl\homeContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6606ee90c3e9b4_91741917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdb50ddc8672c40abf88474b37bb8950562c621a' => 
    array (
      0 => 'C:\\Users\\flore\\OneDrive\\Documents\\Cours\\Cesi\\A2\\04 - Dev Web\\Projet\\Projet-git-part\\CESI_CPIA2_WEB_PROJECT\\MERGE_WEB_APP\\Views\\tpl\\homeContent.tpl',
      1 => 1711730319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606ee90c3e9b4_91741917 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="landing">

    <!-- ___________________________________________ Image de fond ___________________________________________ -->

    <div id="landing-pictureBG">
        <img id="picture" src="Views/Assets/Picture backgroundhome-firstpicture.png">
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
                <a href="error-accèsInternet.html">
                <img class="domain-pictures" src="Views/Assets/TechnologyIT.png">
                </a>
                <h4 class="domain-title">IT</h4>
            </div>

            <div class="domain" id="domain-services">
                <a href="error-accèsServeur.html">
                <img class="domain-pictures" src="Views/Assets/Serviceservice.png">
                </a>
                <h4 class="domain-title">Services</h4>
            </div>

            <div class="domain" id="domain-Health">
                <a href="error-FlorentSauvage.html">
                <img class="domain-pictures" src="Views/Assets/Health Care - Health Researchhealth.png">
                </a>
                <h4 class="domain-title">Santé</h4>
            </div>

            <div class="domain" id="domain-Finances">
                <a href="error-pageDoesntExist.html">
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus egestas ex, id tempor sem maximus id. 
                    Quisque dignissim neque tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <a class="CTA_secondaire" href="#">Découvrir les fiches métiers</a>
            </div>

            <img class="article-picture" src="Views/Assets/Placeholder imageexplorez et trouver votre voie.png">

        </article>

        <article class="articles-pict_left">
            <img class="article-picture" src="Views/Assets/Placeholder imagedéveloppez votre réseau.png">
            
            <div class="articles-text">
                <h4>Développez votre réseau</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus egestas ex, id tempor sem maximus id. 
                    Quisque dignissim neque tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <a class="CTA_secondaire" href="#">Découvrir les évènements</a>
            </div>
        </article>

        <article class="articles-pict_right">
            <div class="articles-text">
                <h4>Préparez-vous !</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus egestas ex, id tempor sem maximus id. 
                    Quisque dignissim neque tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <a class="CTA_secondaire" href="#">Découvrir comment vous préparez</a>
            </div>

            <img class="article-picture" src="Views/Assets/Placeholder imagepréparez vous.png">
        </article>

    </div>

</div><?php }
}
