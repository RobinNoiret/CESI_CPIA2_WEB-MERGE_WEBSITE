<?php
    include_once 'connectEntity.php';

    class internshipModel extends connectToDB{
        
        public function selectAll(){
            $request = $this->db->prepare('SELECT of.offerID as ID, title, publicationDate, cityName, postalCode, companyName, descr, placesNumber, remunerationBasis
                                            FROM offers AS of 
                                                INNER JOIN addresses AS ad ON ad.addressID = of.addressID
                                                INNER JOIN cities AS ci ON ad.cityID = ci.cityID
                                                INNER JOIN companies AS co ON ad.companyID = co.companyID;
                                        ');

            $this->tryToExecute($request); 
            $datas = $request->fetchAll(PDO::FETCH_ASSOC);

            $temp = array(); 
            $index = 0;
            foreach ($datas as $data){
                $temp = array_merge($data, 
                                    array('skills' => $this->selectSkill($data['ID'])),
                                    array('address' => $data['cityName'].' '.$data['postalCode']),
                                    array('short_descr' => (substr($data['descr'],0,41)).'...')
                                );
                $datas[$index]=$temp;
                $index = $index+1;
            }
            //var_dump($datas);

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
            $offerData = $this->selectOffer($id);
            $skillsData = $this->selectSkill($id);
            $datas = array('companyID'=>$offerData['companyID'],
                            'title'=>$offerData['title'],
                            'companyName'=>$offerData['companyName'],
                            'companyAddress'=>$offerData['streetNum'].' '
                                                .$offerData['streetName'].' , '
                                                .$offerData['postalCode'].' '
                                                .$offerData['cityName'],
                            'placesNumber'=>$offerData['placesNumber'],
                            'remunerationBasis'=>$offerData['remunerationBasis'],
                            'descr'=>$offerData['descr'],
                            'skills'=>$skillsData
                        );
            
            //var_dump($datas);
            return $datas;
        }

        public function selectOffer($id){
            $request = $this->db->prepare('SELECT * 
                                            FROM (SELECT * FROM offers WHERE offerID=:offerID) AS of 
                                            INNER JOIN addresses AS ad ON ad.addressID = of.addressID
                                            INNER JOIN cities AS ci ON ad.cityID = ci.cityID
                                            INNER JOIN companies AS co ON ad.companyID = co.companyID;
                                        ');
            $request->bindValue(':offerID', $id);

            $this->tryToExecute($request);           
            $datas = $request->fetch(PDO::FETCH_ASSOC);

        return $datas;
        }

        public function selectSkill($id){
            $request = $this->db->prepare('SELECT * 
                                            FROM (SELECT * FROM skillOffer WHERE offerID=:offerID) AS of 
                                            INNER JOIN skills AS sk ON sk.skillID = of.skillID;
                                        ');
            $request->bindValue(':offerID', $id);

            $this->tryToExecute($request);           
            $datas = $request->fetchAll(PDO::FETCH_ASSOC);

            $Skills = '';
            foreach ( $datas as $data){
                $Skills = $Skills.$data['skill'].', ';
            }
            $Skills = substr($Skills,0,-2);
            
            return $Skills;
        }
        


        public function insert(/*ensemble de données*/){
            // insert offer data at an adresse
            // Enter data from the offer
            $datas = array(); // A modifier

            return $datas;       
        }

        public function insertSkill($skill){
            $request = $this->db->prepare('INSERT INTO skills (skill) VALUES (:skill)');
            $request->bindValue(':skill',$skill);
            $this->tryToExecute($request);
        }

        public function insertSkills($skills){
            $request = $this->db->prepare('SELECT * FROM skills WHERE skill = :skill');

            $toCreate = array();
            foreach($skills as $skill){
                $request->bindValue(':skill',$skill);
                $this->tryToExecute($request);
                if($request->fetchColumn() == 0){
                    array_push($toCreate,$skill);
                }
            }

            foreach($toCreate as $skill){
                $this->insertSkill($skill);
            }
            return true;
        }



        public function update($id){
            // Can change skillOffer, change offers parameters
            var_dump($_POST);

            // Update offer datas
            $request = $this->db->prepare('UPDATE offers
                                                SET title = :title, descr = :decr, placesNumber = :placesNb, 
                                                    remunerationBasis = :remuneration
                                                WHERE offerID = :ID;
                                            ');
            //Set parameters
            $request->bindValue(':title',$_POST['internshipTitle']);
            $request->bindValue(':decr',$_POST['internshipDesc']);
            $request->bindValue(':placesNb',intval($_POST['placesNumber']));
            $request->bindValue(':remuneration',intval($_POST['remuneration']));
            $request->bindValue(':ID',$id);

            $this->tryToExecute($request);


            // Update skills datas
            $skills = explode(", ", $_POST['skills']);
            var_dump($skills);

            $this->insertSkills($skills);

            $request = $this->db->prepare('DELETE FROM skilloffer WHERE offerID = :offerID;');
            $request->bindValue(':offerID',$id);
            $this->tryToExecute($request);

            $request = $this->db->prepare('INSERT INTO skilloffer VALUES (:offerID, (SELECT skillID FROM skills WHERE skill=:skill));');
            $request->bindValue(':offerID',$id);
            foreach($skills as $skill){
                var_dump($skill);
                $request->bindValue(':skill',$skill);
                $this->tryToExecute($request);
            }

            return true;
        }

        public function delete($id){
            // Delete relation beetween skills and the offer 
            $request = $this->db->prepare('DELETE FROM skilloffer WHERE offerID = :offerID;');
            $request->bindValue(':offerID',intval($id));
            $this->tryToExecute($request);

            // Delete the offer
            $request2 = $this->db->prepare('DELETE FROM offers WHERE offerID = :offerID;');
            $request2->bindValue(':offerID',intval($id));
            var_dump(intval($id));
            $this->tryToExecute($request2);

            return true;
        }
    }