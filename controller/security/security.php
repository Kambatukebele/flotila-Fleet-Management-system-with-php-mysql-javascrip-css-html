<?php 
    // SESSION VARIABLES
    if(!isset($_SESSION['email']) || !isset($_SESSION['fullName'])){
        header("Location:login_admin.php");
       die();
    }