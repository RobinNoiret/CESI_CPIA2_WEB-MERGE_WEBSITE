<!-- Set variables to display with smarty -->
<?php 
    require_once 'libs/Smarty.class.php';

    $smarty = new Smarty();

    $smarty->assign('action','none');

    if ($page == 'home'){
        $smarty->assign('title', 'Merge-home');
        $smarty->assign('studentsNumber',$nbStudent);
        $smarty->assign('companiesNumber',$nbCompany);
        $smarty->assign('pilotesNumber',$nbPilote);
    }
    elseif ($page == 'connexion'){
        $smarty->assign('title', 'Merge-connexion');
        
    }
    elseif ($page == 'internship'){
        if (isset($title)){ $smarty->assign('title',$title);}
        else {  $smarty->assign('title','Merge-stages');}
        if (isset($_GET['id'])){$smarty->assign('id',$_GET['id']);}
        if (isset($action)){ 
            $smarty->assign('action',$action);
            $smarty->assign('placeholderTitle','Stage - Nom de stage');
            $smarty->assign('companyID','');
            $smarty->assign('internshipTitle','');
            $smarty->assign('companyName', '');
            $smarty->assign('internshipDesc','');
            $smarty->assign('placeholderDesc','Donner une description des missions et du contenu de l\'offre de stage ...');
            $smarty->assign('internshipDesc','');
            $smarty->assign('placeholderComp','Compétence1, Compétence2, Compétence3 ...');
        }     
    }
   

    $user = $this->whatIsConnect();
    $smarty->assign('user', $user);
    $smarty->assign('source', $this->sourcePath);
    $smarty->assign('page', $page);
    $smarty->assign('connecAction', $this->actionLinkToConnect());


    $smarty->display('Views/tpl/templateBase.tpl');