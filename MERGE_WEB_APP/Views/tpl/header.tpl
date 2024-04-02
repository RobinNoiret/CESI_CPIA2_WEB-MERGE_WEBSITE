{* The header change it menu with the value of $user wich can have values none, student, pilote, admin *}

<header>
    <nav class="navbar">

        <a id="link_nav-logo" class="nav-logo" href="{$source}">
            <img id="nav-logo" class="nav-logo" src="Views/Assets/logo avec texte.png">
        </a>

        <ul {if $user eq 'Admin' || $user eq 'Pilote'}class="nav-links-big"{else}class="nav-links-small"{/if}>
                        <li><a href="{$source}">Accueil</a></li>
                        <li><a href="{$source|cat:'?page=internship'}">Trouver un stage</a></li>
                        <li><a href="{$source|cat:'?page=company'}">Trouver une entreprise</a></li>
            {if $user eq 'Admin'}
                {if $user neq 'Pilote'}
                        <li><a href="{$source|cat:'?page=pilote'}">Trouver un pilote</a></li>
                {/if}
                        <li><a href="{$source|cat:'?page=student'}">Trouver un étudiant</a></li>
            {/if}
        </ul>
        
        <a id="link_user-icon" class="user-icon" href="{$source|cat:$connecAction}">
            <img id="user-icon"src="Views/Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header>