<?php include '../controller/controller_registration.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <?php include '../model/includes/head/head.php'; ?>
<body>

    <!-- ========== HEADER NAVIGATION ========== -->
    <?php include '../model/includes/navigation/header.php' ?>  
    <!-- ========== END OF HIDDEN HEADER NAVIGATION ========== -->

   <!-- ========== REGISTRATION OF DRIVER ========== -->

   <div class="register_a_driver">
        <h2>Registrace do flotily</h2>
     
   </div>
       
   <!-- ==========  FORM ========== -->
   <form action="" method="POST">
       <div class="the_inputs">
           <div class="inputs_left">
           
                <label for="firstname">Jméno*</label>
                <input type="text" name="firstname" id="firstname" placeholder="Jméno" value="<?php if(isset($firstName)) echo $firstName;?>">
                <?php
                    if (isset($firstNameErrorMsg)){
                        echo $firstNameErrorMsg;
                    }
                ?>
           </div>
           <div class="inputs_left">
          
                <label for="lastname">Příjmení*</label>
                <input type="text" name="lastname" id="lastname" placeholder="Příjmení" value="<?php if(isset($lastName)) echo $lastName;?>">
                <?php
                    if (isset($lastNameErrorMsg)){
                        echo $lastNameErrorMsg;
                    }
                ?>
           </div>
       </div>

       <div class="the_inputs">
            <div class="inputs_left">
           
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" placeholder="Email" value="<?php if(isset($email)) echo $email;?>">
                <?php
                    if (isset($emailErrorMsg)){
                        echo $emailErrorMsg;
                    }
                ?>
            </div>
            <div class="input_mobile">
        
                <label for="phone_number">Telefon*</label>             
                <div class="write_number">
                    <select name="choose_id_number" id="choose_id_number">
                        <option value="+420">+420</option>
                    </select>

                    <input type="text" name="phone_number" id="phone_number" placeholder="Telefon" value="<?php if(isset($phone_number)) echo $phone_number;?>">
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
                <label for="age">Jste 18+ ?* </label>           
                <select id="age" name="age">                   
                    <option  value="yes">Ano</option>
                    <option value="no">Ne</option>
                </select>
                <?php
 
                   
                    if (isset($ageErrorMsg)){
                        echo $ageErrorMsg;
                    }
                    ?>

            </div>
            <div class="inputs_left">
        
                <label for="transportation">Dopravní prostředek*</label>
                <select name="transportation" id="transportation">
                    <option value="none" hidden>Vybrat</option>
                    <option value="car">Auto</option>
                    <option value="bike">Kolo</option>
                    <option value="bicycle">Motorka</option>
                    <option value="electric-bike">Elektrická koloběžka</option>
                </select>
                <?php
                    if (isset($transportationErrorMsg)){
                        echo $transportationErrorMsg;
                    }
                    ?>
            </div>
           
        </div>

        <div class="the_inputs">
            
            <div class="inputs_left">
           
                <label for="city">Město*</label>
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

        <div class="important_info">
            <h6>Upozornění:
                <br>
                Dle ustanovení nových podmínek společnosti BOLT FOOD s účinností od 15.11.2021 platí pro všechny nově registrované kurýry povinnost zaplatit v hotovosti částku 1.000 Kč (bude vystaven příjmový doklad) jako vratnou zálohu na termobox BOLT FOOD. Vratná záloha bude kurýrovi zaslána zpět na bankovní účet po vrácení termoboxu.</h6>
        </div>

        <div class="inputs_textarea">
            <br><br><br>
            <label for="textarea">Zpráva</label>
            <div class="text_area">
                
                <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="hidden" name="checkbox" id="checkbox" value="unchecked">
                <input type="checkbox" name="checkbox" id="checkbox" value="checked">
                <label for="checkbox">Souhlasím se zpracováním osobních údajů</label>
                <?php
                    if (isset($checkboxErrorMsg)){
                        echo $checkboxErrorMsg;
                    }
                    ?>
            </div>
                <br>
            <div>
                <input type="hidden" name="checkbox_second" id="checkbox" value="unchecked_second">
                <input type="checkbox" name="checkbox_second" id="checkbox" value="checked_second">
                <label for="checkbox">Souhlasím s tím, že při převzetí termoboxu zaplatím v hotovosti vratnou zálohu ve výši 1.000 Kč </label>
                <?php
                    if (isset($checkboxSecondErrorMsg)){
                        echo $checkboxSecondErrorMsg;
                    }
                    ?><br>
                <small>Vratná záloha bude kurýrovi zaslána zpět na bankovní účet po vrácení termoboxu.</small>

            </div>

        </div>
        <br><br>
        <div class="inputs_left">
            <button type="submit" name="submit">Odeslat</button>
        </div>
   </form>

   <?php include '../model/includes/footer/footer.php'; ?>
   
</body>
</html>