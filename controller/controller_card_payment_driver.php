<?php 
    include 'database/database.php';

    $idDriver = $_GET['payId'];
    echo $idDriver;

    $getData = $conn->prepare("SELECT * FROM `registration_new_driver` WHERE id = ?");
    $getData->execute(array($idDriver));
    $data = $getData->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // echo print_r($data);
    // echo "</pre>";
    
    foreach ($data as $drivers){
           $idDriver = $drivers['id'];
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

    // // APPEND DATA TO PAYMENTS
    if (isset($_POST['save_payment'])){
      $periodFrom = htmlspecialchars(stripslashes(trim(strtolower($_POST['periodFrom']))));
      $received = htmlspecialchars(trim(strtolower(stripslashes($_POST['received']))));
      $sendToDriver = htmlspecialchars(trim(strtolower(stripslashes($_POST['sendToDriver']))));
      $commission = htmlspecialchars(trim(strtolower(stripslashes($_POST['commission']))));
      $comment = htmlspecialchars(stripslashes(trim(strtolower($_POST['comment']))));
      $status_payment = htmlspecialchars(stripcslashes(trim(strtolower($_POST['status_payment']))));
    //   $paymentId = $_POST['paymentID'];

    //INSERT DATA TO THE PAYMENT TABLE

        $dataPay = "INSERT INTO `payments` (period_of_date, received, send_to_driver, commission, status_payment, comment, paymentID) VALUES (:period_of_date, :received, :send_to_driver, :commission, :status_payment, :comment, :paymentID)";
        $stmt = $conn->prepare($dataPay);
        $stmt->execute
        (
            array
            (
                ':period_of_date'=>$periodFrom,
                ':received'=>$received,
                ':send_to_driver'=>$sendToDriver,
                ':commission'=>$commission,
                ':status_payment'=>$status_payment,
                ':comment'=>$comment,
                ':paymentID'=>$idDriver
            )
        );

        if($dataPay ==true){
            echo "<p style='color:green; text-align:center; font-size:16px'>". $success = $first_name. ' '. $last_name." has been payed successfully".'<br>'.'<br>';
            echo '<button class="upd" style="background-color:green; border:none; padding: 7px 9px;">'.'<a href="dashboard.php" style="color: white; text-decoration:none;">'.'Back to dashboard'.'</a>'.'</button>'.
            '<br>'.'<br>';
            echo "or".'<br>'.'<br>';
            echo '<button class="upd" style="background-color:green; border:none; padding: 7px 9px;">'.'<a href="dashboard.php" style="color: white; text-decoration:none;">'.'All Payment List'.'</a>'.'</button>'.
            '<br>'.'<br>';
        }
    }