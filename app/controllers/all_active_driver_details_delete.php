<?php
     require "../app/core/database.php"; 
     require "controller/controller_security.php"; 

     $deleteId = $_GET['deleteId']; 

     //SELECT DRIVER FORM ACTIVE DRIVER TABLE

     $stmt = $conn->prepare("SELECT * FROM active_drivers WHERE id = $deleteId"); 
     $stmt->execute(); 
     $resultSelect = $stmt->fetchAll(); 

    //  echo "<pre>";
    //  print_r($resultSelect);
    //  echo "</pre>";

     //select payment driver table

     $stmt2 = $conn->prepare("SELECT * FROM payment_drivers WHERE paymentID = $deleteId"); 
     $stmt2->execute(); 
     $resultSelect2 = $stmt2->fetchAll(); 

    //  echo "<pre>";
    //  print_r($resultSelect2);
    //  echo "</pre>";

    if(isset($resultSelect) && isset ($resultSelect2)):

        if($resultSelect):
            $id = $resultSelect[0]['id']; 
            $first_name = $resultSelect[0]['first_name']; 
            $last_name = $resultSelect[0]['last_name'];
            $email = $resultSelect[0]['email'];
            $phone_number = $resultSelect[0]['phone_number'];
            $transportation = $resultSelect[0]['transportation'];
            $city = $resultSelect[0]['city'];
            $kind_of_registration = $resultSelect[0]['kind_of_registration'];
            $bank_account = $resultSelect[0]['bank_account'];
            $booked_date = $resultSelect[0]['booked_date'];
            $return_deposit = $resultSelect[0]['return_deposit'];
            $contract_signed = $resultSelect[0]['contract_signed'];
        endif;
    
        if($resultSelect2):
            // echo "<pre>";
            // print_r($resultSelect2);
            // echo "</pre>";
           foreach($resultSelect2 as $row):
                
                $period_of = $row['period_of_date'];  
                $received = $row['received']; 
                $send = $row['send_to_driver']; 
                $commission = $row['commission']; 
                $comment = $row['comment']; 
                $status_payment = $row['status_payment']; 

                //save data in deleted table driver

                $queryDelete_insert = $conn->prepare("INSERT INTO delete_payment_drivers (period_of_date,received,send_to_driver,commission,comment,status_payment, first_nameID, last_nameID) VALUES ('$period_of', '$received', '$send', '$commission', '$comment', '$status_payment', '$first_name', '$last_name')"); 
                $queryDelete_insert->execute(); 
            endforeach; 
        endif; 

             // delete drivers
   
        $sql = "DELETE FROM active_drivers WHERE id = $deleteId";
        $result = $conn->exec($sql);

        if($result ==true)
        {
            $_SESSION['first_name_delete'] = $first_name; 
            $_SESSION['last_name_delete'] = $last_name; 
            
            $_SESSION['message_delete'] = $_SESSION['first_name_delete'] . " " . $_SESSION['last_name_delete'] . " " . "has been deleted from the active drivers table!"; 
            header("location:all_active_driver");
        }
    
    endif;

    
    
