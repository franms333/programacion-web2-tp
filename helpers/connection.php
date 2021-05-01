<?php
        try {        
            $con = new PDO('mysql:host='.$dbHost.';port='.$dbPort.';dbname='.$dbName, $dbUser, $dbPass);
            print "Conexión exitosa!";
        }
        catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage();
            die();
        }
?>