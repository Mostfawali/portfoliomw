<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "walimostfa22@gmail.com";
    $subject = "New Contact Message";
    $txt = "Name: " . $name . "\n" .
           "Email: " . $email . "\n" .
           "Phone: " . $phone . "\n" .
           "Subject: " . $subject . "\n\n" .
           "Message: " . $message;

    mail($to, $subject, $txt);

    header("Location: contact.html");
    exit();
}

