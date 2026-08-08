<?php
// submit-career.php

// Define recipient email
$to = "thehypecrews@proton.me";
$subject = "New Career Application";

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
    // Trigger success message in parent window if using hidden iframe
    echo "<script>window.parent.postMessage('application_success', '*');</script>";
} else {
    // Fallback error
    echo "<script>window.parent.postMessage('application_error', '*');</script>";
}
?>
