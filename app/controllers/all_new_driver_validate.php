<?php
    //LINK THE DATABASE CONNECTION
    require "../app/core/database.php"; 
    require "controller/controller_security.php"; 

   //get id in the link
   $validateId = $_GET['validateId']; 
  
      //SELECT ALL DATA FROM registration driver
    $sql = $conn->query("SELECT * FROM registration_new_driver WHERE id = $validateId");
    $stmt = $sql->fetchAll();

    if(isset($stmt))
    {

        $first_name = htmlspecialchars( $stmt[0]['first_name']); 
        $last_name = htmlspecialchars( $stmt[0]['last_name']); 
        $email = htmlspecialchars( $stmt[0]['email']); 
        $phone_number = htmlspecialchars( $stmt[0]['phone_number']); 
        $transportation = htmlspecialchars( $stmt[0]['transportation']); 
        $city = htmlspecialchars( $stmt[0]['city']); 
        $deposit = htmlspecialchars( $stmt[0]['deposit']); 
        $kind_of_registration = htmlspecialchars( $stmt[0]['kind_of_registration']); 
        $bank_account = htmlspecialchars( $stmt[0]['bank_account']); 
        $booked_date = htmlspecialchars( $stmt[0]['booked_date']); 
        $return_deposit = htmlspecialchars( $stmt[0]['return_deposit']); 


        // $sql = $conn->prepare("INSERT INTO adminFlotila (fullname, email, passwordCheck) VALUES (:fullname, :email, :passwordCheck)");

        // $sql->bindParam(':fullname', $fullName);
        // $sql->bindParam(':email', $email);
        // $sql->bindParam(':passwordCheck', $hashPassword);
        // $sql->execute();
        // header("Location:login_admin.php");

        $query_insert = $conn->prepare("INSERT INTO active_drivers(first_name,last_name,email,phone_number,transportation,city,deposit,kind_of_registration,bank_account,booked_date,return_deposit) VALUES ( '$first_name','$last_name','$email','$phone_number','$transportation','$city','$deposit','$kind_of_registration','$bank_account','$booked_date','$return_deposit')");

        $result = $query_insert->execute(); 


        if ($result)
        {
            $sqlDelete = "DELETE FROM registration_new_driver WHERE id = $validateId";
            $resultDelete = $conn->exec($sqlDelete);

            if($resultDelete ==true)
            {
                $_SESSION['first_name_validate'] = $stmt[0]['first_name'];
                $_SESSION['last_name_validate'] = $stmt[0]['last_name'];

                $_SESSION['message_validate'] = $_SESSION['first_name_validate'] . " " . $_SESSION['last_name_validate'] . " " . " has been validated!"; 
                header("location:dashboard");
                die; 
            }
        }
    }


 