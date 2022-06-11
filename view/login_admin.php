<?php include '../controller/controller_login_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../model/includes/head/head.php'; ?>
    <body>
        <div class="registration_admin">
            <div class="registration_admin_all">
                <div class="registration_admin_left">
                    <div class="registration_admin_title">
                        <img src="../model/public/images/logo.png" alt="">
                    </div>
                  
                    <!-- ========== THIS IS A FORM REGISTRY -->
                    <form action="" method="POST">
                     
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
