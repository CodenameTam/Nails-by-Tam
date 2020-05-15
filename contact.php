<?php
    $name = $_POST['clientName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'Custom Order Message!';
    $email_subject = 'Click NOW Boss Lady!';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Subject: $subject.\n".
                  "Message: $message.\n";
    
    $to = "nailsbytam.h@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");
?>