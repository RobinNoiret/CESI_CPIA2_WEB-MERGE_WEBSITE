<form  action="{$source}?page=internship&action={$action}{if $action eq 'change'}&id={$intershipID}{/if}" method="post">
<div class="stage-details">
    <div class="stage-actions">
            <div class="btn-close">X</div>
            <!--<div class="close">
                <i class="fa-solid fa-xmark"></i>
            </div>  -->
    </div>
    <div class="stage-title">
        <textarea id="internshipTitle" class="h2-action" placeholder="Stage - Nom de stage" name="internshipTitle">{$internshipTitle}</textarea>
    </div>
    <div class="company-name">
    <input type="hidden" name="companyID" value="{$companyID}">
        {$companyName} - {$companyAddress}
    </div> 
</div>
<hr>
<div class="descr-block">
    <div class="details-list">
        <ul class="data-list">
            <li><input type="number" name="remuneration" id="" class="small-input-offer" value="{$remuneration}" placeholder="Base de rémunération"></li>
            <li><input type="number" name="placesNumber" id="" class="small-input-offer" value="{$placesNumber}" placeholder="Nombre de place"></li>
        </ul>
        <div class="details-wrapper">
            <div class="left-part">
                <div class="job-description">
                    <h3>Le Stage</h3>
                    <div class="description">
                        <h4>Descriptif du stage</h4>
                        {if $action neq 'add'}
                        <textarea name="internshipDesc" class="textarea" id="descrArea" placeholder="Donner une description des missions et du contenu de l'offre de stage ...">{$internshipDesc}</textarea>
                        {else}

                        {/if}
                        </div>
                </div>
            </div>
            <div class="right-part">
                <div class="company-image">
                    <img src="Views/Assets/logo avec texte.png" alt="Logo d'une entreprise">
                </div>
                <div class="skills">
                    <h4>Compétences</h4>
                    <textarea name="skills" id="skillsArea" class="textarea" placeholder="Compétence1, Compétence2, Compétence3 ...">{$internshipComp}</textarea>
                </div>
            </div>
        </div>
        <div class="buttons">
            <ul class="btn-list-modify">
                {if $action eq 'change'}
                    <li><button class="CTA_secondaire" formaction='{$source}?page=internship&action=delete&id={$intershipID}'>Supprimer</button></li>
                {/if}
                <li><input type="submit" id="btn-save" class="CTA_secondaire" value="Enregistrer"></li>
            </ul>
        </div>
    </div>
</div>
</form>