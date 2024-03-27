{*Smarty*}

<!doctype html> 
<html lang="fr"> 

    <head> 
    {block name=head}
		<meta charset="utf-8"> 	
        <style></style>
		
        <title> {$title} </title>
    {/block}
    </head> 

   	<body>
    {block name=body}

        {include "../tpl/header.tpl"}

        {if $page eq 'home'}
            {include "../tpl/homeContent.tpl"}
        {/if}

        {include "../tpl/footer.tpl"}

        {/block}
    </body> 
</html> 