<?php
$field_name = $_POST['cf_name'];
$field_phone = $_POST['cf_phone'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$email_to = 'aaron@aaronstrickland.co.uk';
$email_subject = 'Customer Message';

$body_message .= 'Name: '.$field_name."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = "From: $field_email\r\n";
$headers .= "Reply-To: $field_email\r\n";

$mail_status = mail($email_to, $email_subject, $body_message, $headers);

if ($mail_status) { ?>
<script language="javascript" type="text/javascript">
// Print a message
alert('Thank you for the message. We will contact you shortly.');
// Redirect to some page of the site.
window.location = 'index.html';
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

