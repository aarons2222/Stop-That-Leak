<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "aaron@aaronstrickland.co.uk";
$subject = "Plumbing Enquiry";

mail ($to, $subject, $message, "From: " . $email);
echo "Thank you, your message has been sent."
?>