<?php 
   require "../app/core/database.php"; 
   // require_once 'security/security.php';

    $pay_nowId = $_GET['pay_nowId'];
    
  

    $getData = $conn->prepare("SELECT * FROM `active_drivers` WHERE id = ?");
    $getData->execute(array($pay_nowId));
    $data = $getData->fetchAll(PDO::FETCH_ASSOC);

    // APPEND DATA TO PAYMENTS
    if (isset($_POST['save_payment'])){
      $periodFrom = htmlspecialchars(stripslashes(trim(strtolower($_POST['periodFrom']))));
      $received = htmlspecialchars(trim(strtolower(stripslashes($_POST['received']))));
      $sendToDriver = htmlspecialchars(trim(strtolower(stripslashes($_POST['sendToDriver']))));
      $commission = htmlspecialchars(trim(strtolower(stripslashes($_POST['commission']))));
      $comment = htmlspecialchars(stripslashes(trim(strtolower($_POST['comment']))));
      $status_payment = htmlspecialchars(stripcslashes(trim(strtolower($_POST['status_payment']))));
    //   $paymentId = $_POST['paymentID'];

    //INSERT DATA TO THE PAYMENT TABLE

        $dataPay = "INSERT INTO `payment_drivers` (period_of_date, received, send_to_driver, commission, status_payment, comment, paymentID) VALUES (:period_of_date, :received, :send_to_driver, :commission, :status_payment, :comment, :paymentID)";
        $stmt = $conn->prepare($dataPay);
        $result = $stmt->execute
        (
            array
            (
                ':period_of_date'=>$periodFrom,
                ':received'=>$received,
                ':send_to_driver'=>$sendToDriver,
                ':commission'=>$commission,
                ':status_payment'=>$status_payment,
                ':comment'=>$comment,
                ':paymentID'=>$pay_nowId 
            )
        );

        if($result){
           

            //strtoupper($data[0]['first_name']). ' '. strtoupper($data[0]['last_name']
            $_SESSION[0]['first_name'] = $data[0]['first_name']; 
            $_SESSION[0]['last_name'] = $data[0]['last_name']; 
            $_SESSION['payment_succeed'] = ucfirst($_SESSION[0]['first_name']) . " " . $_SESSION[0]['last_name'] . " " . "has been payed successfully!";
            header("Location:all_active_driver_payment"); 
            die; 
        }
    }