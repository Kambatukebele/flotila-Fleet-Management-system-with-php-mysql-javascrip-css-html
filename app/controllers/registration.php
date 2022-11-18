<?php 
    require "includes/head/head.php";
    require "controller/controller_registration.php"; 
?>

   <!-- ========== REGISTRATION OF DRIVER ========== -->

   <div class="register_a_driver">
        <h2>Registrace do flotily</h2>
   </div>

   <!-- ==========  FORM ========== -->
   <form action="" method="POST">
        <div class="the_inputs">
            <div class="inputs_left">
                
                <select hidden name="kind_of_registration" id="kind_of_registration">
                    <option value="NEW" selected>new courier</option>
                    <option value="driverValue">changed fleet</option>
                </select>
            </div>
            <div class="inputs_left">
                        
            </div>
        </div>
       <div class="the_inputs">
           <div class="inputs_left">
                <label for="firstname">Jméno*</label>
                <input type="text" name="firstname" id="firstname" placeholder="Jméno" value="<?php
                    if(isset($firstName)):
                        echo $firstName;
                    endif;           
                ?>">
                <?php
                    if(isset($firstNameErrorMsg)):
                        echo $firstNameErrorMsg;
                    endif;           
                ?>
           </div>
         
           <div class="inputs_left">
                <label for="lastname">Příjmení*</label>
                <input type="text" name="lastname" id="lastname" placeholder="Příjmení" value="<?php
                    if(isset($lastName)):
                        echo $lastName;
                    endif;           
                ?>">
                <?php
                    if(isset($lastNameErrorMsg)):
                        echo $lastNameErrorMsg;
                    endif;           
                ?>
           </div>
       </div>

       <div class="the_inputs">
            <div class="inputs_left">
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" placeholder="Email" value="  <?php
                    if(isset($email)):
                        echo $email;
                    endif;           
                ?>">
                <?php
                    if(isset($emailErrorMsg)):
                        echo $emailErrorMsg;
                    endif;           
                ?>
            </div>
            <div class="input_mobile">
                <label for="phone_number">Telefon*</label>               
                <div class="write_number">
                    <select name="choose_id_number" id="choose_id_number">
                        <option value="+420">+420</option>
                    </select>

                    <input type="text" name="phone_number" id="phone_number" placeholder="Telefon" value="  <?php
                    if(isset($phone_number)):
                        echo $phone_number;
                    endif;           
                ?>">
                    <?php
                        if(isset($phoneNumberErrorMsg)):
                            echo $phoneNumberErrorMsg;
                        endif;           
                    ?>
                </div>
            </div>
        </div>

        <div class="the_inputs">
            <div class="inputs_left">
                <label for="age">Jste 18+ ?* </label>
                <select name="age" id="age">
                    <option value="yes" selected>Ano</option>
                    <option value="no">Ne</option>
                </select>
                
            </div>
            <div class="inputs_left">
                <label for="transportation">Dopravní prostředek*</label>
                <select name="transportation" id="transportation">
                    <option value="car">Auto</option>
                    <option value="bike">Kolo</option>
                    <option value="bicycle">Motorka</option>
                    <option value="bicycle">Elektrická koloběžka</option>
                </select>
                <?php
                    if(isset($transportationErrorMsg)):
                        echo $transportationErrorMsg;
                    endif;           
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
                    <option value="H.K">Hradec Králové</option>
                    <option value="Č.B">České Budějovice</option>
                </select>
                <?php
                    if(isset($cityErrorMsg)):
                        echo $cityErrorMsg;
                    endif;           
                ?>
            </div>
        </div>

         <!-- INVISIBLE DATA -->
         <div class="the_inputs">
            
            <div class="inputs_left">
           
                <!-- <label for="city">TEST INPUT*</label> -->
                
                <input type="hidden" name="bank_account" id="bank_account" placeholder="bank account">
                <input type="hidden" name="booked_date">
                <input type="hidden" name="sent_registration">               
                <input type="hidden" name="return-deposit" id="return-deposit" placeholder="return-deposit">
              
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
                <?php
                    if(isset($textareaErrormsg)):
                        echo $textareaErrormsg;
                    endif;           
                ?>
            </div>
            <div>
                <input type="hidden" name="checkbox" id="checkbox" value="unchecked">
                <input type="checkbox" name="checkbox" id="checkbox" value="checked">
               
                <label for="checkbox">Souhlasím se zpracováním osobních údajů</label>
                <?php
                    if(isset($checkboxErrorMsg)):
                        echo $checkboxErrorMsg;
                    endif;           
                ?>

            </div>
                <br>
            <div>
                <input type="hidden" name="checkbox_second" id="checkbox" value="unchecked_second">
                <input type="checkbox" name="checkbox_second" id="checkbox" value="checked_second">
               
                <label for="checkbox">Souhlasím s tím, že při převzetí termoboxu zaplatím v hotovosti vratnou zálohu ve výši 1.000 Kč </label><br>
                <small>Vratná záloha bude kurýrovi zaslána zpět na bankovní účet po vrácení termoboxu.</small>
                <?php
                    if(isset($checkboxSecondErrorMsg)):
                        echo $checkboxSecondErrorMsg;
                    endif;           
                ?>

            </div>

        </div>
        <br><br>
        <div class="inputs_left">
            <button type="submit" name="submit">Odeslat</button>
        </div>
   </form>

    <!-- ========== FOOTER ========== -->
    <?php require "includes/footer/footer.php"; ?>