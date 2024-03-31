<?php 
    include ('Controllers/mainController.php');         // Include the controller part
    $path = $_SERVER['REQUEST_URI'];
    $sourcePath = (substr($path,0,strlen($path)-(strlen(strrchr($path,'/'))-1)));  // Keep the path of the start point of the website

    $controller = new Controller($sourcePath);          // Create and give to the controller the start path

    // var_dump($_GET);
    // var_dump($_POST);

    //var_dump(password_hash('Merge_Admin_Florentµ', PASSWORD_DEFAULT));
    
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
        elseif ($_GET["page"]=='404'and isset($_GET["error"])){
            errors($controller, $_GET["error"]);
        }
        else{
            errors($controller);
        }
    }

    else {
        errors($controller);                          // Call errors
    }
        
    function errors(&$controlPointer,$errorType='Default'){   // Autorized $errorType : data, connect, net, server
        $controlPointer->errorsController($errorType);          // Give to the controller the action to do
        return true;
    }