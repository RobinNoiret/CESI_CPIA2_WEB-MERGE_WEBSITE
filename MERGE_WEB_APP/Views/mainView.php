<!-- Set variables to display with smarty -->
<?php 
    require_once 'libs/Smarty.class.php';

    $smarty = new Smarty();

    if ($page == 'home'){
        $smarty->assign('title', 'Merge-homepage');
        $smarty->assign('page', $page);
        $smarty->assign('user', $user);
        $smarty->display('Views/tpl/templateBase.tpl');
    }