<?php

if ($_POST['action'] == 'Send') {
//Collect the data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
//Check the data
if (empty($name) || empty($message)) {
    $reply = 'Sorry, one or more fields are empty. All fields are required.';
    include '/triathlon/contact.php';
    exit;
}

//Assemble the message
$finalmessage = "Name: $name \n";
$finalmessage .= "Email: $email \n";
$finalmessage .= "Message: \n $message";

//Send the message
$to = 'your email address goes here';
$from = "From: $email";
$result = mail($to, $subject, $finalmessage, $from);

//Let the client know what happened
if ($result == TRUE) {
    $reply = "Thank you $name for contacting me.";
    unset($name);
    unset($email);
    unset($message);
    include '/triathlon/contact.php';
    exit;
} else {
    $reply = "Sorry $name but there was an error and the message could not be sent.";
    unset($name);
    unset($email);
    unset($message);
    include '/triathlon/contact.php';
    exit;
}
?>

