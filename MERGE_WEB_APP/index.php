<?php 
    include ('Controllers/mainController.php');         // Include the controller part
    $path = $_SERVER['REQUEST_URI'];
    $sourcePath = (substr($path,0,strlen($path)-(strlen(strrchr($path,'/'))-1)));  // Keep the path of the start point of the website

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
        elseif ($_GET["page"]=='error'and isset($_GET["error"])){
            errors($controller, $_GET["error"]);
        }
        else{
            errors($controller);
        }
    }

    else {
        errors($controller);                          // Call errors
    }
        
    function errors(&$controlPointer,$errorType='400'){   // Autorized $errorType : 400,401,404,500
        $controlPointer->errorsController($errorType);          // Give to the controller the action to do
        return true;
    }