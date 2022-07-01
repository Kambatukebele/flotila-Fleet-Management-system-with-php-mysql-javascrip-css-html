<?php 
    include 'database/database.php';
    include 'security/security.php';

       // //GET THE DATA IN THE URL 
    $idDriver = $_GET['detailsId'];
    // echo $idDriver;

    //FECTH DATA FROM REGISTER DRIVER
    $getData = $conn->prepare("SELECT * FROM `registration_new_driver` WHERE id = ?");
    $getData->execute(array($idDriver));
    $data = $getData->fetchAll(PDO::FETCH_ASSOC);
       
    foreach ($data as $drivers){
           $idDriver = $drivers['id'];
            $first_name = $drivers['first_name'];
            $last_name = $drivers['last_name'];
            $email = $drivers['email'];
            $phoneNumber = $drivers['phone_number'];
            $transportation = $drivers['transportation'];
            $city = $drivers['city'];
            $kindOfRregistration = $drivers['kind-of-registration'];
            $bankAccount = $drivers['bank-account'];
            $approved = $drivers['approved'];
            $startingDate = $drivers['starting_date'];
            $registeredOn = $drivers['date_of_submission'];
    }


    // RETRIVE DATA FROM PAYMENT TABLE
    $paymentStmt = $conn->prepare("SELECT * FROM `payments` WHERE paymentID = ?");
    $paymentStmt->execute(array($idDriver));
    $paymentStmtResult = $paymentStmt->fetchAll(PDO::FETCH_ASSOC);
  

    // echo "<pre>";
    // echo print_r($paymentStmtResult);
    // echo "</pre>";
    