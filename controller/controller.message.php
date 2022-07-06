<?php 
   //LINK THE DATABASE CONNECTION
   require_once 'database/database.php';
   require_once 'security/security.php';
      //SELECT ALL DATA FROM registration driver
    $sql = $conn->query("SELECT * FROM registration_new_driver WHERE id = $id");
    $stmt = $sql->fetchAll();