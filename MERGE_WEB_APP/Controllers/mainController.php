<?php
    include 'connectInfo.php';

    class Controller extends connectInfo{
        private string $sourcePath;



        function __construct($source) {
            $this->sourcePath = $source; // Set sourcePath attribut
        }


        public function homeController(){
            $page = 'home';

            $user = 'none'/*$this->whatIsConnect()*/;

            require_once 'Models/homeDataModel.php';

            $dataModel = new homeDataModel($this->sourcePath);      // Search data
            $nbPilote = $dataModel->countPilotes();
            $nbCompany = $dataModel->countCompanies();
            $nbStudent = $dataModel->countStudents();

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
            if ($errorType == '404'){
                $link = 'Views/tpl/errors/RessourceIntrouvable.tpl';
            }
            elseif ($errorType == '400'){
                $link = 'Views/tpl/errors/BadRequest.tpl';
            }
            elseif ($errorType == '401'){
                $link = 'Views/tpl/errors/AuthorisationRequise.tpl';
            }
            elseif ($errorType == '500'){
                $link = 'Views/tpl/errors/ServerError.tpl';
            }

            include 'Views/errorsView.php';           // Add template for home view

            return true;            
        }
    }