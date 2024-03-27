{* The header change it menu with the value of $user wich can have values none, student, pilote, admin *}

<header>
    <nav class="navbar">
        <img id="nav-logo" src="Assets/logo avec texte.png">

        <ul class="nav-links">
                        <li><a href="index.html">Accueil</a></li>
            {if $user neq 'none' || $user neq ''}   {* Can be fonctionnal with the exception of an unset value *}
                        <li><a href="#.html">Trouver un stage</a></li>
                        <li><a href="#.html">Trouver une entreprise</a></li>
                {if $user eq 'admin'}
                    {if $user neq 'pilote'}
                        <li><a href="#.html">Trouver un pilote</a></li>
                    {/if}
                        <li><a href="#.html">Trouver un étudiant</a></li>
                {/if}
            {/if}
        </ul>

        <img src="Assets/user-circle.svg" alt="User icon" class="user-icon">
    </nav>
</header>