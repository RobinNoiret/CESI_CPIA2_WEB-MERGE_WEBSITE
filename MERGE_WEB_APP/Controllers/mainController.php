<?php
    class Controller {
        private string $sourcePath;


        function __construct($source) {
            $this->sourcePath = $source; // Set sourcePath attribut
        }

        public function connexionController(){
            // 
            // Include view to have the connexion page
            return true;
        }

        public function internshipController(){
            // Verify user's connexion

            // Test "action" criteria to know if you want to create, display, update, delete
                //update and delete need an ID
            // Intialize variables

            return true;
        }
    }