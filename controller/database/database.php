<?php 
        // CREATING VARIABLES
    $server_host = 'localhost';
    $user_name = 'root';
    $password = 'Charleskamba11';
    $db_name = 'flotila';

    //CONNECT TO THE DATABASE USING PD0
    try
    {
        session_start();
        
        $conn = new PDO("mysql:host=$server_host;dbname=$db_name", $user_name, $password);

        // SET THE PDO ERROR MODE TO EXCEPTION
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // CHECK IF THE CONNECTION IS WORKING 

    }catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>