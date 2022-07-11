<?php 
    require_once 'database/database.php';
    require_once 'security/security.php';

    session_start();
    session_unset();
    session_destroy();