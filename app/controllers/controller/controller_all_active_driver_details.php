<?php 
     //LINK THE DATABASE CONNECTION
     require "../app/core/database.php"; 
    // require_once 'security/security.php';

     //SHOWING ACTUAL DATE

     $view_detailsId = $_GET['view_detailId'];
     

     $getDriver = $conn->prepare("SELECT * FROM `active_drivers` WHERE id = ?");
    $getDriver->execute(array($view_detailsId));

    $result = $getDriver->fetchAll(PDO::FETCH_ASSOC);

