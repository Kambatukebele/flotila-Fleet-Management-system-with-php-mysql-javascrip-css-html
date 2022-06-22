<?php 
    include 'database/database.php';
    

    // DISPLAY THE LIST OF ALL DRIVERS  
    $sql = $conn->query("SELECT * FROM registration_new_driver");
    $stmt = $sql->fetchAll();
        
 
 
 
    
    