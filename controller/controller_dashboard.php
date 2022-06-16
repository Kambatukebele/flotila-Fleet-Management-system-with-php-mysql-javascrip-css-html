<?php 
     //LINK THE DATABASE CONNECTION
     include 'database/database.php';

     //SHOWING ACTUAL DATE

     $actualDate = date('d-m-y');

     //PROFILE ADMIN 

     if(!empty($_SESSION['fullName'])){
        echo $_SESSION['fullName'];
     }

     //RECENT REGISTRATION
    $sql = "SELECT * FROM `registration_new_driver` ORDER BY `id` DESC LIMIT 3";
    $stmt = $conn->query($sql);  

    //SET THE RESULTING ARRAY TO ASSOCIATIVE

    $result = $stmt->fetchAll();

     //FETCH DATA FROM change_flotila

     $sqlChange = "SELECT * FROM `change_flotila` ORDER BY `id` DESC LIMIT 3";
     $stmtChange = $conn->query($sqlChange);  
 
     //SET THE RESULTING ARRAY TO ASSOCIATIVE
 
     $resultChange = $stmtChange->fetchAll();
      