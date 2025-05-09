<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Set headers for JSON response
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize the email
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'success' => false,
            'message' => 'Please enter a valid email address.'
        ]);
        exit;
    }

    // Create the subscribers directory if it doesn't exist
    $subscribers_dir = 'subscribers';
    if (!file_exists($subscribers_dir)) {
        mkdir($subscribers_dir, 0777, true);
    }

    // Create or append to the subscribers file
    $subscribers_file = $subscribers_dir . '/subscribers.txt';
    $timestamp = date('Y-m-d H:i:s');
    $data = "$email|$timestamp\n";

    // Check if email already exists
    $existing_emails = [];
    if (file_exists($subscribers_file)) {
        $existing_emails = file($subscribers_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($existing_emails as $line) {
            list($stored_email) = explode('|', $line);
            if ($stored_email === $email) {
                echo json_encode([
                    'success' => false,
                    'message' => 'This email is already subscribed to our newsletter.'
                ]);
                exit;
            }
        }
    }

    // Save the new subscriber
    if (file_put_contents($subscribers_file, $data, FILE_APPEND)) {
        // Send notification email to admin
        $to = 'brmcooray@gmail.com';
        $subject = 'New Newsletter Subscription';
        $message = "A new user has subscribed to the newsletter:\n\n";
        $message .= "Email: " . $email . "\n";
        $message .= "Time: " . $timestamp . "\n";
        $headers = 'From: My IT Certs <noreply@myitcerts.com>' . "\r\n";
        
        // Send the notification email
        mail($to, $subject, $message, $headers);
        
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for subscribing! We will notify you when we launch.'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'There was an error processing your subscription. Please try again.'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
} 