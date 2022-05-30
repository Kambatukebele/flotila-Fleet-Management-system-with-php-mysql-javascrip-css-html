<!DOCTYPE html>
<html lang="en">
    <?php include '../model/includes/head/head.php'; ?>
<body>

    <!-- ========== HEADER NAVIGATION ========== -->
    <?php include '../model/includes/navigation/header.php'; ?>

   <!-- ========== REGISTRATION OF DRIVER ========== -->

   <div class="register_a_driver">
        <h2>Změna flotily</h2>
   </div>

   <!-- ==========  FORM ========== -->
   <form action="">
       <div class="the_inputs">
           <div class="inputs_left">
                <label for="firstname">Jméno*</label>
                <input type="text" name="firstname" id="firstname" placeholder="Jméno">
           </div>
           <div class="inputs_left">
                <label for="lastname">Příjmení*</label>
                <input type="text" name="lastname" id="lastname" placeholder="Příjmení">
           </div>
       </div>

       <div class="the_inputs">
            <div class="inputs_left">
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="input_mobile">
                <label for="phone_number">Telefon*</label>               
                <div class="write_number">
                    <select name="choose_id_number" id="choose_id_number">
                        <option value="+420">+420</option>
                    </select>

                    <input type="text" name="phone_number" id="phone_number" placeholder="Telefon">
                </div>
            </div>
        </div>

        <div class="the_inputs">
            
            <div class="inputs_left">
                <label for="transportation">Dopravní prostředek*</label>
                <select name="transportation" id="transportation">
                    <option value="car">Auto</option>
                    <option value="bike">Kolo</option>
                    <option value="bicycle">Motorka</option>
                    <option value="bicycle">Elektrická koloběžka</option>
                </select>
            </div>
            <div class="inputs_left">
                <label for="transportation">Město*</label>
                <select name="transportation" id="transportation">
                    <option value="Prague">Praha</option>
                    <option value="Brno">Brno</option>
                    <option value="Ostrava">Ostrava</option>
                    <option value="Olomouc">Olomouc</option>
                    <option value="Plzeň">Plzeň</option>
                    <option value="Hradec-Králové">Hradec Králové</option>
                    <option value="Českých Budějovicích">České Budějovice</option>
                </select>
            </div>
           
        </div>

        <div class="inputs_textarea">
            <br><br><br>
            <label for="textarea">Zpráva</label>
            <div class="text_area">
                
                <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox">Souhlasím se zpracováním osobních údajů</label>

            </div>
                <br>
            <div>
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox">Souhlasím s tím, že při převzetí termoboxu zaplatím v hotovosti vratnou zálohu ve výši 1.000 Kč </label><br>
                <small>Vratná záloha bude kurýrovi zaslána zpět na bankovní účet po vrácení termoboxu.</small>

            </div>

        </div>
        <br><br>
        <div class="inputs_left">
            <button type="submit" name="submit">Odeslat</button>
        </div>
   </form>

    <!-- ========== FOOTER ========== -->
    <?php include '../model/includes/footer/footer.php'; ?>
</body>
</html>