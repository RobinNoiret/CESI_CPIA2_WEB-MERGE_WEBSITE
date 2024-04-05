<?php
    include 'connectEntity.php';

    class companyModel extends connectToDB{
        
        public function selectAll(){
            $request = $this->db->prepare("SELECT 
            c.companyID AS companyID,
            COALESCE(c.companyName, 'Nom non spécifié') AS companyName,
            COALESCE(c.activityArea, 'Secteur d\'activité non spécifié') AS activityArea,
            COALESCE(GROUP_CONCAT(DISTINCT ci.cityName SEPARATOR ', '), 'Localité non spécifiée') AS localities,
            COALESCE(COUNT(DISTINCT ca.userID), 0) AS applicantCount
        FROM 
            companies c
        LEFT JOIN 
            addresses a ON c.companyID = a.companyID
        LEFT JOIN 
            cities ci ON a.cityID = ci.cityID
        LEFT JOIN 
            offers o ON a.addressID = o.addressID
        LEFT JOIN 
            candidatures ca ON o.offerID = ca.offerID
        GROUP BY 
            c.companyID;
          
        ");
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
            $request = $this->db->prepare("SELECT 
                c.companyID AS 'companyID',
                c.companyName AS 'companyName',
                c.activityArea AS 'activityArea',
                GROUP_CONCAT(DISTINCT ci.cityName SEPARATOR ', ') AS 'localities',
                COUNT(DISTINCT ca.userID) AS 'applicantCount'
            FROM 
                companies c
            LEFT JOIN 
                addresses a ON c.companyID = a.companyID
            LEFT JOIN 
                cities ci ON a.cityID = ci.cityID
            LEFT JOIN 
                offers o ON a.addressID = o.addressID
            LEFT JOIN 
                candidatures ca ON o.offerID = ca.offerID
            WHERE 
                c.companyID = :companyID
            GROUP BY 
                c.companyID;");
        
            // Bind value
            $request->bindValue(':companyID', $id, PDO::PARAM_INT);
        
            // Execute the query
            $this->tryToExecute($request);

            $datas = $request->fetchAll(PDO::FETCH_ASSOC);
        
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