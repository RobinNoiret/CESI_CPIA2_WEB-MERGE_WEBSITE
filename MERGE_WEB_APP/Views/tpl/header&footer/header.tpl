{* The header change it menu with the value of $user wich can have values none, student, pilote, admin *}

<header>
    <nav id="navbar-header" {if $user eq 'Admin' || $user eq 'Pilote'}class="navbar big-link"{else}class="navbar small-link"{/if} > 
        <div id="scrolling-menu-header" class="scrolling-menu" >
            <label id="nav-menu-header" class="nav-menu" for="toggle-menu">☰</label>
            <input type="checkbox" id="toggle-menu" :checked {*hidden*}>
            <ul id="second-nav-links" class="nav-links second-links">
                {include "../header&footer/listeNavHeader.tpl"}
            </ul>
        </div>

        <a id="link_nav-logo" class="nav-logo" href="{$source}">
            <img id="nav-logo" class="nav-logo" src="Views/Assets/logo avec texte.png">
        </a>

        <ul id="main-nav-links" class="nav-links main-links">
            {include "../header&footer/listeNavHeader.tpl"}
        </ul>
        
        <a id="link_user-icon" class="user-icon" href="{$source|cat:$connecAction}">
            <img id="user-icon"src="Views/Assets/user-circle.svg" alt="User icon" class="user-icon">
        </a>

    </nav>
</header>