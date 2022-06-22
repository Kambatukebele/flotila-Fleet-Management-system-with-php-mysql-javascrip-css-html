<?php
    include '../controller/controller_updatedriver.php';
                
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- =========== GOOGLE FONT ========== -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 
     <!-- =========== LINKING CSS ========== -->
     <link rel="stylesheet" href="../model/public/css/reset.css">
     <link rel="stylesheet" href="../model/public/css/style.css">
     <link rel="stylesheet" href="../model/public/css/updatedriver.css">
     <!-- ==========TITLE ========== -->
    <title>Update Driver</title>
</head>
<body>

    <!-- ========== EXTRA USER INFORMATIONS -->
    <div class="extra_info">
       
        <div class="extra_info_all">
             <!-- ========== CLOSE ICONS ========= -->
           
            <form action="" class="extra_info_all_form" method="POST">
                <div class="the_inputs">
                    <div class="inputs_left">
                    
                         <label for="firstname">Jméno*</label>
                         <input type="text" name="firstname" id="firstname" placeholder="Jméno" value="<?php 
                            echo $first_name; ?>">
                        
                    </div>
                    <div class="inputs_left">
                   
                         <label for="lastname">Příjmení*</label>
                         <input type="text" name="lastname" id="lastname" placeholder="Příjmení" value="<?php 
                            echo $lastName; ?>">
                        
                    </div>
                </div>
                <div class="the_inputs">
                    <div class="inputs_left">
                   
                        <label for="email">Email*</label>
                        <input type="email" name="email" id="email" placeholder="Email" value="<?php 
                            echo $emailD; ?>">
                        
                    </div>
                    <div class="inputs_left">
                
                        <label for="phone_number">Telefon*</label>             
                        <div class="write_number">
                            <select name="choose_id_number" id="choose_id_number">
                                <option value="+420">+420</option>
                            </select>
        
                            <input type="text" name="phone_number" id="phone_number" placeholder="Telefon" value="<?php 
                            echo $phoneNumber; ?>">
                            
                        </div>
                    </div>
                </div>
                <div class="the_inputs">
                    <div class="inputs_left">
        
                        <label for="transportation">Dopravní prostředek*</label>                      
                        <input type="text" name="transportation" id="" value="<?php echo $transportation; ?>">
                    </div>
                    <div class="inputs_left">
           
                        <label for="city">Město*</label>
                        <input type="text" name="city" value="<?php 
                            echo $city; ?>">
                        
                    </div>
                   
                </div>
                <div class="the_inputs">
                    <div class="inputs_left">
        
                        <label for="Bank-account">Bank Account*</label>
                        <input type="text" name="bank-account" id="bank-account" placeholder="bank-account" value="<?php 
                            echo $bankAccount; ?>">
                    </div>
            
                    <div class="inputs_left">
                        <label for="registered-to-bolt">Bolt Registration</label>
                       <input type="text" name="registered-to-bolt" id="" value="<?php echo $registeredToBolt; ?>">
                       
                    </div>
                </div>
                <div class="the_inputs">
                    <div class="inputs_left">
        
                        <label for="approved">approved*</label>
                        <input type="text" name="approved" id="" value="<?php echo $approved; ?>">
                        
                    </div>
            
                    <div class="inputs_left">
                        <label for="picked-the-bag"">Picked the bag"</label>
                        <input type="text" name="pick_the_bag" id="" value="<?php echo $pickTheBag; ?>">
                        
                    </div>
                </div>
              
                <div class="the_inputs">
                    <div class="inputs_left">
        
                        <label for="signed">signed*</label>
                       <input type="text" name="signed" id="" value="<?php echo $signed; ?>">
                      
                    </div>
            
                    <div class="inputs_left">
                        <label for="starting-date">starting date</label>
                        <input type="date" name="starting-date" id="starting-date" placeholder="starting-date" value="<?php 
                            echo $startingDate; ?>"> 
                    </div>
                </div>

                <div class="the_inputs">
                    <div class="inputs_left">
        
                        <label for="return-deposit">Return deposit*</label>
                       <input type="text" name="return-deposit" id="" value="<?php 
                            echo $returnDeposit; ?>">
                        
                        
                    </div>
            
                    <div class="inputs_left">
                        <label for="textarea">Driver Message</label>
                       <input type="text" name="textarea" id="" value="<?php 
                            echo $textPlace; ?>">
                    </div>
                </div>

                <div class="the_inputs">
                    <div class="inputs_left">
                       
                        <button type="submit" name="upgradeDriver">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>   
</body>
</html>