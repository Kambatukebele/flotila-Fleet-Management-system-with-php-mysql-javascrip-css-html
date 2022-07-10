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
    <style>
      body{
        background-color: rgba(128, 128, 128, 0.26);
        font-family: 'Poppins', sans-serif;
      }
    </style>
</head>
<body>

    <!-- ========== TABLE USERS========== -->
    <div class="driver_list">
    
        <div class="driver_list_all">
        <button class="upd" style="background-color:green; border:none; padding: 7px 9px;"><a href="dashboard.php" style="color: white; text-decoration:none;">Back to dashboard</a></button>
            <br><br>
            <table class="drivers" style="width:1000px;-webkit-box-shadow: 5px 5px 15px 5px #A8A8A8; 
box-shadow: 5px 5px 15px 5px #A8A8A8;">
                <tr style="background-color:#27B973;">
                  <th>Jméno</th>
                  <th>Příjmení</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>City</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                <?php
                     foreach($drivers as $row){
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
                            '<button class="upd" style="background-color:#27B973;padding: 3px 7px;margin-right: 9px;>'.'<a href="card_payment_driver.php?payId='.$idDriver.'">'.'Payment'.'</a>'.'</button>'.                    
                          '</td>'.
                        '</tr>';
                   }
                ?>
                
              </table>
        </div>
    </div>  
    <div class="pagination" style="display:flex; justify-content:center; background-color: rgba(128, 128, 128, 0.26);">
            <?php
                for($i=1; $i<=$totalPages; $i++){
                    printf("<a style='padding:5px;' href='payment.php?page=%u'>%u</a>", $i, $i);
                }
            ?>
    </div>

    </body>
    </html>