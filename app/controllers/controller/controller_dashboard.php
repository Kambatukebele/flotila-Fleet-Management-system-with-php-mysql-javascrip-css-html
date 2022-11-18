<?php 
    //LINK THE DATABASE CONNECTION
    require "../app/core/database.php"; 

    
 //   require "../app/core/security.php"; 
    // require_once 'security/security.php';

     //SHOWING ACTUAL DATE

     $actualDate = date('d-m-y');

     //PROFILE ADMIN 

    //  if(!empty($_SESSION['fullName'])){
    //      $_SESSION['fullName'];
    //  }

      // NEWS DRIVERS REGISTRATION AND CHANGED FLEET REGISTRATION
//    $activeDriver = "SELECT * FROM `registration_new_driver` ORDER BY `starting_date` DESC LIMIT 3";
   $activeDriver = "SELECT * FROM `registration_new_driver` ORDER BY id DESC LIMIT 10";
   $stmt = $conn->prepare($activeDriver);
   $stmt->execute();

   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//    $result = $stmt->fetchAll(); 

//    echo "<pre>";
//    print_r($result);
//    echo "</pre>";

   //SUM PAYMENT RECEIVED

   $sumReceived = $conn->prepare("SELECT SUM(received) FROM `payments`");
   // $sumReceived->fetchColumn();
   $sumReceived->execute();
   $sumReceivedResult = $sumReceived->setFetchMode(PDO::FETCH_ASSOC);
   foreach($sumReceived->fetchAll() as $reiCe =>$received){
       $receivedValue = htmlspecialchars($received['SUM(received)']);
   }
  
   //SUM PAYMENT SEND

   $sumSend = $conn->prepare("SELECT SUM(send_to_driver) FROM `payments`");
   // $sumReceived->fetchColumn();
   $sumSend->execute();
   $sumSendResult = $sumSend->setFetchMode(PDO::FETCH_ASSOC);
   foreach($sumSend->fetchAll() as $pay =>$send){
       $sendValue = htmlspecialchars($send['SUM(send_to_driver)']);
   }

     //SUM PAYMENT COMMISSION

     $sumCommission = $conn->prepare("SELECT SUM(commission) FROM `payments`");
     // $sumReceived->fetchColumn();
     $sumCommission->execute();
     $sumCommissionResult = $sumCommission->setFetchMode(PDO::FETCH_ASSOC);
     foreach($sumCommission->fetchAll() as $com =>$commission){
        $commissionValue = htmlspecialchars($commission['SUM(commission)']);
     }
  

 