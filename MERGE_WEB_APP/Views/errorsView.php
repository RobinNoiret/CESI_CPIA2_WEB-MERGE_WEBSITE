<?php 
    require_once 'libs/Smarty.class.php';

    $smarty = new Smarty();

    $smarty->assign('source',$this->sourcePath);

    $smarty->display($link);