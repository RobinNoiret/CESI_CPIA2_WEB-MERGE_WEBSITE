
<div class="custom-search-container">
    <h1 class="custom-title">Liste des entreprises</h1>
    <div class="form-content">
        <form action="{$source}?page=company" method="post" class="custom-search">
            <div class="input-container">
                <label for="companyID">ID de l'entreprise</label>
                <input type="text" id="companyID" name="companyID" class="custom-input" placeholder="Entrez l'ID de l'entreprise">
            </div>
            <div class="input-container">
                <label for="companyName">Nom de l'entreprise</label>
                <input type="text" id="companyName" name="companyName" class="custom-input" placeholder="Entrez le nom de l'entreprise">
                </div>
            <div class="input-container">
                <label for="activityArea">Secteur d'activité</label>
                <input type="text" id="activityArea" name="activityArea" class="custom-input" placeholder="Entrez le secteur d'activité">
            </div>
            <button type="submit" name="search" class="CTA_secondaire">Rechercher</button>
        </form>
        <div class="add-button">
            {if $user eq 'Admin' || $user eq 'Pilote'}
                <a href="{$source}?page=company&action=add" class="CTA_secondaire">Ajouter une entreprise</a>
            {/if}
        </div>
    </div>
</div>



<div class="table-container">

    <table>
        <thead>
            <tr>
                <th>ID de l'entreprise</th>
                <th>Nom de l'entreprise</th>
                <th>Secteur d'activité</th>
                <th>Localités</th>
                <th class="center">Nombre de candidats</th>
                <th class="center">Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach $companies as $company}

                <tr>
                    <td>{$company.companyID}</td>
                    <td>{$company.companyName}</td>
                    <td>{$company.activityArea}</td>
                    <td>{$company.localities}</td>
                    <td class="center">{$company.applicantCount}</td>
                    <td class="modify">
                        <a href="{$source}?page=company&action=edit&companyID={$company.companyID}" class="fa-solid fa-pen-to-square"></a>
                    </td>
                </tr>

            {/foreach}
        </tbody>
    </table>

    

</div>


