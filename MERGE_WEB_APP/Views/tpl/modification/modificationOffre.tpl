<form class="stage-details" action="{$source}?page=internship&action=displayOne&id={$id}" method="post">
    <div class="stage-title">
        <textarea name="" id="" value="{$internshipTitle}" placeholder="{$placeholderTitle}"></textarea>
    </div>
    <div class="stage-actions">
            <div class="btn-close">X</div>
    </div>
    <div class="company-name">
        {$companyName}
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
                <li><button class="btn-delete" href='{$source}?page=internship&action=delete&id={$id}'>Supprimer</button></li>
                <li><input type="submit" id="btn-save" class="CTA_secondaire">Enregistrer</button></li>
            </ul>
        </div>
    </div>
</form>