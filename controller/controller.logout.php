<?php 
    require_once 'database/database.php';
    require_once 'security/security.php';

   if(isset($_SESSION['fullName'])){
    session_unset();
    session_destroy();
    header("location:../view/login_admin.php");
   }
    