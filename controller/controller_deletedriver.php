<?php
     require_once 'database/database.php';
     require_once 'security/security.php';

     $id = $_GET['deleteid'];

     $sql = "DELETE FROM registration_new_driver WHERE id = $id";
     $conn->exec($sql);


?>