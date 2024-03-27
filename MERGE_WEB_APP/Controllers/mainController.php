<?php
    class Controller {
        private string $sourcePath;



        function __construct($source) {
            $this->sourcePath = $source; // Set sourcePath attribut
        }


        function whoIsConnect(){
            // Return the people who is connected 
            return NULL;
        }


        public function homeController(){
            $page = 'home';

            // Get user of the connect user 
            if (false){
            }
            else {
                $user = 'admin';                    // Put user status
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
    }