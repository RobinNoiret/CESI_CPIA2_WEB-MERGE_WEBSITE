<?php 
    include ('Controllers/mainController.php');         // Include the controller part
    $siteSource = $_SERVER['REQUEST_URI'];              // Keep the path to start point of the website

    $controller = new Controller($siteSource);          // Create and give to the controller the start path

    if (empty($_SERVER['QUERY_STRING'])){               // Test path parameters

    }
    else {
        error404($controller);                          // Call error404
    }
        
    function error404(&$controlPointer){
        $controlPointer->error404Controller();          // Give to the controller the action to do
        return true;
    }