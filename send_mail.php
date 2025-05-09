<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $exam_vendor = trim($_POST['Exam'] ?? '');
    $exam_name = trim($_POST['exam_name'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if (!$name || !$email || !$phone || !$exam_vendor || !$exam_name || !$message) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
        exit;
    }

    $to = 'brmcooray@gmail.com';
    $subject = "New Contact Form Submission from My IT Certs";
    $body = "You have received a new message from the My IT Certs contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Exam Vendor: $exam_vendor\n";
    $body .= "Exam Name: $exam_name\n";
    $body .= "Message:\n$message\n";
    $headers = "From: OAExams <no-reply@oaexams.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        // Return success response for AJAX
        echo json_encode(['success' => true]);
    } else {
        // Return error response for AJAX
        echo json_encode(['success' => false, 'message' => 'There was an error sending your message. Please try again.']);
    }
} else {
    header('Location: contact.php');
    exit;
} 