<?php
    //LINK THE DATABASE CONNECTION
    require "../app/core/database.php"; 
    $updateId = $_GET['updateId'];
   
     //SELECT ALL DATA FROM registration driver
     $sql = $conn->query("SELECT * FROM active_drivers WHERE id = $updateId");
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
       $transportation =  htmlspecialchars($_POST['transportation']); 
       $contract = htmlspecialchars($_POST['contract_signed']); 
       $city =  htmlspecialchars($_POST['city']); 

       $updateDriver = $conn->prepare("UPDATE `active_drivers` SET
       `id` = $updateId,
       `first_name`= '$first_name',
       `last_name`='$last_name',
       `email`='$email',
       `phone_number`='$phone_number',
       `transportation` = '$transportation',
       `city`= '$city',
       `deposit` = '$deposit',
        `kind_of_registration` = '$kind_of_registration',
       `bank_account`='$bank_account',
       `booked_date` = '$booked_date',       
       `return_deposit`= '$return_deposit',
       `contract_signed`= '$contract' WHERE `id`= $updateId");

       $result = $updateDriver->execute();

       if($result){

           
            header("Location:all_active_driver_details?view_detailId=$updateId");
            $_SESSION['success_update'] = " has been Update sucessfully!"; 
            exit; 
       }
    }

    
