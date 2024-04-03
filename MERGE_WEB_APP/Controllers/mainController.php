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

                    setcookie(                               // Create a cookie and put informations on it like the login and the status
                        'LOGGED_USER',
                        '{
                            "login"  :  "'.$login.'",
                            "status" :  "'.$hashPassword['userStatus'].'"
                        }',
                        [
                            'expires' => time() + 60*10,
                            'secure' => true,
                            'httponly' => true,
                        ]
                    ); 

                    header('Location: '.$this->sourcePath);                                     // Redirect to home page

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
            if ($this->whatIsConnect() != 'none' or true){              // Verify user's connexion
                $page = 'internship';

                include_once 'Models/internshipModel.php';
                $internshipModel = new internshipModel($this->sourcePath);

                if (isset($_GET['action'])){
                    $action = 'display';
                    if ($_GET['action'] == 'display'){
                        $contenu = $internshipModel->selectAll();
                        include 'Views/mainView.php';
                    }
                    elseif ($_GET['action'] == 'displayOne'){
                        $contenu = $internshipModel->select($_GET['id']);
                        $title = 'Merge-stage'; // put the name of the stage
                        $action = 'displayOne';
                        include 'Views/mainView.php';
                    }
                    elseif ($_GET['action'] == 'research'){
                        if (isset($_GET['domain'])){
                            $contenu = $internshipModel->selectDomain($_GET['domain']);
                        }else {
                            $contenu = $internshipModel->selectSeveral(/*ensemble de paramètre à définir*/);
                        }
                        include 'Views/mainView.php';
                    }
                    else{
                        if ($this->whatIsConnect() == ('Pilote' or 'Admin')){
                            if ($_GET['action'] == 'add'){
                                $title = 'Merge-stage-nouveau'; // put the name of the stage
                                $action = 'add';
                                // Choose an existing compagny after choose an existing adresse from this company
                                
                                // Make the insert with model
                                // Signal the correct change
                                // Display the mainView
                                include 'Views/mainView.php';
                            }
                            elseif ($_GET['action'] == 'change'){
                                
                                // Ask the confirmation to update data
                                $action = 'change';
                                $title = 'Merge-modification'; // put the name of the stage
                                // Make the update with model
                                // Signal the correct change
                                // Display the mainView
                                include 'Views/mainView.php';
                            }
                            elseif ($_GET['action'] == 'delete'){
                                // Ask the confirmation to delete
                                // Make the delete with model
                                $internshipModel->delete($_GET['id']);
                                // Signal the correct change
                                // Display the mainView
                                include 'Views/mainView.php';
                            }
                            else {
                                $this->errorsController(404);
                            }
                        }
                        else {
                            $this->errorsController(404);
                        }                       
                    }                  
                }
                else {
                    $contenu = $internshipModel->selectAll();
                    include 'Views/mainView.php';
                }
            }
            else{
                header('Location: '.$this->sourcePath.'?page=connexion');
            }

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