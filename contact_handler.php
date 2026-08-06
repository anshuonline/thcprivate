<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = filter_var($_POST['name'] ?? '', FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $service = filter_var($_POST['service'] ?? '', FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'] ?? '', FILTER_SANITIZE_STRING);

    // Validate
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
        exit;
    }

    // Since there is no database as requested, we can either send an email or just return success.
    // We will attempt to send an email. If you want to use a real SMTP server later, you can replace this mail() call.
    $to = 'admin@thehypecrews.com'; // Replace with actual admin email if needed
    $subject = 'New Contact Form Submission - ' . $service;
    
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Service Interest: $service\n\n";
    $emailContent .= "Message:\n$message\n";
    
    $headers = "From: noreply@thehypecrews.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Uncomment the below line to actually send emails if the server is configured
    // $mailSent = mail($to, $subject, $emailContent, $headers);
    
    // For now, we just simulate success.
    $mailSent = true;

    if ($mailSent) {
        echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent successfully. We will get back to you soon.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send message. Please try again later.']);
    }

} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
