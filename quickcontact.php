<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_to = 'aaron@aaronstrickland.co.uk';
$email_subject = 'Call Back';

$body_message .= 'Name: '.$name."\n";
$body_message .= 'Phone: '.$phone."\n";
$body_message .= 'Message: '.$message;

$headers = "From: $field_email\r\n";
$headers .= "Reply-To: $field_email\r\n";

$mail_status = mail($email_to, $email_subject, $body_message, $headers);

if ($mail_status) { ?>
<script language="javascript" type="text/javascript">
// Print a message
alert('Thank you for the message. We will contact you shortly.');
// Redirect to some page of the site.
window.location = 'http://www.one.com';
</script>
<?php
}

else { ?>
<script language="javascript" type="text/javascript">
// Print a message
alert('Message failed. Please, send an email to contact@stopthatleak.co.uk');
// Redirect to some page of the site.
window.location = 'contact.html';
</script>
<?php
}
?>

