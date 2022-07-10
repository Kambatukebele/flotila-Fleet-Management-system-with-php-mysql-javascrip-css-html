<?php 
    require_once 'database/database.php';
    require_once 'security/security.php';

       // //GET THE DATA IN THE URL 
    $idDriver = $_GET['detailsId'];
    // echo $idDriver;

    //FECTH DATA FROM REGISTER DRIVER
    $getData = $conn->prepare("SELECT * FROM `registration_new_driver` WHERE id = ?");
    $getData->execute(array($idDriver));
    $data = $getData->fetchAll(PDO::FETCH_ASSOC);
       
    foreach ($data as $drivers){
           $idDriver = htmlspecialchars($drivers['id']);
            $first_name = htmlspecialchars($drivers['first_name']);
            $last_name = htmlspecialchars($drivers['last_name']);
            $email = htmlspecialchars($drivers['email']);
            $phoneNumber = htmlspecialchars($drivers['phone_number']);
            $transportation = htmlspecialchars( $drivers['transportation']);
            $city = htmlspecialchars($drivers['city']);
            $kindOfRregistration = htmlspecialchars($drivers['kind-of-registration']);
            $bankAccount = htmlspecialchars($drivers['bank-account']);
            $approved = htmlspecialchars($drivers['approved']);
            $startingDate = htmlspecialchars($drivers['starting_date']);
            $registeredOn =htmlspecialchars( $drivers['date_of_submission']);
    }


    // RETRIVE DATA FROM PAYMENT TABLE
   //  $paymentStmt = $conn->prepare("SELECT * FROM `payments` WHERE paymentID = ?");
   //  $paymentStmt->execute(array($idDriver));
   //  $paymentStmtResult = $paymentStmt->fetchAll(PDO::FETCH_ASSOC);


   //PAGINATION

    //CACULATE TOTAL NUMBER OF PAGES
    $perPage = 10;
    $sql = $conn->prepare("SELECT COUNT(*) FROM `payments`");
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
    $sqlSelect = $conn->prepare("SELECT * FROM `payments` WHERE paymentID = ? ORDER BY `id` LIMIT $x, $y ");
    $sqlSelect->execute(array($idDriver));
    $paymentStmtResult = $sqlSelect->fetchAll();
   //  $stmt = $conn->prepare($sqlSelect);
   //  $stmt->execute();
   //  $drivers = $stmt->fetchAll();