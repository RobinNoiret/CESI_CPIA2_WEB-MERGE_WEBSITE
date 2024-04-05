<!-- Set variables to display with smarty -->
<?php 
    require_once 'libs/Smarty.class.php';

    $smarty = new Smarty();

    if ($page == 'home'){
        $smarty->assign('title', 'Merge-home');
        $smarty->assign('studentsNumber',$nbStudent);
        $smarty->assign('companiesNumber',$nbCompany);
        $smarty->assign('pilotesNumber',$nbPilote);
    }
    elseif ($page == 'connexion'){
        $smarty->assign('title', 'Merge-connexion');
        
    }
    elseif ($page == 'companies' ){
        $smarty->assign('title', 'Merge-Entreprises');
        $smarty->assign('companies',$companies);
        $smarty->assign('action',null);

        if (isset($action)){


            if ($action == 'add' ){
                $smarty->assign('title', 'Merge-Création-Entreprises');
                $smarty->assign('action',$action);
                $smarty->assign('',); 
                $smarty->assign('',);
                $smarty->assign('',); 
                $smarty->assign('',);
                $smarty->assign('',);
            }
        }
    }
    
    $user = $this->whatIsConnect();
    $smarty->assign('user', $user);
    $smarty->assign('source', $this->sourcePath);
    $smarty->assign('page', $page);
    $smarty->assign('connecAction', $this->actionLinkToConnect());


    $smarty->display('Views/tpl/templateBase.tpl');