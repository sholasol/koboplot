<?php
function dbConnect(){
    try{
        $username='root';
        $pass='@pass1';
        $con= new pdo("mysql:host=localhost; dbname=own", $username, $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $con;
        
    } catch (PDOException $e) {
        echo 'ERROR', $e->getMessage();
    }
}

