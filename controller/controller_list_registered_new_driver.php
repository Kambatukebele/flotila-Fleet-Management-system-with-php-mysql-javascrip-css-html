<?php 
    //LINK THE DATABASE CONNECTION
    require_once 'database/database.php';

    //FETCH DATA FROM registration_new_driver

    $sql = "SELECT * FROM registration_new_driver";
    $stmt = $conn->query($sql);  

    //SET THE RESULTING ARRAY TO ASSOCIATIVE

    $result = $stmt->fetchAll();
  
    