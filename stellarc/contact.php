<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
   
    $message = $_POST["message"];

    
    $to = "support@stellar-cs.com";
    $subject = "Contact Form Submission";
    $message = "Name:$name\nPhone:$phone\nEmail:$email\nMessage:$message";
    $headers = "From:support@stellar-cs.com"; 
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
       header("Location:contactus.html");
    } else {
        echo "error";
        
        
    }
}
?>