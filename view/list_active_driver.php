<?php 
    include_once '../controller/controller_list_active_driver.php';
   
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "../model/includes/head_drivers/head_drivers.php"; ?>
<body>

    <!-- ========== TABLE USERS========== -->
    <div class="driver_list">
        <div class="driver_list_all">
        <button class="upd" style="background-color:green; border:none; padding: 7px 9px;"><a href="dashboard.php" style="color: white; text-decoration:none;">Back to dashboard</a></button>
            <br><br>
            <table class="drivers" style="width: 1300px;">
                <tr>
                  <th>Jméno</th>
                  <th>Příjmení</th>
                  <th>Bank_Account</th>
                  <th>Registration</th>
                  <th>Approved</th>
                  <th>Bag?</th>
                  <th>Signed</th>
                  <th>Starting</th>
                  <th>City</th>
                  <th>Type</th>
                  <th>Date</th>
                  
                  
                </tr>
                <?php
                    
                   foreach($stmt as $all_driver){

                         $id = $all_driver['id'];
                         $first_name = $all_driver['first_name'];
                         $lastName = $all_driver['last_name'];
                         $emailD = $all_driver['email'];
                         $phoneNumber = $all_driver['phone_number'];
                         $transportation = $all_driver['transportation'];
                         $all_driver['city'];
                         $all_driver['textplace'];
                         $all_driver['kind-of-registration'];
                         $bankAccount = $all_driver['bank-account'];
                         $approved = $all_driver['approved'];
                         $pickTheBag = $all_driver['pick_the_bag'];
                         $signed = $all_driver['signed'];
                         $startingDate = $all_driver['starting_date'];
                         $all_driver['return_deposit'];
                         $registeredToBolt = $all_driver['registered_to_bolt'];


                        //  if(!empty($firstNameD) && !empty($lastNameD) && !empty($emailD) && !empty($phoneNumberD) && !empty($cityD) && !empty($startDrivingD) && !empty($bankAccountD) && $approvedD =="YES" || $approvedD =="yes" && $pickTheBagD ==="YES" || $pickTheBagD ==="yes" && !empty($registrationBoltD ==="YES" || $registrationBoltD ==="yes")){

                         if (!empty($startingDate) && !empty($first_name) && !empty($lastName) && !empty($emailD) && !empty($phoneNumber) && !empty($transportation) && !empty($bankAccount) && $approved =="YES" || $approved =="yes" && $pickTheBag ==="YES" || $pickTheBag ==="yes" && !empty($registeredToBolt ==="YES" ||$registeredToBolt ==="yes")){
                            echo "<tr>";
                                echo "<td>".$all_driver['first_name']."</td>";
                                echo "<td>".$all_driver['last_name']."</td>";
                                echo "<td>".$all_driver['bank-account']."</td>";
                                echo "<td>".$all_driver['registered_to_bolt']."</td>";
                                echo "<td>".$all_driver['approved']."</td>";
                                echo "<td>".$all_driver['pick_the_bag']."</td>";
                                echo "<td>".$all_driver['signed']."</td>";
                                echo "<td>".$all_driver['starting_date']."</td>";
                                echo "<td>".$all_driver['city']."</td>";
                                echo  "<td>".$all_driver['kind-of-registration']."</td>";
                                echo "<td>".$all_driver['date_of_submission']."</td>";                           
                            echo "</tr>";
                          }
                  
                       
                   }                
                ?>
              </table>
        </div>
       
    </div>
   
</body>
</html>

