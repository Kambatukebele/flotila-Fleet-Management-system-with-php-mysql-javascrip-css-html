<?php 
    //LINK THE DATABASE CONNECTION
    require "../app/core/database.php"; 

    // CHECKING THE INPUTS FIELDS
    
    if (isset($_POST['submit']))

    {
        $firstName = $lastName = $email = $phone_number = $age = $transportation = $city = $textarea = $checkbox = $checkbox_second = $kindOfRegistration = "";

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
         $kindOfRegistration = htmlspecialchars(stripslashes(trim(strtolower($_POST['kind_of_registration']))));
        //  $bank_account = htmlspecialchars(stripslashes(trim($_POST['bank-account'])));
        //  $registeredToBolt = htmlspecialchars(stripslashes(trim($_POST['registered-to-bolt'])));
        //  $approved = htmlspecialchars(stripslashes(trim($_POST['approved'])));
        //  $pick_the_bag = htmlspecialchars(stripslashes(trim($_POST['pick_the_bag'])));
        //  $signed = htmlspecialchars(stripslashes(trim($_POST['signed'])));
        //  $startingDate = htmlspecialchars(stripslashes(trim($_POST['starting-date'])));
        //  $returnDeposit = htmlspecialchars(stripslashes(trim($_POST['return-deposit'])));
        

        //VALIDATE FIRST NAME
        if(!empty($firstName))
        {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $firstName))
            {
                $firstNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . "Invalide First Name" . "</h6>";
                return false;              
            }
        }
        else
        {
            $firstNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please enter your First Name" . "</h6>";
            return false;            
        }

        // // VALIDATE LAST NAME
        if(!empty($lastName))
        {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $lastName))
            {
                $lastNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . "Invalide Last Name" . "</h6>";
                return false;                
            }
        }
        else
        {
            $lastNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please enter your last Name" . "</h6>";
            return false;            
        }

        // // VALIDATE EMAIL
        if(!empty($email))
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $emailErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . "Invalide Email Adress" . "</h6>";
                return false;               
            }
        }
        else
        {
            $emailErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please enter your email adress" . "</h6>";
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
                    $phoneNumberErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Your number should have 9 digits" . "</h6>";
                    return false;                    
                }
            }
            else
            {
                $phoneNumberErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Invalide Phone number" . "</h6>";
                return false;                
            }
        }
        else
        {
            $phoneNumberErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please enter your Phone number" . "</h6>";
            return false;            
        }

        // VALIDATE TRANSPORTATION
        if (isset($transportation)){
            if($transportation == "none"){
                $transportationErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please Select your transportation" . "</h6>";
                    return false;
            }
        }
        
        //VALIDATE CITY
        if (isset($city))
        {
            if ($city == "none"){
                $cityErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please Select your city" . "</h6>";
                return false;
            }
        }

        //VALIDATE TEXTAREA
        if(!preg_match("/^[a-zA-Z0-9 \(\)\n]*$/", $textarea))
        {
            $textareaErrormsg = "<h6 style = 'color:red;font-size:14px;'> " . " Invalide text" . "</h6>";
            return false;
        }

        // VALIDATE GDPR
        if(isset($checkbox))
        {
            if ( $checkbox === "unchecked"){
                $checkboxErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " You need to accept out conditions" . "</h6>";
                return false;
            }            
        }
        
        $sql = $conn->prepare
        (
            "INSERT INTO `registration_new_driver` 
        (
            `first_name`, `last_name`, `email`, `phone_number`, `age`, `transportation`, `city`, `textplace`, `gppr`, `deposit`, `kind_of_registration`
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
            :kindOfRegistration
            -- :bank_account, 
            -- :approved, 
            -- :pick_the_bag, 
            -- :signed, 
            -- :startingDate, 
            -- :returnDeposit,
            -- :registeredToBolt 
            
           
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
            // $sql->bindParam(':bank_account', $bank_account);
            // $sql->bindParam(':approved', $approved);
            // $sql->bindParam(':pick_the_bag', $pick_the_bag);
            // $sql->bindParam(':signed', $signed);
            // $sql->bindParam(':startingDate', $startingDate);
            // $sql->bindParam(':returnDeposit', $returnDeposit);
            // $sql->bindParam(':registeredToBolt', $registeredToBolt);

            //$sql->execute();

            $result = $sql->execute();
            if ($result){
                header("Location:thank_you_page");
            }


    }

    $conn = null; 
   


    
