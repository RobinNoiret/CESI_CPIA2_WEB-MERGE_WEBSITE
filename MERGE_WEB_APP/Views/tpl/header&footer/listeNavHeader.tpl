                    <li><a href="{$source}">Accueil</a></li>
                    <li><a href="#.html">Trouver un stage</a></li>
                    <li><a href="#.html">Trouver une entreprise</a></li>
{if $user eq 'Admin'}
    {if $user neq 'Pilote'}
                    <li><a href="#.html">Trouver un pilote</a></li>
    {/if}
                    <li><a href="#.html">Trouver un étudiant</a></li>
{/if}