<?php
    class connectInfo{  
        // Return the id or information of who is connected 
        function whoIsConnect(){
            if ($this->isConnect()){
                $cookie = json_decode($_COOKIE['LOGGED_USER'],true);
                return $cookie['login'];
            } else {
                return 'none';
            }            
            return NULL;
        }

        // Return the stat who is connected
        function whatIsConnect(){
            if ($this->isConnect()){
                $cookie = json_decode($_COOKIE['LOGGED_USER'],true);
                return $cookie['status'];
            } else {
                return 'none';
            }
        }

        // Return if there is a connection or not
        function isConnect(){
            return isset($_COOKIE['LOGGED_USER']);
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