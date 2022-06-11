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
                    <form action="">
                        <input type="text" placeholder="Enter Your Full Name" name="fullName">
                        <input type="mail" placeholder="Enter Your Email here" name="email">
                        <input type="password" name="password" id="password" placeholder="Enter Your Password">
                        <input type="password" name="password_repeat" id="password_repeat" placeholder="Reapeat password">
                        <!-- ========== THIS IS BUTTONS ========== -->
                        
                        <button type="submit">Register</button>
                          
                    </form>                   
                </div>               
            </div>
        </div>
    </body>
</html>
