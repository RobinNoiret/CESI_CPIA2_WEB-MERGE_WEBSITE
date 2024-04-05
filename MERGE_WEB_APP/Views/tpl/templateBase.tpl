{*Smarty*}

<!doctype html> 
<html lang="fr"> 

    <head> 
    {block name=head}
		<meta charset="utf-8"> 	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="Views/CSS/main.css" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz@0,9..40;1,9..40&display=swap" rel="stylesheet">
        <link rel="manifest" href="Manifest.json" />
        <meta name="theme-color" content="#ff7d00">
        <script src="https://kit.fontawesome.com/7fb23658f3.js" crossorigin="anonymous"></script>
        
        <title> {$title} </title>	
    {/block}
    </head> 

   	<body>
    {block name=body}

        {include "../tpl/header.tpl"}
        <div class="Content">
        
            {if $page eq 'home'}
                {include "../tpl/homeContent.tpl"}
            {elseif  $page eq 'connexion'}
                {include "../tpl/connexionContent.tpl"}
            {elseif $page eq 'companies' }
                {if $action eq 'add'}
                    {include "../tpl/companiesActions.tpl"}
                {else}
            	    {include "../tpl/companies.tpl"}
                {/if}
            {elseif  $page eq 'mentions'}
                {include "../tpl/mLegaleContent.tpl"}

            {elseif $page eq 'internship'}
                {if $action eq 'change' or $action eq 'add'}
                    {include "Views/tpl/offerTemplates/modifyOffer.tpl"}
                {elseif $action eq 'displayOne'}
                    {include "Views/tpl/offerTemplates/displayOffer.tpl"}
                {else}
                    {include "Views/tpl/offerTemplates/displayOffers.tpl"}
                {/if}
            {/if}
        </div>

        {include "../tpl/footer.tpl"}
        
        <script src="Views/JS/header.js"></script>
        <script src="Views/JS/form_crea.js"></script>
        {/block}
        
    </body> 
</html> 