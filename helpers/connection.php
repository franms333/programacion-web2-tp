<?php
        try {        
            $con = new PDO('mysql:host='.$dbHost.';port='.$dbPort.';dbname='.$dbName, $dbUser, $dbPass);
            
        }
        catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage();
            die();
        }
?>