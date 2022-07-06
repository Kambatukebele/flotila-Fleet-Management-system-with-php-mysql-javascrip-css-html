<?php 
    require_once 'database/database.php';
    require_once 'security/security.php';

    // DISPLAY THE LIST OF ALL DRIVERS  
    $sql = $conn->query("SELECT * FROM `registration_new_driver` ORDER BY `id` DESC");
    $stmt = $sql->fetchAll();
