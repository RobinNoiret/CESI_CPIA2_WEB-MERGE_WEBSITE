<?php
    include 'connectInfo.php';

    class Controller extends connectInfo{
        private string $sourcePath;



        function __construct($source) {
            $this->sourcePath = $source; // Set sourcePath attribut
        }


        public function homeController(){
            $page = 'home';

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

            if (isset($_POST['login']) and isset($_POST['password'])){    
                $login = $_POST['login'];            
                $password = $_POST['password'];

                require_once 'Models/connexionModel.php';                                       // Initialized the model to recover password and status
                $connexionModel = new connexionModel($this->sourcePath);                        
                $hashPassword=$connexionModel->getPwd($login);

                //var_dump(password_verify($password, $hashPassword['userPassword']));
                if (password_verify('Merge_Admin_Florentµ', $hashPassword['userPassword'])) {   // Know if password is correct
                    //echo 'Password is valid!';            // To verify the activation

                    session_start();                                                            // Create a session and put information on it like the login and the status
                    $_SESSION['LOGGED_USER']['login'] = $login;
                    $_SESSION['LOGGED_USER']['status'] = $hashPassword['userStatus'];

                    $this->homeController();                                                    // Redirect to home page
                } else {
                    //echo 'Invalid password.';
                    // Alert user about the failed of authentification
                    include 'Views/mainView.php';           // Add template for home view
                }
            }
            else{
                include 'Views/mainView.php';           // Add template for home view
            }


            return true;
        }


        public function internshipController(){
            // Verify user's connexion
            $this->isConnect();

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