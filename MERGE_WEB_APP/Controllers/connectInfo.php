<?php
    class connectInfo{  
        function whoIsConnect(){
            // Return the id or information of who is connected 
            return NULL;
        }

        function whatIsConnect(){
            // Return the stat who is connected
            if ($this->isConnect()){
                return '';
            } else {
                return 'none';
            }
        }

        function isConnect(){
            // Return if there is a connection or not
            return false;
        }

        public function actionLinkToConnect(){
            if ($this->isConnect()){
                return "?page=dashbord";
            }
            else{
                return "?page=connexion";
            }
        }
    }