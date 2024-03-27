<?php
    include 'connectInfo.php';

    class Controller extends connectInfo{
        private string $sourcePath;



        function __construct($source) {
            $this->sourcePath = $source; // Set sourcePath attribut
        }


        public function homeController(){
            $page = 'home';

            // Get user of the connect user 
            if (false){
            }
            else {
                $user = 'admin';                    // Put user stat
            }

            include 'Views/mainView.php';           // Add template for home view

            return true;
        }


        public function connexionController(){
            $page = 'connexion';

            if (isset($_GET['action'])){                
                if ($_GET['action'] == 'verify'){               // Test the action gave in parameter of URL
                    // Make the verification of arguments
                }
                else{
                    header("Location: ".$this->sourcePath);     // Redirection in case of unconventionnal value
                }

            }

            include 'Views/mainView.php';           // Add template for home view

            return true;
        }


        public function internshipController(){
            // Verify user's connexion
            $this->whoIsConnect();

            // Test "action" criteria to know if you want to create, display, update, delete
                //update and delete need an ID
            // Intialize variables

            return true;
        }

        public function errorsController($errorType){     // Autorized $errorType : data, connect, net, server
            if ($errorType == 'Default'){
                $link = 'Views/tpl/errors/pageDoesntExist-error.tpl';
            }
            elseif ($errorType == 'data'){
                //$link = 'Views/tpl/errors/databaseConnexion-error.tpl';
            }
            elseif ($errorType == 'connect'){
                // $link = 'Views/tpl/errors/serverAccess-error.tpl';
            }
            elseif ($errorType == 'net'){
                $link = 'Views/tpl/errors/networkAccess-error.tpl';
            }
            elseif ($errorType == 'server'){
                $link = 'Views/tpl/errors/serverAccess-error.tpl';
            }

            include 'Views/errorsView.php';           // Add template for home view

            return true;            
        }
    }