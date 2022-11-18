<?php
    //LINK THE DATABASE CONNECTION
    require "../app/core/database.php"; 
    $updateId = $_GET['updateId'];
   
     //SELECT ALL DATA FROM registration driver
     $sql = $conn->query("SELECT * FROM registration_new_driver WHERE id = $updateId");
     $stmt = $sql->fetchAll();

    

    if (isset($_POST['submit']))
    {
      
       $first_name =  htmlspecialchars($_POST['first_name']); 
       $last_name = htmlspecialchars($_POST['last_name']); 
       $email = htmlspecialchars($_POST['email']); 
       $phone_number =htmlspecialchars($_POST['phone_number']); 
       $bank_account =  htmlspecialchars($_POST['bank_account']); 
       $booked_date = htmlspecialchars($_POST['booked_date']); 
       $deposit = htmlspecialchars($_POST['deposit']); 
       $return_deposit = htmlspecialchars($_POST['return_deposit']); 
       $kind_of_registration =  htmlspecialchars($_POST['kind_of_registration']); 
       $sent_registration =  htmlspecialchars($_POST['send_registration']); 
       $message = htmlspecialchars($_POST['message']); 
       $city =  htmlspecialchars($_POST['city']); 

       $updateDriver = $conn->prepare("UPDATE `registration_new_driver` SET
       `id` = $updateId,
       `first_name`= '$first_name',
       `last_name`='$last_name',
       `email`='$email',
       `phone_number`='$phone_number',
       `city`= '$city',
       `textplace`= '$message',
       `deposit` = '$deposit',
        `kind_of_registration` = '$kind_of_registration',
       `bank_account`='$bank_account',
       `booked_date` = '$booked_date',       
       `return_deposit`= '$return_deposit',
       `sent_registration`= '$sent_registration' WHERE `id`= $updateId");

       $result = $updateDriver->execute();

       if($result){

           
            header("Location:all_new_driver?detailsId=$updateId");
            $_SESSION['success_update'] = " has been updated sucessfully!"; 
            exit; 
       }
    }
