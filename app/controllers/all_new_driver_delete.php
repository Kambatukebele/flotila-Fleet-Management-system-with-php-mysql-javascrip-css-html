<?php
    require "../app/core/database.php"; 
    require "controller/controller_security.php"; 

     $deleteId = $_GET['deleteId']; 


    //select 

    $query = $conn->prepare("SELECT * FROM registration_new_driver WHERE id = $deleteId"); 
    $resultQuery = $query->execute();


    $resultQuery = $query->setFetchMode(PDO::FETCH_ASSOC); 
    $resultQueryF = $query->fetchAll(); 

    if ($resultQueryF)
    {
        $first_name = $resultQueryF[0]['first_name']; 
        $last_name = $resultQueryF[0]['last_name']; 


        $sql = "DELETE FROM registration_new_driver WHERE id = $deleteId";
        $result = $conn->exec($sql);

        if($result ==true)
        {
            $_SESSION['first_name_delete_new'] = $first_name; 
            $_SESSION['last_name_delete_new'] = $last_name; 
                    
            $_SESSION['message_delete_new'] = $_SESSION['first_name_delete_new'] . " " . $_SESSION['last_name_delete_new'] . " " . "has been deleted from the new drivers table!"; 
            header("location:dashboard");
        }



    }



    
   