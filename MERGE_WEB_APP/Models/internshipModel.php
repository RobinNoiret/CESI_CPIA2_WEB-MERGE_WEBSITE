<?php
    include_once 'connectEntity.php';

    class internshipModel extends connectToDB{
        
        public function selectAll(){
            $request = $this->db->prepare('SELECT * 
                                            FROM offers AS of 
                                                INNER JOIN addresses AS ad ON ad.addressID = of.addressID
                                                INNER JOIN cities AS ci ON ad.cityID = ci.cityID
                                                INNER JOIN companies AS co ON ad.companyID = co.companyID;
                                        ');

            $this->tryToExecute($request); 
            $datas = $request->fetch(PDO::FETCH_ASSOC);

            return $datas;
        }

        public function selectSeveral(/*ensemble de paramètres*/){        // Return data with filters
            $datas = array(); // A modifier

            return $datas;
        }
        public function selectDomain($domain){
            $request = $this->db->prepare('SELECT * 
                                            FROM (SELECT * FROM companies WHERE activityArea=:domain) AS co 
                                            INNER JOIN addresses AS ad ON co.companyID = ad.companyID
                                            INNER JOIN cities AS ci ON ad.cityID = ci.cityID
                                            INNER JOIN offers AS of ON ad.addressID = of.addressID;
                                        ');
            $request->bindValue(':domain', $domain);

            $this->tryToExecute($request);             
            $datas = $request->fetchAll(PDO::FETCH_ASSOC);

            //Traitment of datas

            return $datas;
        }

        public function select($id){
            $request = $this->db->prepare('SELECT * 
                                            FROM (SELECT * FROM offers WHERE offerID=:offerID) AS of 
                                            INNER JOIN addresses AS ad ON ad.addressID = of.addressID
                                            INNER JOIN cities AS ci ON ad.cityID = ci.cityID
                                            INNER JOIN companies AS co ON ad.companyID = co.companyID;
                                        ');
            $request->bindValue(':offerID', $id);

            $this->tryToExecute($request);           
            $datas = $request->fetch(PDO::FETCH_ASSOC);

            //Traitment of datas

            return $datas;
        }
        
        public function insert(/*ensemble de données*/){
            // insert offer data at an adresse
            // Enter data from the offer
            $datas = array(); // A modifier

            return $datas;       
        }

        public function update(/*ensemble de données*/){
            // Can change skillOffer, change offers parameters
            $datas = array(); // A modifier

            return $datas;
        }

        public function delete($id){
            // Delete offers and skillOffer  where ID 
            $datas = array(); // A modifier

            return $datas;
        }
    }