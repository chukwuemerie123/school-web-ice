<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars($_POST['password']);
    $date = htmlspecialchars($_POST['date']);
    $course = htmlspecialchars($_POST['course']);
    $message = htmlspecialchars($_POST['message']);

    $to = "princewillchukwuemeriempc879@gmail.com";
    $subject = "New Student Registration";
    $body = "First Name: $firstname\nSurname: $surname\nEmail: $email\nPhone: $phone\nPassword: $password\nDate: $date\nCourse: $course\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.html"); // Redirect to contact.html after successful submission
        exit();
    } else {
        echo "Email sending failed. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
