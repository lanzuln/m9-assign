<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo "Thank you for contacting us, $name!";
} else {

    header('Location: contact.html');
    exit;
}
?>