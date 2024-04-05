<?php
    class connectInfo{  
        // Return the id or information of who is connected 
        function whoIsConnect(){
            if ($this->isConnect()){
                return $_SESSION['login'];
            } else {
                return 'none';
            }            
            return NULL;
        }

        // Return the stat who is connected
        function whatIsConnect(){
            if ($this->isConnect()){
                return $_SESSION['LOGGED_USER']['status'];
            } else {
                return 'Admin';
            }
        }

        // Return if there is a connection or not
        function isConnect(){
            return isset($_SESSION['LOGGED_USER']['status']);
        }

        // Action for connect button
        public function actionLinkToConnect(){
            if ($this->isConnect()){
                return "?page=dashbord";
            }
            else{
                return "?page=connexion";
            }
        }
    }