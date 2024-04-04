
<h1>Liste des entreprises</h1>

<div class="search-container">
    <form action="{$source}?page=company" method="post">
        <input type="text" name="companyID" placeholder="Entrez l'ID de l'entreprise">
        <button type="submit" name="search">Rechercher</button>
    </form>
</div>

<div class="table-container">

    <table>
        <thead>
            <tr>
                <th>ID de l'entreprise</th>
                <th>Nom de l'entreprise</th>
                <th>Secteur d'activité</th>
                <th>Localités</th>
                <th>Nombre de candidats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach $companies as $company}

                <tr>
                    <td>{$company.companyID}</td>
                    <td>{$company.companyName}</td>
                    <td>{$company.activityArea}</td>
                    <td>{$company.localities}</td>
                    <td>{$company.applicantCount}</td>
                    <td><a href="{$source}?page=company&action=edit&companyID={$company.companyID}">Modifier</td>
                </tr>
            
            {/foreach}
        </tbody>
    </table>

</div>

