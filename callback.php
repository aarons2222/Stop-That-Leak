<?php     

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = "aaron@aaronstrickland.co.uk";
$subject = "Callback Request";

$body_message ="Name: $name \n Phone: $phone\n 'Message: $message";



$mail_status = mail($to, $subject, $body_message, "From: " . $name);



if ($mail_status) { ?>

<script language="javascript" type="text/javascript">
// Print a message
alert('Thank you for your Callback request. We will contact you shortly.');
// Redirect to some page of the site.
window.location = 'index.html';
</script>
<?php
}

else { ?>
<script language="javascript" type="text/javascript">
// Print a message
alert('Message failed. Please use the contact page to contact us');
// Redirect to some page of the site.
window.location = 'contact.html';
</script>
<?php
}
?>






