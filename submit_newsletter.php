<?php
require_once 'includes/functions.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input data
    $email = sanitize_input($_POST['newsletter_email'] ?? '');
    
    // Validate email
    if (empty($email)) {
        $response['message'] = 'Please enter your email address.';
    } elseif (!validate_email($email)) {
        $response['message'] = 'Please enter a valid email address.';
    } else {
        // Add subscriber to database
        if (add_newsletter_subscriber($email)) {
            $response['success'] = true;
            $response['message'] = 'Thank you for subscribing to our newsletter!';
            
            // Send welcome email (placeholder)
            $subject = 'Welcome to ' . SITE_NAME . ' Newsletter';
            $welcome_message = "Thank you for subscribing to our newsletter!\n\nYou'll receive updates about our latest safari packages and travel tips.\n\nBest regards,\n" . SITE_NAME;
            send_email($email, $subject, $welcome_message);
        } else {
            $response['message'] = 'This email is already subscribed to our newsletter.';
        }
    }
} else {
    $response['message'] = 'Invalid request method.';
}

// Return JSON response for AJAX requests
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

// For regular form submissions, redirect back with message
$_SESSION['newsletter_message'] = $response['message'];
$_SESSION['newsletter_success'] = $response['success'];
header('Location: ' . $_SERVER['HTTP_REFERER'] ?? 'index.php');
exit();
?>

