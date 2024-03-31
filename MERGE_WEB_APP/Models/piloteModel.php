<?php
    include_once 'connectEntity.php';

    class piloteModel extends connectToDB{
        
        public function selectAll(){
            $datas = array(); // A modifier

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