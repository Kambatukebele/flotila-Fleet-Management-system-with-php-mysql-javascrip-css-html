<?php 
    //SESSION VARIABLES
    if (isset($_SESSION['email_admin_one']) || isset($_SESSION['email_admin_two']) && isset($_SESSION['fullname_admin_one']) || isset($_SESSION['fullname_admin_two'])){
    //     header("Location:dashboard");
    //    die();
    }else{
        header("Location:login");
        die();
    }
