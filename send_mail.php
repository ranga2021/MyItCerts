
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $exam_vendor = trim($_POST['exam_vendor'] ?? '');
    $exam_name = trim($_POST['exam_name'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if (!$name || !$email || !$exam_vendor || !$exam_name || !$message) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
        exit;
    }

    // Prepare email body
    $to = 'contact@collegeexceed.com';
    $subject = "New Contact Form Submission from AI Exam Support";
    $body = "You have received a new message from the AI Exam Support contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Exam Vendor: $exam_vendor\n";
    $body .="Exam Name: $exam_name\n";
    $body .= "Message:\n$message\n";
    $body = wordwrap($body, 70);

    $mail = new PHPMailer(true);
    try {
        // SMTP settings (Gmail example)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'collegeexceed@gmail.com'; // TODO: Replace with your SMTP username
        $mail->Password = 'ilfl buxp ihcl vlct'; // TODO: Replace with your SMTP password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('no-reply@myitcerts.com', 'AI Exam Support');
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->isHTML(false);

        $mail->send();

        // Auto-reply to user
        $autoMail = new PHPMailer(true);
        $autoMail->isSMTP();
        $autoMail->Host = 'smtp.gmail.com';
        $autoMail->SMTPAuth = true;
        $autoMail->Username = 'collegeexceed@gmail.com'; // TODO: Replace with your SMTP username
        $autoMail->Password = 'ilfl buxp ihcl vlct'; // TODO: Replace with your SMTP password or app password
        $autoMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $autoMail->Port = 587;

        $autoMail->setFrom('contact@collegeexceed.com', 'AI Exam Support');
        $autoMail->addAddress($email, $name);
        $autoMail->Subject = "We've Received Your Message. Next Steps for AI Certification Exam Help";
        $autoMail->isHTML(true);
        $autoMail->Body = "<html><body style='font-family: Arial, sans-serif; font-size: 14px; color: #000;'>"
            . "<p>Hi there,</p>"
            . "<p>Thank you for your message — we've received it!</p>"
            . "<p>Due to the high volume of emails we receive daily, we may not be able to respond promptly through this channel. "
            . "To get faster assistance and support for your exams, please contact us through one of our dedicated messaging platforms below:</p>"
            . "<ul>"
            . "<li><strong>WhatsApp:</strong> <a href='https://api.whatsapp.com/send/?phone=18077700499' target='_blank'>Click here</a></li>"
            . "<li><strong>Telegram:</strong> <a href='https://telegram.me/collegeexceed' target='_blank'>Click here</a></li>"
            . "<li><strong>Signal:</strong> <a href='https://signal.me/#eu/xUyrqfkB2Nn5zJupx2mft_zQnVdZtCBY3e-HSO7MG5ZyFCcqzMFEHaa6Fug1oysp' target='_blank'>Click here</a></li>"
            . "</ul>"
            . "<p>We're available and ready to help you on these platforms.</p>"
            . "<br>"
            . "<p style='font-size: 10px; color: #555;'>This is an automated message. Please do not reply to this email.</p>"
            . "</body></html>";
        $autoMail->send();

        echo json_encode(['success' => true]);
        exit;
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
        exit;
    }
} else {
    header('Location: contact.php');
    exit;
}
?>
