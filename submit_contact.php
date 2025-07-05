<?php
require_once 'includes/functions.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input data
    $full_name = sanitize_input($_POST['full_name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    
    // Validate required fields
    if (empty($full_name) || empty($email) || empty($message)) {
        $response['message'] = 'Please fill in all required fields.';
    } elseif (!validate_email($email)) {
        $response['message'] = 'Please enter a valid email address.';
    } else {
        // Add contact message to database
        if (add_contact($full_name, $email, $message)) {
            $response['success'] = true;
            $response['message'] = 'Thank you for your message! We will get back to you soon.';
            
            // Send auto-reply email (placeholder)
            $subject = 'Thank you for contacting ' . SITE_NAME;
            $auto_reply = "Dear $full_name,\n\nThank you for contacting us. We have received your message and will get back to you within 24 hours.\n\nBest regards,\n" . SITE_NAME;
            send_email($email, $subject, $auto_reply);
        } else {
            $response['message'] = 'Sorry, there was an error sending your message. Please try again.';
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
$_SESSION['contact_message'] = $response['message'];
$_SESSION['contact_success'] = $response['success'];
header('Location: contactus.php');
exit();
?>

