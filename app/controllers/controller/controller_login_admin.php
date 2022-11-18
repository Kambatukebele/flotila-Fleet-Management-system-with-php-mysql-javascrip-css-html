<?php 
    //LINK THE DATABASE CONNECTION
    require "../app/core/database.php"; 
    

    // CONNECT ADMIN VALIDATION

    if (isset($_POST['submit'])){
        
        $email = htmlspecialchars(stripslashes(trim(strtolower($_POST['email']))));
        $password = htmlspecialchars(stripslashes(trim($_POST['passwordCheck'])));
        

        //VALIDATE REGISTRATION

        if (empty($email)){
            $emailErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Email required" . "</h6>";
        }elseif(filter_var($email, FILTER_SANITIZE_EMAIL)){
            $emailErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Email Invalide" . "</h6>";
        }
        if (empty($password)){
            $passwordErrMsg = "<h6 style = 'color:red;font-size:10px;'> " . "Password required" . "</h6>";
        }

        //CONNECT TO THE DATABASE

        $sql = ("SELECT * FROM adminFlotila");
        $stmt = $conn->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);       

        if($email === $result[0]['email'] || $email === $result[1]['email'])
        {
            if(password_verify($password, $result[0]['passwordCheck']))
            {
                $_SESSION['email_admin_one'] = $result[0]['email'];                 
                $_SESSION['fullname_admin_one'] = $result[0]['fullname']; 
                
                header("Location:dashboard");
                die; 

            }elseif( password_verify($password, $result[1]['passwordCheck'])) 
            {
                $_SESSION['email_admin_two'] = $result[1]['email']; 
                $_SESSION['fullname_admin_two'] = $result[1]['fullname']; 

                header("Location:dashboard");
                die; 

            }else{
                $login_error =  "<h6 style = 'color:red;font-size:10px;'> " . "Password incorrect" . "</h6>";
            }

        }else{
            $login_error = "<h6 style = 'color:red;font-size:10px;'> " . "Email incorrect" . "</h6>";
        }

    }