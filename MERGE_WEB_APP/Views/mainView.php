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

        if (isset($_GET['id'])){$smarty->assign('intershipID',$_GET['id']);}

        if (isset($action)){ 
            
            $smarty->assign('action',$action);
            if ($action == 'display' or $action == 'add'){         
                $smarty->assign('companyID','');        /*élément à remplire*/
                $smarty->assign('internshipTitle','');
                $smarty->assign('companyName', '');     /*élément à remplire*/
                $smarty->assign('placesNumber','');
                $smarty->assign('remuneration','');
                $smarty->assign('internshipDesc','');
                $smarty->assign('internshipComp','');
                $smarty->assign('companyAddress','');
            }
            else{
                $smarty->assign('companyID',$content['companyID']);
                $smarty->assign('internshipTitle',$content['title']);
                $smarty->assign('companyName', $content['companyName']);
                $smarty->assign('companyAddress',$content['companyAddress']);
                $smarty->assign('placesNumber',$content['placesNumber']);
                $smarty->assign('remuneration',$content['remunerationBasis']);
                $smarty->assign('internshipDesc',$content['descr']);
                $smarty->assign('internshipComp',$content['skills']);
            }
        }     
    }
   

    $user = $this->whatIsConnect();
    $smarty->assign('user', $user);
    $smarty->assign('source', $this->sourcePath);
    $smarty->assign('page', $page);
    $smarty->assign('connecAction', $this->actionLinkToConnect());


    $smarty->display('Views/tpl/templateBase.tpl');