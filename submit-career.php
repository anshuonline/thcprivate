<?php
// submit-career.php

// Define recipient email
$to = "thehypecrews@proton.me";
$subject = "New Career Application";

// Security: Enforce POST method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<script>window.parent.postMessage('application_error', '*');</script>";
    exit;
}

// Security: Honeypot check (bots fill hidden fields)
if (!empty($_POST['_honey'])) {
    echo "<script>window.parent.postMessage('application_success', '*');</script>"; // Fake success to trick bot
    exit;
}

// Basic field validation
$name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : 'Not provided';
$email = isset($_POST['email']) ? strip_tags(trim($_POST['email'])) : 'Not provided';
$phone = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : 'Not provided';
$position = isset($_POST['position']) ? strip_tags(trim($_POST['position'])) : 'Not provided';
$experience = isset($_POST['experience']) ? strip_tags(trim($_POST['experience'])) : 'Not provided';
$portfolio = isset($_POST['portfolio']) ? strip_tags(trim($_POST['portfolio'])) : 'Not provided';
$cover_letter = isset($_POST['cover_letter']) ? strip_tags(trim($_POST['cover_letter'])) : 'Not provided';

// Prepare email body text
$message = "You have received a new career application.\n\n";
$message .= "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Phone: $phone\n";
$message .= "Position Applied For: $position\n";
$message .= "Total Experience: $experience Years\n";
$message .= "Portfolio/LinkedIn: $portfolio\n\n";
$message .= "Cover Letter:\n$cover_letter\n";

// Handle file attachment
$file = $_FILES['attachment'];
$file_tmp = $file['tmp_name'];
$file_name = $file['name'];
$file_size = $file['size'];
$file_error = $file['error'];

$headers = "From: no-reply@" . $_SERVER['HTTP_HOST'] . "\r\n";
$headers .= "Reply-To: $email\r\n";

if ($file_error === UPLOAD_ERR_OK) {
    // Generate boundary string
    $boundary = md5(time());

    // Modify headers for multipart mixed
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // Read and encode file
    $content = file_get_contents($file_tmp);
    $content = chunk_split(base64_encode($content));

    // Message body (text part)
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= $message . "\r\n\r\n";

    // Message body (attachment part)
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: application/pdf; name=\"$file_name\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n\r\n";
    $body .= $content . "\r\n\r\n";
    $body .= "--$boundary--";
} else {
    // Send without attachment
    $body = $message;
}

// Send Email
if (mail($to, $subject, $body, $headers)) {
    
    // --- Auto-Responder to Applicant ---
    $user_subject = "Thank you for applying to The Hype Crews!";
    
    $user_message = "
    <html>
    <head>
      <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; }
        .header { background-color: #0b1120; padding: 20px; text-align: center; }
        .header img { max-width: 200px; }
        .content { padding: 30px; }
        .footer { background-color: #f3f4f6; padding: 20px; text-align: center; font-size: 12px; color: #6b7280; }
      </style>
    </head>
    <body>
      <div class='header'>
        <img src='https://thehypecrews.in/images/hypecrews%20logo%20white.png' alt='The Hype Crews'>
      </div>
      <div class='content'>
        <p>Hi $name,</p>
        <p>Thank you for submitting your application for the <strong>$position</strong> role.</p>
        <p>Our hiring team will carefully review your resume and portfolio. If your profile matches our current requirements, we will get back to you shortly.</p>
        <br>
        <p>Best Regards,</p>
        <p><strong>The Hype Crews Team</strong><br>
        <a href='https://thehypecrews.in' style='color: #1d4ed8; text-decoration: none;'>thehypecrews.in</a></p>
      </div>
      <div class='footer'>
        <p>&copy; " . date('Y') . " Hypecrews Software Private Limited. All rights reserved.</p>
      </div>
    </body>
    </html>
    ";
    
    $user_headers = "From: The Hype Crews <no-reply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $user_headers .= "Reply-To: support@hypecrews.com\r\n";
    $user_headers .= "MIME-Version: 1.0\r\n";
    $user_headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Send the thank you email
    mail($email, $user_subject, $user_message, $user_headers);
    // -----------------------------------

    // Trigger success message in parent window if using hidden iframe
    echo "<script>window.parent.postMessage('application_success', '*');</script>";
} else {
    // Fallback error
    echo "<script>window.parent.postMessage('application_error', '*');</script>";
}
?>
