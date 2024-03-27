<?php
    include 'connectInfo';

    class Controller extends connectInfo{
        private string $sourcePath;



        function __construct($source) {
            $this->sourcePath = $source; // Set sourcePath attribut
        }

        public function associatactiontoconnect(){
            if ($this->isConnect()){
                return "?page=connexion";
            }
            else{
                return "?page=dashbord";
            }
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
    }