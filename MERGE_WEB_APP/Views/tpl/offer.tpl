<form  action="{$source}?page=internship&action={$action}{if $action eq change}&id={$intershipID}{/if}" method="post">
<div class="stage-details">
    <div class="stage-title">
        <textarea id="internshipTitle" class="h2-color-action" value="{$internshipTitle}" placeholder="{$placeholderTitle}" name="internshipTitle"></textarea>
    </div>
    <div class="stage-actions">
            <div class="btn-close">X</div>
    </div>
    <div class="company-name">
    <input type="hidden" name="companyID" value="{$companyID}">
        {$companyName}
    </div> 

<hr>
<div class="descr-block">
    <div class="details-list">
        <ul>
            {* <li><textarea name="" id="" class=""></textarea></li> *}
            <!-- A duppliquer ou supprimer avec une classe unique -->
        </ul>
        <div class="details-wrapper">
            <div class="job-description">
                <h3>Le Stage</h3>
                <div class="description">
                    <h4>Descriptif du stage</h4>
                    <textarea name="desc-stage" id="" value="{$internshipDesc}" placeholder="{$placeholderDesc}"></textarea>
                </div>
            </div>
            <div class="company-image">
                <img src="" alt="">
            </div>
            <div class="skills">
                <h4>Compétences</h4>
                <textarea name="competences" id="" value="{$internshipComp}" placeholder="{$placeholderComp}"></textarea>
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