<?php 
   //LINK THE DATABASE CONNECTION
   require_once 'database/database.php';
   require_once 'security/security.php';
    // GET THE URL
   //SELECT ALL DATA FROM registration driver
    $sql = $conn->query("SELECT * FROM registration_new_driver ORDER BY `id` DESC");
    $stmt = $sql->fetchAll();
    