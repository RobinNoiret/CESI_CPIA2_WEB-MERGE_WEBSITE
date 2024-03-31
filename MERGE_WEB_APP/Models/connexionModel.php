<?php
    include_once 'connectEntity.php';

    class connexionModel extends connectToDB{
        public function getPwd($login){
            $request = $this->db->prepare("SELECT userPassword, userStatus FROM users where userLogin=:login;");
            $request->bindParam(':login', $login);

            $this->tryToExecute($request);                  
            $datas = $request->fetch(PDO::FETCH_ASSOC);

            var_dump($datas);
    
            if ($datas == false){
                return array("userPassword"=>""); 
            } else {
                return $datas;
            }
        }
    }