<?php

if (isset($_POST['login-submit'])){
    

    require 'dbh.inc.php';
    
    $mailuid = $_POST['mailuid'];
    $password= $_POST['pwd'];
    
    //checking if the parameters user or password are empty
    if(empty($mailuid) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        //user should be allowed to enter in the website with email or username
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {
            
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            //check with we get information from the database
            if($row = mysqli_fetch_assoc($result)){
                //check if the password given match with the user given
                $pwdcheck = password_verify($password, $row['pwdUsers']);
                if ($pwdcheck == false){
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
                else if($pwdcheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    
                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
                    
            }
            else{
                header("Location: ../login.php?error=nouser");
                exit(); 
            }
            
        }
    }
    
}
else{
    header("Location: ../login.php");
    exit();
}