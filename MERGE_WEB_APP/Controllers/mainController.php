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
                $loginData=$connexionModel->getPwd($login);

                
                if (password_verify($password, $loginData['userPassword'])) {                   // Know if password is correct
                    //echo 'Password is valid!';            // To verify the activation of condition

                    // Create variable and put informations like the login and the status
                    $_SESSION['LOGGED_USER']['login'] = $login;
                    $_SESSION['LOGGED_USER']['status'] = $loginData['userStatus'];

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
            // Verify user's connexion
            $this->isConnect();

            // Test "action" criteria to know if you want to create, display, update, delete
                //update and delete need an ID
            // Intialize variables

            return true;
        }

        public function companiesController() {
            $page = 'companies';
        
            // Inclure le modèle des entreprises
            include_once 'Models/companyModel.php';
        
            // Créer une instance du modèle des entreprises
            $companyModel = new companyModel($this->sourcePath);

            // Vérifier si un ID d'entreprise est passé en paramètre
            if (isset($_POST['search'])) {
                // Récupération de l'id de la company
                $companyID = $_POST['companyID'];
                // Vérifier si l'ID de l'entreprise est vide
                if (!empty($companyID)) {
                    // Appeler la méthode select() pour récupérer l'entreprise spécifique
                    $companies = $companyModel->select($companyID); // Assurez-vous que le résultat est toujours sous forme de tableau
                } else {
                    // Appeler la méthode selectAll() pour récupérer toutes les entreprises par défaut
                    $companies = $companyModel->selectAll();
                }
            } else{
                // Appeler la méthode selectAll() pour récupérer toutes les entreprises par défaut
                $companies = $companyModel->selectAll();
            }
            
            // Passer les données récupérées à la vue
            include 'Views/mainView.php';
        
            return true;
        }

        public function  mentionController(){
            $page = 'mentions';
            include 'Views/mainView.php';

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