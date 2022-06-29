<?php include '../controller/controller_card_payment_driver.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../model/public/css/card_driver.css">
    <link rel="stylesheet" href="../model/public/css/style.css">
    <link rel="stylesheet" href="../model/public/css/reset.css">
    <title>card driver</title>
</head>
<body>
    <?php           

        // $id = $_GET['payId']. "<br>";
        // echo $id;
    ?>
    <div class="card_driver">
        <div class="card_driver_all">
            <div class="card_driver_details">
                <div class="card_driver_name">
                    <h2>Payment for  <?php echo $first_name . ' ' . $last_name; ?></h2>
                </div>
               
                <table class="card_driver_name_details">
                    <tr>
                        <th>CITY</th>
                        <td><?php echo $city; ?></td>
                        
                    </tr> 
                    <tr>
                        <th>BANK-ACCOUNT</th>
                        <td><?php echo $bankAccount; ?></td>
                    </tr> 
<!--                 
                    <tr>
                        <th>PICKED THE BAG?</th>
                        <td>lore5</td>
                    </tr>   -->
                    <!-- <tr>
                        <th>STARTING DATE</th>
                        <td>lore5</td>
                    </tr> -->
                    <tr>
                        <th>VEHICLE TYPE</th>
                        <td><?php echo $transportation; ?></td>
                    </tr>
                    <tr>
                        <th>EMAIL</th>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th>PHONE-NUMBER</th> 
                        <td><?php echo $phoneNumber; ?></td>
                    </tr>
                </table>

                 <!-- ========== BUTTONS UPDATE AND DELETE ========== -->
                <!-- <div class="update_delete">
                    <button class="update" type="submit">UPDATE</button>
                    <button class="delete" type="submit">DELETE</button>
                    <button class="modify" type="submit">MODIFY</button>
                </div> -->
                 

                <!-- ========== PAYMENT PROCESS ========== -->
               <div class="form_control">
                <form action="" method="POST">
                    <div class="left_side">
                         <div class="left">
                             <label for="period_of">Period From</label>
                             <input type="text" name="periodFrom" placeholder="Period of?">
                         </div>
                         <div class="right">
                             <label for="receid">Received From Bolt</label>
                             <input type="text" name="received" id="" placeholder="Received from Bolt">
                         </div>
                    </div>
                    <div class="left_side">
                         <div class="left">
                             <label for="sendToDriver">Send to Driver</label>
                             <input type="text" name="sendToDriver" placeholder="Send to Driver">
                         </div>
                         <div class="right">
                             <label for="commission">Commission</label>
                             <input type="text" name="commission" id="" placeholder="Our Commission">
                         </div>
                    </div>
                    <div class="left_side">
                         <div class="left">
                             <label for="comment">Comment</label>
                             <input type="text" name="comment" id="" placeholder="Leave some comments">
                         </div>
                         <div class="right">
                             <label for="satus">Status</label>
                             <select name="status_payment" id="">
                                 <option value="none" selected disabled>Choose</option>
                                 <option value="paid">PAID</option>
                                 <option value="not_working">NOT WORKING</option>
                                 <option value="quit">QUIT</option>
                             </select>
                         </div>
                    </div>
                    <div class="left_side">
                         <div class="left">
                             <!-- <label for="Driver Id">Driver Id</label> -->
                             <input type="hidden" name="paymentID" id="" placeholder="Driver Id">
                         </div>
                         <div class="right">
                            
                         </div>
                    </div>
                     <div class="left_side">
                         <button type="submit" name="save_payment">Save Payment</button>
                     </div>
                 </form>
               </div>
            </div>
        </div>
    </div>
</body>
</html>