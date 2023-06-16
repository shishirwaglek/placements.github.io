<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to = "placementwebform@gmail.com

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone"\r\n Subject =" . $subject"\r\n Message =" . $message;
$headers = "From: Placement@placement.com" . "\r\n" .
"CC: shishirwaglek@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>