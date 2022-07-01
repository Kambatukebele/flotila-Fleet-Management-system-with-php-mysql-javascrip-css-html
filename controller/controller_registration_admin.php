<?php 
    //LINK THE DATABASE CONNECTION
    include 'database/database.php';
    // include 'security/security.php';

    // CONNECT ADMIN VALIDATION

    if (isset($_POST['submit'])){
        $fullName = htmlspecialchars(stripslashes(trim(strtolower($_POST['fullName']))));
        $email = htmlspecialchars(stripslashes(trim(strtolower($_POST['email']))));
        $password = htmlspecialchars(stripslashes(trim($_POST['passwordCheck'])));
        $passwordRepeat = htmlspecialchars(stripslashes(trim($_POST['password_repeat'])));

        //VALIDATE REGISTRATION

        if(empty($fullName)){
            $fullNameErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Full Name required" . "</h6>";
        }elseif (!preg_match("/^([a-zA-Z' ]+)$/", $fullName)){
            $fullNameErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Invalide Name" . "</h6>";
        }

        if (empty($email)){
            $emailErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Email required" . "</h6>";
        }elseif(filter_var($email, FILTER_SANITIZE_EMAIL)){
            $emailErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Email Invalide" . "</h6>";
        }
        if (empty($password)){
            $passwordErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Password required" . "</h6>";
        }elseif(isset($password)){
            $hashPassword = password_hash($password, PASSWORD_BCRYPT);
        }
        
        if (empty($passwordRepeat)){
            $passwordRepeatErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Password Repeat required" . "</h6>";
        }elseif($password !== $passwordRepeat){
            $passwordRepeatErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Password does not match" . "</h6>";
        }else{
              //CONNECT TO THE DATABASE

            $sql = $conn->prepare("INSERT INTO adminFlotila (fullname, email, passwordCheck) VALUES (:fullname, :email, :passwordCheck)");

            $sql->bindParam(':fullname', $fullName);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':passwordCheck', $hashPassword);
            $sql->execute();
            header("Location:login_admin.php");
        }

      

      
       

        



    }