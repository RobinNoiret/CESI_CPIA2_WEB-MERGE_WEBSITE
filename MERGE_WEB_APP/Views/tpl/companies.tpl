
<h1>Liste des entreprises</h1>

<div class="search-container">
    <form action="{$source}?page=company" method="post">
        <input type="text" name="companyID" placeholder="Entrez l'ID de l'entreprise">
        <input type="text" name="companyName" placeholder="Entrez le nom de l'entreprise">
        <input type="text" name="activityArea" placeholder="Entrez le secteur d'activité">
        <button type="submit" name="search">Rechercher</button>
    </form>
    {if $user eq 'Admin' || $user eq 'Pilote'}
        <a href="{$source}?page=company&action=add" class="add-company-button">Ajouter une entreprise</a>
    {/if}
    <!-- Afficher le message de succès s'il existe -->
    {if isset($successMessage)}
        <div class="success-message">{$successMessage}</div>
    {/if}

    <!-- Afficher le message d'erreur s'il existe -->
    {if isset($errorMessage)}
        <div class="error-message">{$errorMessage}</div>
    {/if}
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


