<?php 
    //LINK THE DATABASE CONNECTION
    include 'database/database.php';

    // CHECKING THE INPUTS FIELDS
    
    if (isset($_POST['submit']))

    {
         $firstName = $lastName = $email = $phone_number = $age = $transportation = $city = $textarea = $checkbox = $checkbox_second = "";

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

        // VALIDATE AGE

        if (isset($age)){
            if ($age == "none"){
                $ageErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please Select if you are more than 18 or not" . "</h6>";
                return false;
            }elseif ($age == "no"){
                $ageErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . "You should be 18 or above" . "</h6>";
                 return false;
            }           
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
        
        //VALIDATE DEPOSIT
        
        if(isset($checkbox_second))
        {
            if ($checkbox_second === "unchecked_second"){
                $checkboxSecondErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " You need to accept out conditions" . "</h6>";
                return false;
            }            
        }


        //INSERT DATA TO THE DATABASE
            $sql = $conn->prepare("INSERT INTO registration_new_driver (first_name, last_name, email, phone_number, age, transportation, city, textplace, gppr, deposit)VALUES (:first_name, :last_name, :email, :phone_number, :age, :transportation, :city, :textplace, :gppr, :deposit)");
        
            $sql->bindParam(':first_name', $firstName);
            $sql->bindParam(':last_name', $lastName);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':phone_number', $phone_number);
            $sql->bindParam(':age', $age);
            $sql->bindParam(':transportation', $transportation);
            $sql->bindParam(':city', $city);
            $sql->bindParam(':textplace', $textarea);
            $sql->bindParam(':gppr', $checkbox);
            $sql->bindParam(':deposit', $checkbox_second);
    
            $sql->execute();

            $result = $sql->execute();
            if ($result == true){
                header("Location:thank_you_page.php");
            }

    }
   


    