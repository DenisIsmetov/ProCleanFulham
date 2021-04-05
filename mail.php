<?php 

session_start();

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$tel = $_POST['tel'];

$formcontent="From:  ".$name." .\n\n ".$message" .\n\n ".$tel;
$recipient = "office@procleanfulham.co.uk";
$mailheader = "From: ".$email;

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("location:index.html");
} 
?>