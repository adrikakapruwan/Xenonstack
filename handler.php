<?php
$name = $_POST[''];
$email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];
$email.from='spreadinghopes@info.co.in'
$email.subject='New form'
$email.body="User Name: $name.\n".
            "User Email: $email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n".
$to = 'adrikakapruwan@gmail.com'
$headers= "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
mail($to,$email.subject,$email.body,$headers);
header("Location: contact.html")
?>