<?php
    //LINK THE DATABASE CONNECTION
    require "../app/core/database.php"; 
    require "controller/controller_security.php"; 
    //$updateId = $_GET['updateId'];
   
     //SELECT ALL DATA FROM registration driver
     $sql = $conn->prepare("SELECT * FROM active_drivers WHERE first_name LIKE '%".$_POST['name'] ."%'");
     $sql->execute();

     $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

    //  print_r($result); 

     foreach($sql->fetchAll() as $row)
     {
         echo
             '<tr>' .
                 '<td>' . $row['first_name'] .' '. $row['last_name'] . '</td>'.
                
                 '<td>' .$row['email'] . '</td>'.
                 '<td>' .$row['phone_number'] . '</td>'.
                 '<td>' .
                     '<a href="all_active_driver_view_payment_driver?view_paymentId='.$row['id'].'" class="btn btn-primary btn-icon-split">
                         <span class="icon text-white-50">
                             <i class="fas fa-check"></i>
                         </span>
                         <span class="text">View Payments</span>
                     </a>'. " ".
                     '<a href="all_active_driver_payment_pay_driver_now?pay_nowId='.$row['id'].'" class="btn btn-success btn-icon-split">
                     <span class="icon text-white-50">
                         <i class="fas fa-check"></i>
                     </span>
                     <span class="text">Pay Now!</span>
                 </a>'. " ".
                     
                     
                 '</td>'.
             '</tr>';
     }  
     