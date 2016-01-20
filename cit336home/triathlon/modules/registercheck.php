<?php

if ($_POST['action'] == 'Send') {
//Collect the data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $captcha = strtolower($_POST['captcha']);
}
//Check the data
if (empty($firstname) || empty($lastname)) {
    $reply = 'Sorry, one or more fields are empty. All fields are required.';
    include '/triathlon/register.php';
    exit;
}
//Check the captcha
if (empty($captcha) || $captcha != 'red') {
    $reply = 'The captcha answer is incorrect.';
    include '/triathlon/register.php';
    exit;
}

//Assemble the message
$finalmessage = "Name: $firstname $lastname \n";
$finalmessage .= "Email: $email \n";

//Send the message
$to = 'your email address goes here';
$from = "From: $email";
$result = mail($to, $finalmessage, $from);

//Let the client know what happened
if ($result == TRUE) {
    $reply = "Thank you $firstname for registering with us!";
    unset($firstname);
    unset($lastname);
    unset($email);
    include '/triathlon/register.php';
    exit;
} else {
    $reply = "Sorry $firstname but there was an error and the registration was not sent.";
    unset($firstname);
    unset($lastname);
    unset($email);
    include '/triathlon/register.php';
    exit;
}
?>

