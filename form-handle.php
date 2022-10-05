<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$email_from = 'info@yourwensite.com'

$email_subject = 'New Frm Submisson'

$email_body = "user Name: $name.\n". 
                "user Name: $visitor_email.\n".
                 "subject: $subject.\n".
                "user message: $message.\n";

$to = 'mwanzacaleb16@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>