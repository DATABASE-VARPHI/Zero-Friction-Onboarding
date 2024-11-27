<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $company = htmlspecialchars($_POST['company']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "your-email@example.com"; // Replace with your email
    $subject = "Demo Request from $name";
    $body = "Name: $name\nEmail: $email\nCompany: $company\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your request! We'll get back to you soon.";
    } else {
        echo "There was an error sending your request. Please try again later.";
    }
}
?>
