<?php
$name = $_POST {'name'}
$visitor_email = $_POST{'email'}
$message = $_POST{'message'}

$email_form = 'mphomotsengmolefe@gmail.com';

$email_subject = "New Form Submission";

$email_body = "user Name: $name.\n",
                "Form Email: $visitor_email \.n"
                "User Message: $message.\n";

    $to = "mphomotsengmolefe@gmail.com";
    $headers = "From: $email_from\r\n";
    $headers = "Reply-to: $visitor_email\r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location: contacts.html");