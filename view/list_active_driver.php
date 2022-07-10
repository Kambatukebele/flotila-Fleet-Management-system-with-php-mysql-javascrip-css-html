<?php 
    require_once '../controller/controller_list_active_driver.php';
   
?>

<!DOCTYPE html>
<html lang="en">
    <?php require_once "../model/includes/head_drivers/head_drivers.php"; ?>
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

                         $id = htmlspecialchars($all_driver['id']);
                         $first_name = htmlspecialchars($all_driver['first_name']);
                         $lastName = htmlspecialchars($all_driver['last_name']);
                         $emailD = htmlspecialchars($all_driver['email']);
                         $phoneNumber = htmlspecialchars($all_driver['phone_number']);
                         $transportation = htmlspecialchars($all_driver['transportation']);
                         htmlspecialchars($all_driver['city']);
                         htmlspecialchars($all_driver['textplace']);
                         htmlspecialchars($all_driver['kind-of-registration']);
                         $bankAccount = htmlspecialchars($all_driver['bank-account']);
                         $approved = htmlspecialchars($all_driver['approved']);
                         $pickTheBag = htmlspecialchars($all_driver['pick_the_bag']);
                         $signed = htmlspecialchars($all_driver['signed']);
                         $startingDate = htmlspecialchars($all_driver['starting_date']);
                         htmlspecialchars($all_driver['return_deposit']);
                         $registeredToBolt = htmlspecialchars($all_driver['registered_to_bolt']);


                        //  if(!empty($firstNameD) && !empty($lastNameD) && !empty($emailD) && !empty($phoneNumberD) && !empty($cityD) && !empty($startDrivingD) && !empty($bankAccountD) && $approvedD =="YES" || $approvedD =="yes" && $pickTheBagD ==="YES" || $pickTheBagD ==="yes" && !empty($registrationBoltD ==="YES" || $registrationBoltD ==="yes")){

                         if (!empty($startingDate) && !empty($first_name) && !empty($lastName) && !empty($emailD) && !empty($phoneNumber) && !empty($transportation) && !empty($bankAccount) && $approved =="YES" || $approved =="yes" && $pickTheBag ==="YES" || $pickTheBag ==="yes" && !empty($registeredToBolt ==="YES" ||$registeredToBolt ==="yes")){
                            echo "<tr>";
                                echo "<td>".htmlspecialchars($all_driver['first_name'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['last_name'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['bank-account'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['registered_to_bolt'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['approved'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['pick_the_bag'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['signed'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['starting_date'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['city'])."</td>";
                                echo  "<td>".htmlspecialchars($all_driver['kind-of-registration'])."</td>";
                                echo "<td>".htmlspecialchars($all_driver['date_of_submission'])."</td>";                           
                            echo "</tr>";
                          }

                   }                
                ?>
              </table>
        </div>
       
    </div>
    <div class="pagination" style="display:flex; justify-content:center; background-color: rgba(128, 128, 128, 0.26);">
            <?php
                for($i=1; $i<=$totalPages; $i++){
                    printf("<a style='padding:5px;' href='all-driver.php?page=%u'>%u</a>", $i, $i);
                }
            ?>
    </div>
   
</body>
</html>

