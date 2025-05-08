<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $program = trim($_POST['subject'] ?? '');
    $class_code = trim($_POST['class_code'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if (!$name || !$email || !$phone || !$program || !$class_code || !$message) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
        exit;
    }

    $to = 'contact@collegeexceed.com';
    $subject = "New Contact Form Submission from OAExams";
    $body = "You have received a new message from the OAExams contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Program: $program\n";
    $body .= "Class Code: $class_code\n";
    $body .= "Message:\n$message\n";
    $headers = "From: OAExams <no-reply@oaexams.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you for your message. We will get back to you soon!'); window.location='contact.php';</script>";
    } else {
        echo "<script>alert('There was an error sending your message. Please try again.'); window.history.back();</script>";
    }
} else {
    header('Location: contact.php');
    exit;
} 