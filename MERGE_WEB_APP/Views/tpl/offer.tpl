<form  action="{$source}?page=internship&action={$action}{if $action eq 'change'}&id={$intershipID}{/if}" method="post">
<div class="stage-details">
    <div class="stage-actions">
            <div class="btn-close">X</div>
    </div>
    <div class="stage-title">
        <textarea id="internshipTitle" class="h2-action" value="{$internshipTitle}" placeholder="Stage - Nom de stage" name="internshipTitle"></textarea>
    </div>
    <div class="company-name">
    <input type="hidden" name="companyID" value="{$companyID}">
        {$companyName}
    </div> 
</div>
<hr>
<div class="descr-block">
    <div class="details-list">
        <ul>
            <li><input type="number" name="remurenaration" id="" class="small-input-offer" value="{$remuneration}" placeholder="Base de rémunération"></li>
            <li><input type="number" name="placesNumber" id="" class="small-input-offer" value="{$placesNumber}" placeholder="Nombre de place"></li>
        </ul>
        <div class="details-wrapper">
            <div class="left-part">
                <div class="job-description">
                    <h3>Le Stage</h3>
                    <div class="description">
                        <h4>Descriptif du stage</h4>
                        <textarea name="desc-stage" id="descrArea" value="{$internshipDesc}" placeholder="Donner une description des missions et du contenu de l\'offre de stage ..."></textarea>
                    </div>
                </div>
            </div>
            <div class="right-part">
                <div class="company-image">
                    <img src="Views/Assets/logo avec texte.png" alt="Logo d'une entreprise">
                </div>
                <div class="skills">
                    <h4>Compétences</h4>
                    <textarea name="competences" id="skillsArea" value="{$internshipComp}" placeholder="Compétence1, Compétence2, Compétence3 ..."></textarea>
                </div>
            </div>
        </div>
        <div class="buttons">
            <ul class="btn-list-modify">
                {if $action eq 'change'}
                    <li><button class="btn-delete" href='{$source}?page=internship&action=delete&id={$intershipID}'>Supprimer</button></li>
                {/if}
                <li><input type="submit" id="btn-save" class="CTA_secondaire" value="Enregistrer"></li>
            </ul>
        </div>
    </div>
</div>
</form>