<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'dinokrisi@gmail.com';
$email_subject = 'Contact Form Submission'
$email_body =   "User Name: $name. \n"
                "User Email: $email. \n"
                "Subject: $subject. \n"
                "User Message: \n $message. \n";
$to = 'kristiyank99@gmail.com';

$headers = "From: $email_form /r/n";
$headers .= "Reply To: $email /r/n";

mail($to, $email_subject, $email_body, $headers);
header("Lonaction: contact.html");
?>
