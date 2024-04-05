<div class="stage-details">
    <div class="stage-actions">
            <!-- aletrnative à la div inférieur<div class="btn-close"><a href="">X</a></div> -->
            <div class="close">
            <a href="{$source}?page=internship&action=display">
                <i class="fa-solid fa-xmark"></i>
                </a>
            </div>
    </div>
    <div class="stage-title">
        <h2 class="h2-action">{$internshipTitle}</h2>
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
            <li><p class="small-input-offer">Date de publication : {$publicationDate}</p></li>
            <li><p class="small-input-offer">Base de rémunération : {$remuneration}</p></li>
            <li><p class="small-input-offer">Nombres de places : {$placesNumber}</p></li>
        </ul>
        <div class="details-wrapper">
            <div class="left-part">
                <div class="job-description">
                    <h3>Le Stage</h3>
                    <div class="description">
                        <h4>Descriptif du stage</h4>
                        <p class="textarea" id="descrArea">{$internshipDesc}</p>
                        </div>
                </div>
            </div>
            <div class="right-part">
                <div class="company-image">
                    <img src="Views/Assets/logo avec texte.png" alt="Logo d'une entreprise">
                </div>
                <div class="skills">
                    <h4>Compétences</h4>
                    <p  id="skillsArea" class="textarea" >{$internshipComp}</p>
                </div>
            </div>
        </div>
        {if $user neq 'Etudiant'}
        <div class="buttons">
            <ul class="btn-list-modify">
                {if $action eq 'change'}
                    <li><a class="CTA_secondaire" href='{$source}?page=internship&action=delete&id={$intershipID}'>Supprimer</a></li>
                {/if}
                <li><a type="submit" id="btn-save" class="CTA_secondaire" href='{$source}?page=internship&action=change&id={$intershipID}'>Modifier</a></li>
            </ul>
        </div>
        {/if}
    </div>
</div>