<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@jdesigns.com';

$email_subject = 'Form Requests'

$email_body = "User Name: $name.\n".
              "User Email: $email.\n".
              "Subject: $subject.\n".
              "Message: $message.\n";

$to = 'johananjohn78@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>