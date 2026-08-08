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
$message .= "Cover Letter:\n$cover_letter\n\n";
$message .= "========================================================\n";
$message .= "SECURITY WARNING (FOR HIRING TEAM):\n";
$message .= "If an applicant's resume looks suspicious, do NOT click on any weird links inside it.\n";
$message .= "========================================================\n";

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

// Set envelope sender to match the From address
$envelope_sender = "-f no-reply@" . $_SERVER['HTTP_HOST'];

// Send Email
if (mail($to, $subject, $body, $headers, $envelope_sender)) {
    
    // --- Auto-Responder to Applicant ---
    $user_subject = "Thank you for applying to The Hype Crews!";
    
    $user_message = '
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <style>
        body { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 1.6; color: #333333; margin: 0; padding: 0; background-color: #f9fafb; }
        .email-wrapper { width: 100%; background-color: #f9fafb; padding: 40px 0; }
        .email-container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e5e7eb; }
        .header { background-color: #0b1120; padding: 30px 20px; text-align: center; }
        .header img { max-width: 180px; }
        .content { padding: 40px 30px; }
        .content h1 { font-size: 22px; color: #111827; margin-top: 0; margin-bottom: 20px; font-weight: 600; }
        .content p { font-size: 15px; color: #4b5563; margin-bottom: 20px; }
        .content .highlight { color: #1d4ed8; font-weight: 600; }
        .divider { height: 1px; background-color: #e5e7eb; margin: 30px 0; }
        .footer { background-color: #f3f4f6; padding: 30px 20px; text-align: center; border-top: 1px solid #e5e7eb; }
        .footer p { font-size: 13px; color: #6b7280; margin: 5px 0; }
        .footer a { color: #1d4ed8; text-decoration: none; }
        .automated-notice { font-size: 11px; color: #9ca3af; font-style: italic; margin-top: 25px; padding-top: 15px; border-top: 1px dashed #d1d5db; }
      </style>
    </head>
    <body>
      <div class="email-wrapper">
        <div class="email-container">
          <div class="header">
            <img src="https://thehypecrew.in/images/hypecrews-logo-white.png" alt="The Hype Crews">
          </div>
          <div class="content">
            <h1>Application Received Successfully</h1>
            <p>Hi <strong>' . $name . '</strong>,</p>
            <p>Thank you for expressing your interest in joining our team! We have successfully received your application for the <span class="highlight">' . $position . '</span> position.</p>
            <p>At The Hype Crews, we are always looking for passionate and talented individuals. Our hiring team will carefully review your resume and portfolio against our current requirements.</p>
            <p>If your profile aligns with what we are looking for, a recruiter will reach out to you shortly to discuss the next steps in our interview process.</p>
            
            <div class="divider"></div>
            
            <p>Best Regards,</p>
            <p><strong>Talent Acquisition Team</strong><br>Hypecrews Software Private Limited</p>
            
            <div style="margin-top: 35px; padding: 15px; background-color: #fef2f2; border: 1px solid #fecaca; border-radius: 6px;">
                <p style="margin: 0; font-size: 12px; color: #991b1b; line-height: 1.5;"><strong>⚠️ Security Notice:</strong> Hypecrews Software Private Limited does not charge any fees at any stage of our recruitment process. We will never ask for payment or banking details. Please beware of fraudulent job offers.</p>
            </div>
          </div>
          <div class="footer">
            <p><strong>Hypecrews Software Private Limited</strong></p>
            <p><a href="https://thehypecrew.in">thehypecrew.in</a> | <a href="mailto:support@hypecrews.com">support@hypecrews.com</a></p>
            <p class="automated-notice">Please do not reply to this email. This is an automated message generated by our system.</p>
            <p style="margin-top: 15px; font-size: 12px;">&copy; ' . date('Y') . ' Hypecrews Software Private Limited. All rights reserved.</p>
          </div>
        </div>
      </div>
    </body>
    </html>
    ';
    
    $user_headers = "From: The Hype Crews <no-reply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $user_headers .= "Reply-To: support@hypecrews.com\r\n";
    $user_headers .= "MIME-Version: 1.0\r\n";
    $user_headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Set envelope sender to match the From address
    $envelope_sender = "-f no-reply@" . $_SERVER['HTTP_HOST'];
    
    // Send the thank you email
    mail($email, $user_subject, $user_message, $user_headers, $envelope_sender);
    // -----------------------------------

    // Trigger success message in parent window if using hidden iframe
    echo "<script>window.parent.postMessage('application_success', '*');</script>";
} else {
    // Fallback error
    echo "<script>window.parent.postMessage('application_error', '*');</script>";
}
?>
