<?php 
   //LINK THE DATABASE CONNECTION
   include 'database/database.php';
    // GET THE URL
    $id = $_GET['updateid'];
    

    //SELECT ALL DATA FROM registration driver
    $sql = $conn->query("SELECT * FROM registration_new_driver WHERE id = $id");
    $stmt = $sql->fetchAll();
    
    foreach($stmt as $all_driver){
      $all_driver['id'];
      $first_name = $all_driver['first_name'];
      $lastName = $all_driver['last_name'];
      $emailD = $all_driver['email'];
      $phoneNumber = $all_driver['phone_number'];
      $transportation = $all_driver['transportation'];
      $city = $all_driver['city'];
      $textPlace = $all_driver['textplace'];
      $kindOfRegistration  = $all_driver['kind-of-registration'];
      $bankAccount = $_SESSION['bank-account'] = $all_driver['bank-account'];
      $approved = $all_driver['approved'];
      $pickTheBag = $all_driver['pick_the_bag'];
      $signed = $all_driver['signed'];
      $startingDate = $all_driver['starting_date'];
      $returnDeposit = $all_driver['return_deposit'];
      $registeredToBolt = $all_driver['registered_to_bolt'];

  }
  if(isset($_POST['upgradeDriver'])){
  
    //CREATING VARIABLE FOR ALL INPUTS FIELDS
     
    $first_nameDriver = htmlspecialchars(stripslashes(trim(strtolower($_POST['firstname']))));
    $lastNameDriver = htmlspecialchars(stripslashes(trim(strtolower($_POST['lastname']))));
    $emailDriver = htmlspecialchars(stripslashes(trim(strtolower($_POST['email']))));
    $phoneNumberDriver = htmlspecialchars(stripslashes(trim($_POST['phone_number'])));
    $transportationDriver = htmlspecialchars(stripslashes(trim($_POST['transportation'])));
    $cityDriver = htmlspecialchars(stripslashes(trim($_POST['city'])));
    $textPlaceDriver = htmlspecialchars(stripslashes(strtolower($_POST['textarea'])));
   
    $bankAccountDriver = htmlspecialchars(stripslashes(trim($_POST['bank-account'])));
    $registeredToBoltDriver = htmlspecialchars(stripslashes(trim($_POST['registered-to-bolt'])));
     $approvedDriver = htmlspecialchars(stripslashes(trim($_POST['approved'])));
     $pickTheBagDriver = htmlspecialchars(stripslashes(trim($_POST['pick_the_bag'])));
     $signedDriver = htmlspecialchars(stripslashes(trim($_POST['signed'])));
     $startingDateDriver = htmlspecialchars(stripslashes(trim($_POST['starting-date'])));
     $returnDepositDriver = htmlspecialchars(stripslashes(trim($_POST['return-deposit'])));

      
    $updateDriverRow = $conn->prepare("UPDATE `registration_new_driver` SET
    `id` = $id,
    `first_name`= '$first_nameDriver',
    `last_name`='$lastNameDriver',
    `email`='$emailDriver',
    `phone_number`='$phoneNumberDriver',
    `transportation`='$transportationDriver',
    `city`= '$cityDriver',
    `textplace`= '$textPlaceDriver',
    `bank-account`='$bankAccountDriver',
    `approved`= '$approvedDriver',
    `pick_the_bag`='$pickTheBagDriver',
    `signed`= '$signedDriver',
    `starting_date`='$startingDateDriver',
    `return_deposit`= '$returnDepositDriver',
    `registered_to_bolt`= '$registeredToBoltDriver' WHERE `id`= $id");
   
    $resultUpd = $updateDriverRow->execute();
    if( $resultUpd === true){
      header("Location:all-driver.php");
    }
  }
