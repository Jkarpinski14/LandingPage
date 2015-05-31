<?php
@extract($_POST);
$admin = 'jkarpinski14@yahoo.com' ; // Change to your admin email 'from' address
$subject = 'Email to Jonah Karpinski'; //Your email subject
$name = stripslashes('name'); //can be stripslashes('name');
$email = stripslashes($email);

// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// Additional headers as http://php.net/manual/en/function.mail.php
$headers .= 'From: Your Name <jkarpinski14@gmail.com>' . "\r\n";
//ACTIVE mail below to $admin (you) and $email (the other person)
mail( $admin, "Feedback: $subject", "$name $email", "From: $admin>" );
$send_contact=mail("$name <$email>", "Feedback: $subject", $headers );
if($send_contact){
echo "Thanks. Your email was sent.";
}
else {
echo "ERROR";
}
?>