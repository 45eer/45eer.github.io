<?php $ffname = $_POST['firstname'];
$lfname = $_POST['lastname'];
$efmail = $_POST['email'];
$fmessage = $_POST['subject'];
$formcontent="From: $ffname $lfname \n Message: $fmessage";
$recipient = "hufnald119@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $efmail \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
