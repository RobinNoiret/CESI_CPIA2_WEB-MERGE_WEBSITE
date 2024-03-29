<?php
    include 'connectEntity.php';

    class homeDataModel extends connectToDB{

        public function countPilotes(){
        $request = $this->db->prepare("SELECT count(userID) AS NumberOfPilotes FROM users where userStatus='Pilote';");

        $this->tryToExecute($request);                  
        $datas = $request->fetch();  

        // Call functions to set datas if needed

        return $datas;
        }

        public function countStudents(){
            $request = $this->db->prepare("SELECT count(userID) AS NumberOfStudents FROM users where userStatus='Etudiant';");
    
            $this->tryToExecute($request);                  
            $datas = $request->fetch();     
    
            // Call functions to set datas if needed
    
            return $datas;
            }

        public function countCompanies(){
            $request = $this->db->prepare("SELECT count(companyName) AS NumberOfCompanies FROM companies where visibility=1;");
    
            $this->tryToExecute($request);                  
            $datas = $request->fetch();  
    
            // Call functions to set datas if needed
    
            return $datas;
            }
    }