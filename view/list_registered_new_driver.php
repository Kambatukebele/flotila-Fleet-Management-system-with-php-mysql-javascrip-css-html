<?php include '../controller/controller_list_registered_new_driver.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../model/includes/head/head.php'; ?>
    </head>
    <body>
         <!-- ========== HEADER NAVIGATION ========== -->
    <?php include '../model/includes/navigation/header.php' ?>  
    <!-- ========== END OF HIDDEN HEADER NAVIGATION ========== -->
    <!-- ========== LIST DRIVER TABLE ========== -->

    <div class="list_new_driver">
        <div class="list_new_driver_all">
            <div class="list_new_drivers_title">
                <h2>List of new drivers</h2>
            </div>
            <div class="list_new_driver_table">
                <table>
                    <tr>
                        <th>Jméno</th>
                        <th>Příjmení</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Dopravní prostředek</th>
                        <th>Město</th>
                        <th>Zpráva</th>
                    </tr>

                    <?php

                        foreach($result as  $list => $newDriver){
                            $driverFirstName = $newDriver["first_name"];
                            $driverlastName = $newDriver["last_name"];
                            $driverEmail = $newDriver["email"];
                            $driverPhoneNumber = $newDriver["phone_number"];
                            $driverTransportation = $newDriver["transportation"];
                            $driverCity = $newDriver["city"];
                            $driverTextPlace= $newDriver["textplace"];
                       

                            echo "<tr>".
                            "<td>".$driverFirstName."</td>".
                            "<td>".$driverlastName."</td>".
                            "<td>".$driverEmail."</td>".
                            "<td>".$driverPhoneNumber."</td>".
                            "<td>".$driverTransportation."</td>".
                            "<td>".$driverCity."</td>".
                            "<td>".$driverTextPlace."</td>".
                    
                        "</tr>";
                         }
                    ?>                
                </table>
            </div>
        </div>

    </div>























     <!-- ========== FOOTER ========== -->
     <?php include '../model/includes/footer/footer.php'; ?>
    </body>
</html>