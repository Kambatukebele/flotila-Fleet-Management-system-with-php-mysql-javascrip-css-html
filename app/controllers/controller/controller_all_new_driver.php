<?php 
     //LINK THE DATABASE CONNECTION
     require "../app/core/database.php"; 
  
    $Id = $_GET['detailsId']; 
    
    $getDriver = $conn->prepare("SELECT * FROM `registration_new_driver` WHERE id = ?");
    $getDriver->execute(array($Id));

    $result = $getDriver->fetchAll(PDO::FETCH_ASSOC);

    
   
   
   

