{*Smarty*}

<!doctype html> 
<html lang="fr"> 

    <head> 
    {block name=head}
		<meta charset="utf-8"> 	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="Views/CSS/main.css" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz@0,9..40;1,9..40&display=swap" rel="stylesheet">
        
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
            {/if}
        </div>

        {include "../tpl/footer.tpl"}

        {/block}
    </body> 
</html> 