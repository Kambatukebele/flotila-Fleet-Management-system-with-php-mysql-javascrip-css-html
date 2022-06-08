<?php 
    //LINK THE DATABASE CONNECTION
    include 'database/database.php';

    //FETCH DATA FROM registration_new_driver

    $sql = "SELECT * FROM registration_new_driver";
    $stmt = $conn->query($sql);
    

    //SET THE RESULTING ARRAY TO ASSOCIATIVE

    $result = $stmt->fetchAll();
    foreach($result as  $list => $newDriver){
        $driverFirstName = $newDriver["first_name"];
        $driverlastName = $newDriver["last_name"];
        $driverEmail = $newDriver["email"];
        $driverPhoneNumber = $newDriver["phone_number"];
        $driverTransportation = $newDriver["transportation"];
        $driverCity = $newDriver["city"];
        $driverTextPlace= $newDriver["textplace"];
    }

    $conn = null;
    