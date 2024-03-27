{* The header change it menu with the value of $user wich can have values none, student, pilote, admin *}

<header>
    <nav class="navbar">

        <a href="{$source}">
            <img id="nav-logo" src="Assets/logo avec texte.png">
        </a>

        <ul class="nav-links">
                        <li><a href="{$source}l">Accueil</a></li>
                        <li><a href="#.html">Trouver un stage</a></li>
                        <li><a href="#.html">Trouver une entreprise</a></li>
            {if $user eq 'admin'}
                {if $user neq 'pilote'}
                        <li><a href="#.html">Trouver un pilote</a></li>
                {/if}
                        <li><a href="#.html">Trouver un étudiant</a></li>
            {/if}
        </ul>
        
        <a href="{$source|cat:"?page=connexion"}">
            <img src="Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header>