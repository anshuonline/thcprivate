<?php
header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// Get JSON POST body
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (!$data) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid Request']);
    exit;
}

// Sanitize inputs
$name = htmlspecialchars(strip_tags(trim($data['name'] ?? '')));
$email = filter_var(trim($data['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(strip_tags(trim($data['phone'] ?? '')));
$service = htmlspecialchars(strip_tags(trim($data['service'] ?? '')));
$message_body = htmlspecialchars(strip_tags(trim($data['message'] ?? '')));

if (empty($name) || empty($email) || empty($service) || empty($message_body)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

// Prepare Email
$to = 'support@hypecrews.com';
$subject = "New Inquiry: $service - from $name";

$htmlContent = "
<html>
<head>
  <title>New Inquiry from Website</title>
</head>
<body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
  <h2>New Official Inquiry</h2>
  <table style='width: 100%; border-collapse: collapse;'>
    <tr>
      <td style='padding: 8px; border: 1px solid #ddd; font-weight: bold; width: 150px;'>Name</td>
      <td style='padding: 8px; border: 1px solid #ddd;'>{$name}</td>
    </tr>
    <tr>
      <td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>Email</td>
      <td style='padding: 8px; border: 1px solid #ddd;'>{$email}</td>
    </tr>
    <tr>
      <td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>Phone</td>
      <td style='padding: 8px; border: 1px solid #ddd;'>{$phone}</td>
    </tr>
    <tr>
      <td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>Service Selected</td>
      <td style='padding: 8px; border: 1px solid #ddd;'>{$service}</td>
    </tr>
    <tr>
      <td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>Project Details</td>
      <td style='padding: 8px; border: 1px solid #ddd;'>" . nl2br($message_body) . "</td>
    </tr>
  </table>
</body>
</html>
";

// Headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Hype Crews Website <noreply@thehypecrews.in>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";

// Send Email
if (mail($to, $subject, $htmlContent, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent successfully. We will contact you within 24 hours.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Oops! Something went wrong while sending the email. Please try again later.']);
}
?>
