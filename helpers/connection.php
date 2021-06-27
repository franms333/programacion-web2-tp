<?php

    require_once ('../config/db.php');
    
    try{
        $con = new PDO("mysql:host=$dbhost;dbname=$db;port=$dbport",$dbuser,$dbpass);
    }catch(PDOException $error){
        echo $error->getMessage();
        die();
    }

?>