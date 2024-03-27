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
            $source = $this->sourcePath;
            $page = 'home';

            // Get user of the connect user 
            if (false){
            }
            else {
                $user = 'admin';
            }

            include 'Views/mainView.php';           // Add template for home view

            return true;
        }


        public function connexionController(){
            // 
            // Include view to have the connexion page
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