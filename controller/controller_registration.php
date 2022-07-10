<?php 
    //LINK THE DATABASE CONNECTION
    require_once 'database/database.php';

    // CHECKING THE INPUTS FIELDS
    
    if (isset($_POST['submit']))

    {
         $firstName = $lastName = $email = $phone_number = $age = $transportation = $city = $textarea = $checkbox = $checkbox_second = $bank_account = $registeredToBolt = $approved = $pick_the_bag = $signed = $startingDate =$returnDeposit = "";

        //CREATING VARIABLE FOR ALL INPUTS FIELDS
         
         $firstName = htmlspecialchars(stripslashes(trim(strtolower($_POST['firstname']))));
         $lastName = htmlspecialchars(stripslashes(trim(strtolower($_POST['lastname']))));
         $email = htmlspecialchars(stripslashes(trim(strtolower($_POST['email']))));
         $phone_number = htmlspecialchars(stripslashes(trim($_POST['phone_number'])));
         $age = htmlspecialchars(stripslashes(trim($_POST['age'])));
         $transportation = htmlspecialchars(stripslashes(trim($_POST['transportation'])));
         $city = htmlspecialchars(stripslashes(trim($_POST['city'])));
         $textarea = htmlspecialchars(stripslashes(strtolower($_POST['textarea'])));
         $checkbox= htmlspecialchars(stripslashes(trim($_POST['checkbox'])));
         $checkbox_second = htmlspecialchars(stripslashes(trim($_POST['checkbox_second'])));
         $kindOfRegistration = htmlspecialchars(stripslashes(trim(strtolower($_POST['kind-of-registration']))));
         $bank_account = htmlspecialchars(stripslashes(trim($_POST['bank-account'])));
         $registeredToBolt = htmlspecialchars(stripslashes(trim($_POST['registered-to-bolt'])));
         $approved = htmlspecialchars(stripslashes(trim($_POST['approved'])));
         $pick_the_bag = htmlspecialchars(stripslashes(trim($_POST['pick_the_bag'])));
         $signed = htmlspecialchars(stripslashes(trim($_POST['signed'])));
         $startingDate = htmlspecialchars(stripslashes(trim($_POST['starting-date'])));
         $returnDeposit = htmlspecialchars(stripslashes(trim($_POST['return-deposit'])));

        //VALIDATE FIRST NAME
        if(!empty($firstName))
        {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $firstName))
            {
                $firstNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . "Neplatné jméno" . "</h6>";
                return false;              
            }
        }
        else
        {
            $firstNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Zadejte jméno" . "</h6>";
            return false;            
        }

        // // VALIDATE LAST NAME
        if(!empty($lastName))
        {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $lastName))
            {
                $lastNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . "Neplatné přijmení" . "</h6>";
                return false;
            }
        }
        else
        {
            $lastNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Zadejte přijmení" . "</h6>";
            return false;            
        }

        // // VALIDATE EMAIL
        if(!empty($email))
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $emailErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . "Neplatný email" . "</h6>";
                return false;               
            }
        }
        else
        {
            $emailErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Zadejte svůj email" . "</h6>";
            return false;            
        }

        // VALIDATE PHONE NUMBER
        if (!empty($phone_number))
        {
            if (preg_match ("/^[0-9]*$/", $phone_number))
            {
                $length = strlen($phone_number);
                if ( $length < 9 || $length > 9)
                {
                    $phoneNumberErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Telefonní číslo má mít 9 číslic" . "</h6>";
                    return false;                    
                }
            }
            else
            {
                $phoneNumberErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Neplatné číslo" . "</h6>";
                return false;                
            }
        }
        else
        {
            $phoneNumberErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Zadejte telefonní číslo" . "</h6>";
            return false;            
        }

        // VALIDATE AGE

        if (isset($age)){
            if ($age == "none"){
                $ageErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Vyberte zda jste 18+" . "</h6>";
                return false;
            }elseif ($age == "no"){
                $ageErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . "Musíte být 18+" . "</h6>";
                 return false;
            }           
        }

        // VALIDATE TRANSPORTATION
        if (isset($transportation)){
            if($transportation == "none"){
                $transportationErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Vyberte dopravní prostředek" . "</h6>";
                    return false;
            }
        }
        
        //VALIDATE CITY
        if (isset($city))
        {
            if ($city == "none"){
                $cityErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Vyberte město" . "</h6>";
                return false;
            }
        }

        //VALIDATE TEXTAREA
        if(!preg_match("/^[a-zA-Z0-9 \(\)\n]*$/", $textarea))
        {
            $textareaErrormsg = "<h6 style = 'color:red;font-size:14px;'> " . " Neplatný text" . "</h6>";
            return false;
        }

        // VALIDATE GDPR
        if(isset($checkbox))
        {
            if ( $checkbox === "unchecked"){
                $checkboxErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Vyberte souhlas s podmínkami" . "</h6>";
                return false;
            }            
        }
        
        //VALIDATE DEPOSIT
        
        if(isset($checkbox_second))
        {
            if ($checkbox_second === "unchecked_second"){
                $checkboxSecondErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Vyberte souhlas s podmínkami" . "</h6>";
                return false;
            }            
        }


        //INSERT DATA TO THE DATABASE

        $sql = $conn->prepare
        (
            "INSERT INTO `registration_new_driver` 
        (
            `first_name`, `last_name`, `email`, `phone_number`, `age`, `transportation`, `city`, `textplace`, `gppr`, `deposit`, `kind-of-registration`, `bank-account`, `approved`, `pick_the_bag`, `signed`, `starting_date`, `return_deposit`, `registered_to_bolt`
        ) 
        VALUES 
        (
            :firstName, 
            :lastName, 
            :email, 
            :phone_number, 
            :age, 
            :transportation,
            :city, 
            :textarea, 
            :checkbox, 
            :checkbox_second, 
            :kindOfRegistration, 
            :bank_account, 
            :approved, 
            :pick_the_bag, 
            :signed, 
            :startingDate, 
            :returnDeposit,
            :registeredToBolt 
            
           
        )");
        
            $sql->bindParam(':firstName', $firstName);
            $sql->bindParam(':lastName', $lastName);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':phone_number', $phone_number);
            $sql->bindParam(':age', $age);
            $sql->bindParam(':transportation', $transportation);
            $sql->bindParam(':city', $city);
            $sql->bindParam(':textarea', $textarea);
            $sql->bindParam(':checkbox', $checkbox);
            $sql->bindParam(':checkbox_second', $checkbox_second);
            $sql->bindParam(':kindOfRegistration', $kindOfRegistration);
            $sql->bindParam(':bank_account', $bank_account);
            $sql->bindParam(':approved', $approved);
            $sql->bindParam(':pick_the_bag', $pick_the_bag);
            $sql->bindParam(':signed', $signed);
            $sql->bindParam(':startingDate', $startingDate);
            $sql->bindParam(':returnDeposit', $returnDeposit);
            $sql->bindParam(':registeredToBolt', $registeredToBolt);

            //$sql->execute();

            // $conn->exec($sql);

            // $conn->query($sql);
            $result = $sql->execute();
            if ($result == true){

                header("Location:thank_you_page.php");
                exit;
            }

    }

    $conn = null;
   


    
