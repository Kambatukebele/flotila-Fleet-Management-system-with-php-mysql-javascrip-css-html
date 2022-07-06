<?php 
    require_once 'database/database.php';
    require_once 'security/security.php';
    

    // HERE IS THE LIST OF ACTIVE DRIVERS

    $activeDriver = "SELECT * FROM `registration_new_driver`";
    $stmt = $conn->prepare($activeDriver);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 
