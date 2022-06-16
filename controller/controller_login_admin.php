<?php 
    //LINK THE DATABASE CONNECTION
    include 'database/database.php';

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
        if(isset($result)){
            foreach ($result as $results){
                $emailResult = $results['email'];
                $passwordResult = $results['passwordCheck'];
                $_SESSION['fullName'] = $results['fullname'];
            }
        }

        if($email !== $emailResult){
            echo "<h6 style = 'color:red;font-size:10px;'> " . "Email incorrect" . "</h6>";
        }

        if (password_verify($password, $passwordResult)){
            header("Location:dashboard.php");
        }

      

      
       

        



    }