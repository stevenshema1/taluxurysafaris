<?php
require_once 'includes/functions.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input data
    $full_name = sanitize_input($_POST['full_name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $phone = sanitize_input($_POST['phone'] ?? '');
    $package = sanitize_input($_POST['package'] ?? '');
    $travel_date = sanitize_input($_POST['travel_date'] ?? '');
    $number_of_guests = (int)($_POST['number_of_guests'] ?? 1);
    $additional_notes = sanitize_input($_POST['additional_notes'] ?? '');
    
    // Validate required fields
    if (empty($full_name) || empty($email) || empty($package) || empty($travel_date) || $number_of_guests < 1) {
        $response['message'] = 'Please fill in all required fields.';
    } elseif (!validate_email($email)) {
        $response['message'] = 'Please enter a valid email address.';
    } elseif (strtotime($travel_date) < time()) {
        $response['message'] = 'Travel date must be in the future.';
    } else {
        // Add booking to database
        if (add_booking($full_name, $email, $phone, $package, $travel_date, $number_of_guests, $additional_notes)) {
            $response['success'] = true;
            $response['message'] = 'Thank you! Your booking request has been submitted successfully. We will contact you soon to confirm your reservation.';
            
            // Send confirmation email (placeholder)
            $subject = 'Booking Confirmation - ' . SITE_NAME;
            $message = "Dear $full_name,\n\nThank you for your booking request for $package.\n\nWe will contact you soon to confirm your reservation.\n\nBest regards,\n" . SITE_NAME;
            send_email($email, $subject, $message);
        } else {
            $response['message'] = 'Sorry, there was an error processing your booking. Please try again.';
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
$_SESSION['booking_message'] = $response['message'];
$_SESSION['booking_success'] = $response['success'];
header('Location: bookings.php');
exit();
?>

