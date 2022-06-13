<?php include '../controller/controller_login_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../model/public/css/login_admin.css">
       
        <title>Document</title>
    </head>
    <body>
        <div class="registration_login">
            <div class="registration_login_all">
                <div class="registration_login_left">
                    <div class="registration_login_title">
                        <img src="../model/public/images/logo.png" alt="">
                        
                    </div>
                    <!-- ========== THIS IS A FORM REGISTRY -->
                    <form action="" class="form_login" method="POST">
                        
                        <input type="mail" placeholder="Enter Your Email here" name="email">
                        <?php
                            if(isset($emailErrMsg)){
                                echo $emailErrMsg;
                            }
                         ?>
                        <input type="password" name="passwordCheck" id="password" placeholder="Enter Your Password">
                        <?php
                            if(isset($passwordErrMsg)){
                                echo $passwordErrMsg;
                            }
                         ?>  
                        
                        <!-- ========== THIS IS BUTTONS ========== -->
                        
                        <button type="submit" name="submit">Login in</button>
                          
                    </form>                   
                </div>               
            </div>
        </div>
    </body>
</html>

