<?php require_once '../controller/controller_registration_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once '../model/includes/head_admin/head_registration_admin.php' ?>
    <body>
        <div class="registration_admin">
            <div class="registration_admin_all">
                <div class="registration_admin_left">
                    <div class="registration_admin_title">
                        <img src="../model/public/images/logo.png" alt="">
                    </div>
                    <!-- ========== THIS IS A FORM REGISTRY -->
                    <form action="" method="POST" class="form_admin">
                        <input type="text" placeholder="Enter Your Full Name" name="fullName">
                        <?php
                            if (isset($fullNameErrMsg)){
                                echo $fullNameErrMsg;
                            }
                        ?>
                        <input type="email" placeholder="Enter Your Email here" name="email">
                        <?php
                            if (isset($emailErrMsg)){
                                echo $emailErrMsg;
                            }
                        ?>
                        <input type="password" name="passwordCheck" id="password" placeholder="Enter Your Password">
                        <?php
                            if (isset($passwordErrMsg)){
                                echo $passwordErrMsg;
                            }
                        ?>
                        <input type="password" name="password_repeat" id="password_repeat" placeholder="Reapeat password">
                        <?php
                            if (isset($passwordRepeatErrMsg)){
                                echo $passwordRepeatErrMsg;
                            }
                        ?>
                        <!-- ========== THIS IS BUTTONS ========== -->
                        
                        <button type="submit" name="submit">Register</button>
                          
                    </form>                   
                </div>               
            </div>
        </div>
    </body>
</html>
