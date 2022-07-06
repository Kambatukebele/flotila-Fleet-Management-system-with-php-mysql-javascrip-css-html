<?php require_once '../controller/controller_change_fleet.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <?php require_once '../model/includes/head/head.php'; ?>
<body>

    <!-- ========== HEADER NAVIGATION ========== -->
    <?php require_once '../model/includes/navigation/header.php'; ?>

   <!-- ========== REGISTRATION OF DRIVER ========== -->

   <div class="register_a_driver">
        <h2><?php echo $lang['form-main-title-two']; ?></h2>
   </div>

   <!-- ==========  FORM ========== -->
   <form action="" method="POST">
        <div class="the_inputs">
            <div class="inputs_left">
                
                <select hidden name="kind-of-registration" id="kind-of-registration">
                    <option value="new_courier">new courier</option>
                    <option value="Changed_fleet" selected>changed fleet</option>
                </select>
            </div>
            <div class="inputs_left">
                        
            </div>
        </div>
       <div class="the_inputs">
           <div class="inputs_left">
                <label for="firstname"><?php echo $lang['form-first-name']; ?>*</label>
                <input type="text" name="firstname" id="firstname" placeholder="<?php echo $lang['form-first-name']; ?>" value="<?php if(isset($firstName)) echo $firstName;?>">
                <?php
                    if (isset($firstNameErrorMsg)){
                        echo $firstNameErrorMsg;
                    }
                ?>
           </div>
           <div class="inputs_left">
                <label for="lastname"><?php echo $lang['form-last-name']; ?>*</label>
                <input type="text" name="lastname" id="lastname" placeholder="<?php echo $lang['form-last-name']; ?>" value="<?php if(isset($lastName)) echo $lastName;?>">
                <?php
                    if (isset($lastNameErrorMsg)){
                        echo $lastNameErrorMsg;
                    }
                ?>
           </div>
       </div>

       <div class="the_inputs">
            <div class="inputs_left">
                <label for="email"><?php echo $lang['form-email']; ?>*</label>
                <input type="email" name="email" id="email" placeholder="<?php echo $lang['form-email']; ?>" value="<?php if(isset($email)) echo $email;?>">
                <?php
                    if (isset($emailErrorMsg)){
                        echo $emailErrorMsg;
                    }
                ?>
            </div>
            <div class="input_mobile">
                <label for="phone_number"><?php echo $lang['form-phone-number']; ?>*</label>               
                <div class="write_number">
                    <select name="choose_id_number" id="choose_id_number">
                        <option value="+420">+420</option>
                    </select>

                    <input type="text" name="phone_number" id="phone_number" placeholder="<?php echo $lang['form-phone-number']; ?>" value="<?php if(isset($phone_number)) echo $phone_number;?>">
                    <?php
                    if (isset($phoneNumberErrorMsg)){
                        echo $phoneNumberErrorMsg;
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="the_inputs">
            
            <div class="inputs_left">
                <label for="transportation"><?php echo $lang['form-transportation']; ?>*</label>
                <select name="transportation" id="transportation">
                    <option value="none" hidden>Vybrat</option>
                    <option value="car">Auto</option>
                    <option value="bike">Kolo</option>
                    <option value="bicycle">Motorka</option>
                    <option value="bicycle">Elektrická koloběžka</option>
                </select>
                <?php
                    if (isset($transportationErrorMsg)){
                        echo $transportationErrorMsg;
                    }
                    ?>
            </div>
            <div class="inputs_left">
                <label for="city"><?php echo $lang['form-city']; ?>*</label>
                <select name="city" id="city">
                    <option value="none" hidden>Vybrat</option>
                    <option value="Prague">Praha</option>
                    <option value="Brno">Brno</option>
                    <option value="Ostrava">Ostrava</option>
                    <option value="Olomouc">Olomouc</option>
                    <option value="Plzeň">Plzeň</option>
                    <option value="Hradec-Králové">Hradec Králové</option>
                    <option value="Českých Budějovicích">České Budějovice</option>
                </select>
                <?php
                    if (isset($cityErrorMsg)){
                        echo $cityErrorMsg;
                    }
                    ?>
            </div>
           
        </div>

         <!-- INVISIBLE DATA -->
         <div class="the_inputs">
            
            <div class="inputs_left">
           
                <!-- <label for="city">TEST INPUT*</label> -->
                <input type="hidden" name="checkbox_second" id="checkbox" value="checked_second">
                <select id="age" name="age" hidden>                   
                    <option  value="yes">Ano</option>
                </select>
                <input type="hidden" name="bank-account" id="bank-account" placeholder="bank-account">
                <input type="hidden" name="registered-to-bolt" id="registered to bolt" placeholder="registered to bolt?">
                <input type="hidden" name="approved" id="approved" placeholder="approved?">
                <input type="hidden" name="pick_the_bag" id="picked-the-bag" placeholder="picked-the-bag">
                <input type="hidden" name="signed" id="signed" placeholder="signed?">
                <input type="hidden" name="starting-date" id="starting-date" placeholder="starting-date">
               
                <input type="hidden" name="return-deposit" id="return-deposit" placeholder="return-deposit">
              
            </div>
        </div>

        <div class="inputs_textarea">
            <br><br><br>
            <label for="textarea"><?php echo $lang['form-message']; ?></label>
            <div class="text_area">
                
                <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="hidden" name="checkbox" id="checkbox" value="unchecked">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox"><?php echo $lang['form-gdpr']; ?></label>
                <?php
                    if (isset($checkboxErrorMsg)){
                        echo $checkboxErrorMsg;
                    }
                    ?>

            </div>
                <br>
           

        </div>
        <br><br>
        <div class="inputs_left">
            <button type="submit" name="submit"><?php echo $lang['form-button']; ?></button>
        </div>
   </form>

    <!-- ========== FOOTER ========== -->
    <?php require_once '../model/includes/footer/footer.php'; ?>
</body>
</html>