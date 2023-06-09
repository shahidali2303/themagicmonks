<?php

    $to = "bizz.shahid@gmail.com";
    $subject = "New Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $phone = $_POST["phone"];
    $projectType= $_POST["projectType"];
    $companyName = $_POST["companyName"]
    

    // Additional headers
    $headers = "From: ".$name. "\r\n".
    "CC:shahididforfun@gmail.com";
 
    $txt =  "You have received an email from ".$name ."\r\nEmail:- " .$email ."\r\nMobile:- " .$phone ."
        \r\nMessage: ". $message;

        if($email !=NULL){
            mail($to, $subject,$txt,$headers);
        }
        header('Location:thankyou.html')

 

?>
