<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'david.davies2022@gmail.com';
$subject = 'Contact form submission';
$body = "From: $name\nEmail: $email\nMessage:\n$message";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    header('Location: contactsent.html');
    exit;
} else {
    // Error sending email
    header('Location: error.html');
    exit;
}
?>





