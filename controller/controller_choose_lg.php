<?php 
    session_start();
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = "cz";
    }elseif(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] &&  !empty($_GET['lang'])){
        if($_GET['lang'] == "cz"){
            $_SESSION['lang'] = "cz";
        }else{
            $_SESSION['lang'] = "en";
        }
    }

    