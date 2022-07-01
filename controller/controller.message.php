<?php 
   //LINK THE DATABASE CONNECTION
   include 'database/database.php';
   include 'security/security.php';
      //SELECT ALL DATA FROM registration driver
    $sql = $conn->query("SELECT * FROM registration_new_driver WHERE id = $id");
    $stmt = $sql->fetchAll();