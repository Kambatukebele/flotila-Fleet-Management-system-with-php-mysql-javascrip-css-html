<?php 
    require_once 'database/database.php';
    require_once 'security/security.php';

   if(isset(session_start())){
    session_unset();
    session_destroy();
    header("location:login.php");
   }
    