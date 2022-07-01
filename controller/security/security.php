<?php 
    include 'database/database.php';
    
    // SESSION VARIABLES
    // $_SESSION['email']
    // $_SESSION['password'] 
    // $_SESSION['fullName']

    if(!isset($_SESSION['email']) || !isset($_SESSION['fullName'])){
        header("Location:../../view/login_admin.php");
        die();
    }