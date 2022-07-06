<?php require_once '../controller/controller_payment.php'; ?>
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
        <button class="upd" style="background-color:green; border:none; padding: 7px 9px;"><a href="dashboard.php" style="color: white; text-decoration:none;">Back to dashboard</a></button>
            <br><br>
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
                       $idDriver =  htmlspecialchars($row['id']);
                       $firstNameD =  htmlspecialchars($row['first_name']);
                       $lastNameD =  htmlspecialchars($row['last_name']);
                       $emailD =  htmlspecialchars($row['email']);
                       $phoneNumberD =  htmlspecialchars($row['phone_number']);
                       $cityD =  htmlspecialchars($row['city']);
                       $typeOfD =  htmlspecialchars($row['kind-of-registration']);
                       $startDrivingD =  htmlspecialchars($row['starting_date']);

                    echo
                        '<tr>'.
                          '<td>'.$firstNameD.'</td>'.
                          '<td>'.$lastNameD.'</td>'.
                          '<td>'.$emailD.'</td>'.
                          '<td>'.$phoneNumberD.'</td>'.
                          '<td>'.$cityD.'</td>'.
                          '<td>'.$typeOfD.'</td>'.
                          '<td>'.
                            '<button class="del" style="background-color:red;padding: 3px 7px;margin-right: 9px;">'.'<a style="color:white;" href="payment_details.php?detailsId='.$idDriver.'">'.'Details'.'</a>'.'</button>'.
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