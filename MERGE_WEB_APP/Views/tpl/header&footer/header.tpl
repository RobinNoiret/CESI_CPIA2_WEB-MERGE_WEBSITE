{* The header change it menu with the value of $user wich can have values none, student, pilote, admin *}

<header>
    <nav id="navbar" {if $user eq 'Admin' || $user eq 'Pilote'}class="navbar-big"{else}class="navbar-small"{/if} > 
        <div id="scrolling-menu-header" class="scrolling-menu" >
            <
            <a id="link_nav-logo" class="nav-logo" href="{$source}">
                <img id="nav-menu-header" class="nav-menu" src="Views/Assets/logo avec texte.png">
            </a>
        </div>

        <a id="link_nav-logo" class="nav-logo" href="{$source}">
            <img id="nav-logo" class="nav-logo" src="Views/Assets/logo avec texte.png">
        </a>

        {include "../header&footer/listeNavHeader.tpl"}
        
        <a id="link_user-icon" class="user-icon" href="{$source|cat:$connecAction}">
            <img id="user-icon"src="Views/Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header>