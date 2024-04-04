<div class="internship-details">
    <div class="internship-actions">
    </div>
    <div class="Title">
        <h2 class="h2-action">Trouver un stage</h2>
    </div>
    <div class="internship-search">
        <form action="{$source}?page=internship&action=search" method="post">
            <input type="submit" id="search-btn" class="CTA_secondaire" value="Rechercher">
        </form>
    </div>
    {if $user neq 'Student'}
        <div class="intership-button">
            <form id="addForm">
            <buttonbutton class="CTA_secondaire" action='{$source}?page=internship&action=add'>Ajouter</button>
            </form>
        </div>
    {/if}
</div>
<div class="table">
    <div class="rows">
        <table>
            {$firstLine = 0}
            <tr id="internship-header-table" class="header-table">
                <td id="header-title" class='title-column'>Offre de stage<td>
                <td id="header-company" class='company-column'>Entreprise<td>
                <td id="header-city" class='city-column'>Localisation<td>
                <td id="header-descr" class='descr-column'>Description<td>
                <td id="header-date" class='date-column'>Date de publication<td>
                <td id="header-places" class='places-column'> Nombre de places<td>
                <td id="header-open" class='open-column'><td>
                {if $user neq 'Student'}<td id="header-modify" class='modify-Column'><td>{/if}
            </tr>
            {foreach $content as $elem}
                <p></p>

                <tr>
                    <td class='title-column'>{$elem['title']}<td>
                    <td class='company-column'>{$elem['companyName']}<td>
                    <td class='city-column'>{$elem['address']}<td>
                    <td class='descr-column'>{$elem['short_descr']}<td>
                    <td class='date-column'>{$elem['publicationDate']}<td>
                    <td class='places-column'>{$elem['places']}<td>
                    <td class='open-column'><a class="CTA-secondaire" href="{$source}?page=internship&action=displayOne&id={$elem['id']}">Découvrir l'offre<a><td>
                    {if $user neq 'Student'}<td class='modify-Column'><img><a href="{$source}?page=internship&action=displayOne&id={$elem['id']}"><a><td>{/if}
                </tr>

            {/foreach}
        </table>
    </div>
    <div class="pagination">
    </div>
</div>