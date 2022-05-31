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
        $age = htmlspecialchars($_POST['age']);
        $transportation = htmlspecialchars($_POST['transportation']);
        $city = htmlspecialchars($_POST['city']);
        $textarea = htmlspecialchars(stripslashes(strtolower($_POST['textarea'])));
        $checkbox= htmlspecialchars($_POST['checkbox']);
        $checkbox_second = htmlspecialchars($_POST['checkbox_second']);

        if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone_number))
        {



        }else{
            $firstNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please enter your First Name" . "</h6>";
            $lastNameErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please enter your Last Name" . "</h6>";
            $emailErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please enter your Email Adress" . "</h6>";
            $phoneNumberErrorMsg = "<h6 style = 'color:red;font-size:14px;'> " . " Please enter your Phone number" . "</h6>";
        }















    }


    
