<?php 
    require "../app/core/database.php"; 
   // require_once 'security/security.php';

       // //GET THE DATA IN THE URL 
    $update_payment_detailsId = htmlspecialchars($_GET['update_payment_detailsId']);

     //SELECT ALL DATA FROM registration driver
     $sql = $conn->query("SELECT * FROM payment_drivers WHERE id = $update_payment_detailsId ");
     $stmt = $sql->fetchAll();

   if(isset($_POST['save_payment']))
   {
        $periodFrom = htmlspecialchars(stripslashes(trim(strtolower($_POST['periodFrom']))));
        $received = htmlspecialchars(trim(strtolower(stripslashes($_POST['received']))));
        $sendToDriver = htmlspecialchars(trim(strtolower(stripslashes($_POST['sendToDriver']))));
        $commission = htmlspecialchars(trim(strtolower(stripslashes($_POST['commission']))));
        $comment = htmlspecialchars(stripslashes(trim(strtolower($_POST['comment']))));
        $status_payment = htmlspecialchars(stripcslashes(trim(strtolower($_POST['status_payment']))));

        $updateDriver = $conn->prepare("UPDATE `payment_drivers` SET
       `id` = $update_payment_detailsId,
       `period_of_date`= '$periodFrom',
       `received`='$received',
       `send_to_driver`='$sendToDriver',
       `commission`='$commission',
       `status_payment`= '$status_payment',
       `comment`= '$comment' WHERE `id`= $update_payment_detailsId");

       $result = $updateDriver->execute();

       if($result){
            $success = "The Update has been done with success!"; 
       }
   }
   