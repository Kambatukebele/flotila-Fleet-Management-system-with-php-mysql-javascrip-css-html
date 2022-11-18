<?php 
      //LINK THE DATABASE CONNECTION
      require "../app/core/database.php"; 

     //SHOWING ACTUAL DATE

     $actualDate = date('d-m-y');   

    //PAGINATION

    //CACULATE TOTAL NUMBER OF PAGES
    $perPage = 10;
    $sql = $conn->prepare("SELECT COUNT(*) FROM `active_drivers`");
    $sql->execute();
    $stmtP = $sql->fetchColumn();
    $totalPages = ceil($stmtP / $perPage);

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
    $sqlSelect = "SELECT * FROM `active_drivers` ORDER BY `id` DESC LIMIT $x, $y";
    $stmtP = $conn->prepare($sqlSelect);
    $stmtP->execute();
    $drivers = $stmtP->fetchAll();