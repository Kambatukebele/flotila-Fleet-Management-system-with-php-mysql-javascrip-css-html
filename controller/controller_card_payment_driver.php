<?php 
    include 'database/database.php';
    

    //GET PAYMENT URL
    $id = $_GET['payId'];
    echo $id;
    //FECTCH LIST OF DRIVER
    $sql = 'SELECT * FROM `registration_new_driver`';
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // set the resulting array to associative

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($stmt->fetchAll() as $driver=>$drivers){
        $id = $drivers['id'];
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