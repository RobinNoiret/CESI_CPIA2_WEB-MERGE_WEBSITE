<?php
    $user = 'merge_connect';                    // Define login and password to connect with DataBase
    $pass = '?tc,L2D8Y4t]';
    try { 
        $db = new PDO('mysql:host=localhost;dbname=mergedatabase', $user, $pass);     //Connexion
    }
    catch (PDOException $e) {
        echo "failed";
    }

    $request = $db->prepare("SELECT *  FROM users ;");

    $request->execute();               
    $datas = $request->fetchAll(PDO::FETCH_ASSOC);  
    var_dump($datas);
    echo '<br>';
    echo '<br>';

    $index = 1 ;
    foreach ($datas as $user){
        if (substr($user['userPassword'],0,1) != '$'){
            $sql = "UPDATE users
            SET userPassword='".password_hash($user['userPassword'],PASSWORD_DEFAULT)."'
            WHERE userID=".$user['userID'];
            //echo $sql.'<br>';

            $rslt = $db->query($sql);
            echo 'succesChange id='.$index;
        }
        else {
            echo 'unchange id='.$index;
        }
        echo '<br>';
        $index = $index + 1;
    }