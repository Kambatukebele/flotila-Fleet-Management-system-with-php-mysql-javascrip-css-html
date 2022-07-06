<?php 
    //LINK THE DATABASE CONNECTION
    require_once 'database/database.php';
    require_once 'security/security.php';

    //FETCH DATA FROM change_flotila

    $sql = "SELECT * FROM `change_flotila`";
    $stmt = $conn->query($sql);  

    //SET THE RESULTING ARRAY TO ASSOCIATIVE

    $result = $stmt->fetchAll();
  
    