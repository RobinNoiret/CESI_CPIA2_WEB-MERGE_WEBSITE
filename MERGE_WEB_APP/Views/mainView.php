// Set variables to display with smarty 
<?php 
    require_once 'libs/Smarty.class.php';

    $smarty = new Smarty();

    if ($page == 'home'){
        $smarty->assign('title', 'Merge-homepage');
        $smarty->assign('user', $user);
        $smarty->display('/*path to tpl page to display*/');
    }