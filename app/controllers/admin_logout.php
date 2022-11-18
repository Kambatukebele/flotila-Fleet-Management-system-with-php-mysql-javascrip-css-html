<?php
    require "../app/core/database.php";
    require "controller/controller_security.php"; 

    
    if(isset($_SESSION['fullname_admin_one']))
    {

        session_unset();
        session_destroy(); 

        header("location:login");

    }elseif(isset($_SESSION['fullname_admin_two'])){
        
        session_unset();
        session_destroy(); 

        header("location:login");
    }