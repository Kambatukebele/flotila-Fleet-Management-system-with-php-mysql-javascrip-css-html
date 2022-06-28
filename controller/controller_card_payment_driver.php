<?php 
    include 'database/database.php';
    

    // JOIN TABLES registration_new_driver AND payments

    // look up records in one table and append data to another
    $table1 = $conn->prepare("SELECT id FROM `registration_new_driver`");
    $table1->execute();
    $row = $table1->fetchAll();
    foreach($row as $drivers){
      echo  $idRegisteredDriver = $drivers['id']."<br>";
    }

    // APPEND DATA TO PAYMENTS
    if (isset($_POST['save_payment'])){
      $periodFrom = htmlspecialchars(stripslashes(trim(strtolower($_POST['periodFrom']))));
      $received = htmlspecialchars(trim(strtolower(stripslashes($_POST['received']))));
      $sendToDriver = htmlspecialchars(trim(strtolower(stripslashes($_POST['sendToDriver']))));
      $commission = htmlspecialchars(trim(strtolower(stripslashes($_POST['commission']))));
      $comment = htmlspecialchars(stripslashes(trim(strtolower($_POST['comment']))));
      $status_payment = htmlspecialchars(stripcslashes(trim(strtolower($_POST['status_payment']))));

      $append = $conn->prepare("INSERT INTO `payments` (`paymentID`) VALUES ($idRegisteredDriver)");
      $append->execute([$idRegisteredDriver => $idRegisteredDriver]);

    }

   

    
    // $sql = 'SELECT * FROM `registration_new_driver`';
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();

    // // set the resulting array to associative

    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // foreach ($stmt->fetchAll() as $driver=>$drivers){
    //     $id = $drivers['id'];
    //     $first_name = $drivers['first_name'];
    //     $last_name = $drivers['last_name'];
    //     $email = $drivers['email'];
    //     $phoneNumber = $drivers['phone_number'];
    //     $transportation = $drivers['transportation'];
    //     $city = $drivers['city'];
    //     $kindOfRregistration = $drivers['kind-of-registration'];
    //     $bankAccount = $drivers['bank-account'];
    //     $approved = $drivers['approved'];
    //     $startingDate = $drivers['starting_date'];
    //     $registeredOn = $drivers['date_of_submission'];

       
    // }

       //SELECT ALL DATA FROM registration driver
    //    $sql = $conn->query("SELECT * FROM registration_new_driver");
    //    $stmt = $sql->fetchAll();
       
    //    foreach($stmt as $all_driver){
    //      $all_driver['id'];
    //      $first_name = $all_driver['first_name'];
    //      $lastName = $all_driver['last_name'];
    //      $emailD = $all_driver['email'];
    //      $phoneNumber = $all_driver['phone_number'];
    //      $transportation = $all_driver['transportation'];
    //      $city = $all_driver['city'];
    //      $textPlace = $all_driver['textplace'];
    //      $kindOfRegistration  = $all_driver['kind-of-registration'];
    //      $bankAccount = $_SESSION['bank-account'] = $all_driver['bank-account'];
    //      $approved = $all_driver['approved'];
    //      $pickTheBag = $all_driver['pick_the_bag'];
    //      $signed = $all_driver['signed'];
    //      $startingDate = $all_driver['starting_date'];
    //      $returnDeposit = $all_driver['return_deposit'];
    //      $registeredToBolt = $all_driver['registered_to_bolt'];
   
    //  }