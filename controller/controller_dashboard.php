<?php 
     //LINK THE DATABASE CONNECTION
     include 'database/database.php';

     //SHOWING ACTUAL DATE

     $actualDate = date('d-m-y');

     //PROFILE ADMIN 

     if(!empty($_SESSION['fullName'])){
        echo $_SESSION['fullName'];
     }

      // FOR ACTIVE DRIVERS LIST
   $activeDriver = "SELECT * FROM `registration_new_driver` ORDER BY `id` DESC LIMIT 3";
   $stmt = $conn->prepare($activeDriver);
   $stmt->execute();

   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
