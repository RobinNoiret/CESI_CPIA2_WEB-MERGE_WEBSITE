<?php
    include 'connectEntity.php';

    class compagnyModel extends connectToDB{
        
        public function selectAll(){
            $request = $this->db->prepare("");
            // Set parameters if need

            $this->tryToExecute($request);                  
            $datas = $request->fetchAll(PDO::FETCH_ASSOC);      // Return a table of tables with multiples entites

            // Call functions to set datas

            return $datas;
        }
        
        public function selectSeveral(/*ensemble de paramètres*/){        // Return data with filters
            $datas = array(); // A modifier

            return $datas;
        }

        public function select($id){
            $datas = array(); // A modifier

            return $datas;
        }
        
        public function insert(/*ensemble de données*/){
            $datas = array(); // A modifier

            return $datas;       
        }

        public function update(/*ensemble de données*/){
            $datas = array(); // A modifier

            return $datas;
        }

        public function delete($id){
            $datas = array(); // A modifier

            return $datas;
        }
    }