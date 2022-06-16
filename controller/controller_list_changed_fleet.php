<?php 
    //LINK THE DATABASE CONNECTION
    include 'database/database.php';

    //FETCH DATA FROM change_flotila

    $sql = "SELECT * FROM `change_flotila`";
    $stmt = $conn->query($sql);  

    //SET THE RESULTING ARRAY TO ASSOCIATIVE

    $result = $stmt->fetchAll();
  
    