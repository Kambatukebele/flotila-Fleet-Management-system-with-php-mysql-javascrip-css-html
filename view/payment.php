<?php include '../controller/controller_payment.php'; ?>
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

    <!-- ========== TABLE USERS========== -->
    <div class="driver_list">
        <div class="driver_list_all">
            <table class="drivers">
                <tr>
                  <th>Jméno</th>
                  <th>Příjmení</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>City</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                <?php
                     foreach($stmt->fetchAll() as $driver=>$row){
                       $idDriver = $row['id'];
                       $firstNameD = $row['first_name'];
                       $lastNameD = $row['last_name'];
                       $emailD = $row['email'];
                       $phoneNumberD = $row['phone_number'];
                       $cityD = $row['city'];
                       $typeOfD = $row['kind-of-registration'];
                       $startDrivingD = $row['starting_date'];

                    echo
                        '<tr>'.
                          '<td>'.$firstNameD.'</td>'.
                          '<td>'.$lastNameD.'</td>'.
                          '<td>'.$emailD.'</td>'.
                          '<td>'.$phoneNumberD.'</td>'.
                          '<td>'.$cityD.'</td>'.
                          '<td>'.$typeOfD.'</td>'.
                          '<td>'.
                            '<button class="upd">'.'<a href="card_payment_driver.php?payId='.$idDriver.'">'.'Payment'.'</a>'.'</button>'.                    
                          '</td>'.
                        '</tr>';

                  }

                  
                
                ?>
                
              </table>
        </div>
    </div>  

    </body>
    </html>