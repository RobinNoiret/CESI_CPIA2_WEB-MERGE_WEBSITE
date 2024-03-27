<?php 
    include ('Controllers/mainController.php');         // Include the controller part
    $sourcePath = $_SERVER['REQUEST_URI'];              // Keep the path to start point of the website

    $controller = new Controller($sourcePath);          // Create and give to the controller the start path

    if (empty($_SERVER['QUERY_STRING'])){               // Test path parameters
        $controller->homeController();
    }

    elseif (isset($_GET["page"])){
        if ($_GET["page"]=='connexion'){                // Test want to access to connexion
            $controller->connexionController();
        }
        elseif ($_GET["page"]=='internship'){           // Want to access to internship
            $controller->internshipController();
        }
        elseif ($_GET["page"]=='pilote'){               // Want to access to pilote
            //$controller->piloteController();
        }
        elseif ($_GET["page"]=='student'){               // Want to access to pilote
            //$controller->studentController();
        }
        elseif ($_GET["page"]=='company'){               // Want to access to company
            //$controller->companyController();
        }
        else{
            error404($controller);
        }
    }

    else {
        error404($controller);                          // Call error404
    }
        
    function error404(&$controlPointer){
        $controlPointer->error404Controller();          // Give to the controller the action to do
        return true;
    }