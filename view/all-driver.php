<?php include '../controller/controller_all-driver.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <?php include "../model/includes/head_drivers/head_drivers.php"; ?>
<body>

    <!-- ========== TABLE USERS========== -->
    <div class="driver_list">
        <div class="driver_list_all">
            <table class="drivers">
                <tr>
                  <th>Jméno</th>
                  <th>Příjmení</th>
                  <th>City</th>
                  <th>Type</th>
                  <th>Date</th>
                  <th>completed?</th>
                  <th>Action</th>
                </tr>
                <?php
                   foreach($stmt as $all_driver){
                         $id = $all_driver['id'];
                         $all_driver['first_name'];
                         $all_driver['last_name'];
                         $all_driver['email'];
                         $all_driver['phone_number'];
                         $all_driver['transportation'];
                         $all_driver['city'];
                         $all_driver['textplace'];
                         $all_driver['kind-of-registration'];
                         $all_driver['bank-account'];
                         $all_driver['approved'];
                         $all_driver['pick_the_bag'];
                         $all_driver['signed'];
                         $all_driver['starting_date'];
                         $all_driver['return_deposit'];
                         $all_driver['registered_to_bolt'];
                                               
                       
                        echo "<tr>";
                        echo "<td>".$all_driver['first_name']."</td>";
                        echo "<td>".$all_driver['last_name']."</td>";
                        echo     "<td>".$all_driver['city']."</td>";
                       echo      "<td>".$all_driver['kind-of-registration']."</td>";
                        echo    "<td>".$all_driver['date_of_submission']."</td>";
                       echo     "<td>"."yes"."</td>";
                        echo    "<td>";
                        echo '<button class="upd">'.'<a href="updatedriver.php?updateid='.$id.'">'.'Update'.'</a>'."</button>";
                         echo  '<button class="del">'.'<a href="deletedriver.php=">'.'Delete'.'</a>'."</button>";
                         echo   "</td>";
                        echo "</tr>";
                   }                
                ?>
              </table>
        </div>
    </div>
</body>
</html>
