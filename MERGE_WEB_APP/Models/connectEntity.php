<?php
    class connectToDB {
        protected $db;
        protected $sourcePath;

        public function __construct($source){
            $this->sourcePath = $source;

            $user = 'merge_connect';
            $pass = '?tc,L2D8Y4t]';

            try { 
                $this->db = new PDO('mysql:host=localhost;dbname=mergedatabase', $user, $pass);
            }
            catch (PDOException $e) {
                header("Location: ".$this->sourcePath."?page=404&error=connect");
                exit;
            }
        }


        public function tryToExe(&$request){
            try { 
                $request->execute();
            }
            catch (PDOException $e) {
                header("Location: ".$this->sourcePath."?page=404&error=data");
                exit;
            }            
        }
    }