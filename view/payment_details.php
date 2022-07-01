<?php include '../controller/controller_payment_details.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- =========== GOOGLE FONT ========== -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 
     <!-- =========== LINKING CSS ========== -->
     <link rel="stylesheet" href="../model/public/css/reset.css">
     <link rel="stylesheet" href="../model/public/css/style.css">
     <link rel="stylesheet" href="../model/public/css/drivers.css">

     <!-- ========== ICONS GOOGLE -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
     <!-- ========== FONT AWESOME ========== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Drivers</title>
</head>
<body>

    <!-- ========== TABLE USERS========== -->
    <div class="driver_list">
      
        <div class="driver_list_all">
            <h5>Payment for <?php echo $first_name. ' ' . $last_name; ?></h4>
            <br>

            <button class="upd" style="background-color:green; border:none; padding: 7px 9px;"><a href="dashboard.php" style="color: white; text-decoration:none;">Back to dashboard</a></button>
            <br><br>
            <table class="drivers">
                <tr>
                  <th>Date</th>
                  <th>Received</th>
                  <th>Send</th>
                  <th>Commission</th>
                  <th>Status</th>
                  <th>Comment</th>
                  <!-- <th>Action</th> -->
                </tr>
                <?php
                      foreach($paymentStmtResult as $details){
                        $detailsId = $details['paymentID'];
                        $periodDetails = $details['period_of_date'];
                        $received = $details['received'];
                        $send = $details['send_to_driver'];
                        $commission = $details['commission'];
                        $statusPay = $details['status_payment'];
                        $comment = $details['comment'];                        
                        echo   
                        '<tr>'.
                          '<td>'.$periodDetails.'</td>'.
                          '<td>'.$received.'</td>'.
                          '<td>'.$send.'</td>'.
                          '<td>'.$commission.'</td>'.
                          '<td class="colors">'.$statusPay.'</td>'.
                          '<td>'.$comment.'</td>'.
                       '</tr>';  
                    }
                
                ?>
                          
              </table>
        </div>
    </div>  
    
</body>
</html>