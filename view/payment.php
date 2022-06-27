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
                <tr>
                  <td>Alfreds</td>
                  <td>Maria </td>
                  <td>Germany</td>
                  <td>New Courier</td>
                  <td>12-05-22</td>
                  <td>yes</td>
                  <td>
                    <button class="upd"><a href="card_payment_driver.php?payId=$id">Payment</a></button>                    
                  </td>
                </tr>
              </table>
        </div>
    </div>  

    </body>
    </html>