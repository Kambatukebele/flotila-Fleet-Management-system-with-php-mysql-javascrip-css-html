<?php 
    require_once 'database/database.php';
    require_once 'security/security.php';

    // DISPLAY THE LIST OF ALL DRIVERS  
    // $sql = $conn->query("SELECT * FROM `registration_new_driver` ORDER BY `id` DESC");
    // $stmt = $sql->fetchAll();

    //PAGINATION

    //CACULATE TOTAL NUMBER OF PAGES
    $perPage = 10;
    $sql = $conn->prepare("SELECT COUNT(*) FROM `registration_new_driver`");
    $sql->execute();
    $stmt = $sql->fetchColumn();
    $totalPages = ceil($stmt / $perPage);

    //echo "there are $totalPages drivers in total"."<br>";

    //GET ENTRY FOR THE CURRENT PAGE
    //USE $_GET["PAGE"]

    $pageNow = isset($_GET['page']) ? $_GET['page'] : 1;

   // echo "it is $pageNow now!";

    //SQL FETCH
    //$x is the offset
    //$y is the number of rows
    //E.G. LIMIT 0,10 - GET FIRST ENTRY TO 10TH
    //LIMIT 10,10 -GET 11TH ENTRY TO 20TH
    $x = ($pageNow - 1) * $perPage;
    $y = $perPage;
    $sqlSelect = "SELECT * FROM `registration_new_driver` ORDER BY `id` DESC LIMIT $x, $y";
    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute();
    $drivers = $stmt->fetchAll();

   