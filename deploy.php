<?php
/**
 * GitHub Webhook Auto Deploy Script
 * Add this URL (e.g. https://yourdomain.com/deploy.php) to your GitHub repository Webhooks.
 */

// Secret key for GitHub webhook (you should match this in your GitHub webhook settings)
// For security, you can define a secret string here and in GitHub.
$secret = '';

// Path to the git repository (usually the current directory)
$repo_dir = __DIR__;

// Log file path
$log_file = $repo_dir . '/deploy.log';

// Function to log messages
function logMessage($msg) {
    global $log_file;
    $time = date('Y-m-d H:i:s');
    file_put_contents($log_file, "[$time] $msg\n", FILE_APPEND);
}

// Request method check removed to allow GET requests (visiting via browser)

// Check secret if defined
if (!empty($secret)) {
    $signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
    
    if (!$signature) {
        logMessage("HTTP header 'X-Hub-Signature-256' is missing.");
        header('HTTP/1.1 403 Forbidden');
        exit('Signature missing');
    }

    $payload = file_get_contents('php://input');
    $hash = 'sha256=' . hash_hmac('sha256', $payload, $secret, false);

    if (!hash_equals($hash, $signature)) {
        logMessage("Hook secret does not match.");
        header('HTTP/1.1 403 Forbidden');
        exit('Invalid signature');
    }
}

// Perform Git Pull
try {
    logMessage("Triggered git pull...");
    
    // Commands to execute
    // You might need to change 'main' to 'master' depending on your default branch
    $commands = array(
        'git fetch origin',
        'git reset --hard origin/main', // Change 'main' if using a different branch
        'git pull origin main 2>&1'
    );

    $output = '';
    foreach ($commands as $command) {
        // Change working directory and execute
        $tmp = shell_exec("cd {$repo_dir} && {$command}");
        $output .= "Command: {$command}\n";
        $output .= "Output:\n" . htmlentities(trim($tmp)) . "\n\n";
    }

    logMessage("Deploy Output:\n" . $output);
    echo "Deployment successful.\n";

} catch (Exception $e) {
    logMessage("Error during deployment: " . $e->getMessage());
    header('HTTP/1.1 500 Internal Server Error');
    echo "Deployment failed.";
}
?>
