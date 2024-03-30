{* The header change it menu with the value of $user wich can have values none, student, pilote, admin *}

<header>
    <nav class="navbar">

        <a id="link_nav-logo" class="nav-logo" href="{$source}">
            <img id="nav-logo" class="nav-logo" src="Views/Assets/logo avec texte.png">
        </a>

        <ul {if $user eq 'admin' || $user eq 'pilote'}class="nav-links-big"{else}class="nav-links-small"{/if}>
                        <li><a href="{$source}">Accueil</a></li>
                        <li><a href="#.html">Trouver un stage</a></li>
                        <li><a href="#.html">Trouver une entreprise</a></li>
            {if $user eq 'admin'}
                {if $user neq 'pilote'}
                        <li><a href="#.html">Trouver un pilote</a></li>
                {/if}
                        <li><a href="#.html">Trouver un étudiant</a></li>
            {/if}
        </ul>
        
        <a id="link_user-icon" class="user-icon" href="{$source|cat:$connecAction}">
            <img id="user-icon"src="Views/Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header>