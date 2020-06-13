<?php

if (isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];
    
    //create the rest of the variables
    $mailTo = "victor_ribeiro92@hotmail.com";
    $headers = "From: My website - Ready Skin".$emailFrom;
    $text = "You have received an email from ".$name."\n\n".$message;
    
    //three parameter: my email, 
    mail($mailTo, $subject, $text,$headers);
    header("location:index.php?mailsend");
}