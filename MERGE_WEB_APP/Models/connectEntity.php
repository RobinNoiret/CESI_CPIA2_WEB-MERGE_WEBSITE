<?php
    class connectToDB {
        protected $db;
        protected $sourcePath;

        public function __construct($source){ 
            $this->sourcePath = $source;                // Give the path to the starter point

            $user = 'merge_connect';                    // Define login and password to connect with DataBase
            $pass = '?tc,L2D8Y4t]';

            try { 
                $this->db = new PDO('mysql:host=localhost;dbname=mergedatabase', $user, $pass);     //Connexion
            }
            catch (PDOException $e) {
                header("Location: ".$this->sourcePath."?page=error&error=400");                   // Managed exception
                exit;
            }
        }


        public function tryToExecute(&$request){
            try { 
                $request->execute();                    // Try to execute the prepared request
            }
            catch (PDOException $e) {
                header("Location: ".$this->sourcePath."?page=error&error=500");                      // Managed exception
                exit;
            }            
        }

        public function pagination($array, $itemsPage = 10, $currentPage = 1){
            $sizeArray = count($array);

            $totalPages = ceil($sizeArray / $itemsPage);               
            $start = ($currentPage - 1) * $itemsPage;
            $end = $start + $itemsPage ;

            $page = array();
            for ($i = $start; $i < $end && $i < $sizeArray; $i++) {
                $page[$start-$i] = $array[$i];
            }
            //var_dump($page);

            return array('page'=>$page,'max'=> $totalPages, 'current'=> $currentPage) ;
        }
    }