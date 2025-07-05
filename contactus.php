<?php
require_once 'includes/config.php';
$page_title = 'Contact Us';
$page_description = 'Get in touch with TA Luxury Safaris for inquiries, bookings, and custom safari planning. We are here to help plan your perfect East African adventure.';
include 'includes/header.php';

// Check for contact form messages
$contact_message = $_SESSION['contact_message'] ?? '';
$contact_success = $_SESSION['contact_success'] ?? false;
unset($_SESSION['contact_message'], $_SESSION['contact_success']);
?>

<!-- Page Header -->
<section class="page-header bg-army-green text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                <p class="lead">Get in touch with our safari experts</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Get In Touch</h2>
                <p class="lead text-muted">We're here to help you plan your perfect safari adventure</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-phone text-army-green fs-1"></i>
                        </div>
                        <h5 class="text-army-green mb-3">Phone</h5>
                        <p class="mb-2"><?php echo SITE_PHONE; ?></p>
                        <small class="text-muted">Mon-Fri: 8AM-5PM</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-envelope text-army-green fs-1"></i>
                        </div>
                        <h5 class="text-army-green mb-3">Email</h5>
                        <p class="mb-2"><?php echo SITE_EMAIL; ?></p>
                        <small class="text-muted">24/7 Response</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="contact-icon mb-3">
                            <i class="fab fa-whatsapp text-army-green fs-1"></i>
                        </div>
                        <h5 class="text-army-green mb-3">WhatsApp</h5>
                        <p class="mb-2">+250 78 1708 621</p>
                        <small class="text-muted">Quick Response</small>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-card card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-map-marker-alt text-army-green fs-1"></i>
                        </div>
                        <h5 class="text-army-green mb-3">Location</h5>
                        <p class="mb-2">Kigali, Rwanda</p>
                        <small class="text-muted">East Africa</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form and Map -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact-form-wrapper">
                    <h3 class="text-army-green mb-4">Send Us a Message</h3>
                    
                    <?php if ($contact_message): ?>
                        <div class="alert alert-<?php echo $contact_success ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                            <?php echo htmlspecialchars($contact_message); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <form id="contactForm" action="submit_contact.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="full_name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" name="subject">
                                    <option value="">Select a subject</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Booking Request">Booking Request</option>
                                    <option value="Custom Package">Custom Package</option>
                                    <option value="Group Booking">Group Booking</option>
                                    <option value="Travel Advice">Travel Advice</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tell us about your safari interests, travel dates, group size, or any specific questions..." required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter_signup" name="newsletter_signup">
                                    <label class="form-check-label" for="newsletter_signup">
                                        Subscribe to our newsletter for safari tips and special offers
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-army-green btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Contact Info and Map -->
            <div class="col-lg-6">
                <div class="contact-info-wrapper">
                    <h3 class="text-army-green mb-4">Visit Our Office</h3>
                    
                    <div class="office-info mb-4">
                        <div class="info-item d-flex align-items-start mb-3">
                            <i class="fas fa-map-marker-alt text-army-green me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1">Address</h6>
                                <p class="text-muted mb-0">Kigali, Rwanda<br>East Africa</p>
                            </div>
                        </div>
                        
                        <div class="info-item d-flex align-items-start mb-3">
                            <i class="fas fa-clock text-army-green me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1">Office Hours</h6>
                                <p class="text-muted mb-0">
                                    Monday - Friday: 8:00 AM - 5:00 PM<br>
                                    Saturday: 9:00 AM - 2:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                        
                        <div class="info-item d-flex align-items-start mb-3">
                            <i class="fas fa-headset text-army-green me-3 mt-1"></i>
                            <div>
                                <h6 class="mb-1">Emergency Support</h6>
                                <p class="text-muted mb-0">24/7 emergency assistance for travelers</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Google Map -->
                    <div class="map-container">
                        <h5 class="text-army-green mb-3">Find Us on Map</h5>
                        <div class="map-wrapper rounded shadow-sm">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127577.95184509308!2d30.059684!3d-1.9440727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca4258ed8e797%3A0xf32b36a5411d0bc8!2sKigali%2C%20Rwanda!5e0!3m2!1sen!2sus!4v1635789012345!5m2!1sen!2sus" 
                                width="100%" 
                                height="300" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Frequently Asked Questions</h2>
                <p class="lead text-muted">Quick answers to common questions</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                How far in advance should I book my safari?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We recommend booking at least 3-6 months in advance, especially for gorilla trekking permits which are limited. Peak seasons (June-September and December-January) require even earlier booking.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                What is included in your safari packages?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our packages typically include accommodation, transportation, professional guide, park fees, and specified activities. Meals, drinks, and personal expenses may vary by package. Full details are provided with each quote.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                Do I need a visa to visit Rwanda?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Most visitors can obtain a visa on arrival or apply online. We provide detailed visa information and assistance based on your nationality. Some countries have visa-free agreements with Rwanda.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                What should I pack for a safari?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Essential items include comfortable hiking boots, neutral-colored clothing, rain jacket, hat, sunscreen, insect repellent, and camera. We provide a detailed packing list upon booking confirmation.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                Is travel insurance required?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                While not mandatory, we strongly recommend comprehensive travel insurance covering medical expenses, trip cancellation, and emergency evacuation. We can recommend suitable insurance providers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-army-green text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold mb-3">Ready to Start Your Safari Adventure?</h2>
                <p class="lead mb-0">Contact us today and let our experts help you plan the perfect East African safari experience.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="bookings.php" class="btn btn-light btn-lg">
                    <i class="fas fa-calendar-check me-2"></i>Book Your Safari
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Contact Form Enhancement
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
    submitBtn.disabled = true;
    
    fetch('submit_contact.php', {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Show alert
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${data.success ? 'success' : 'danger'} alert-dismissible fade show`;
        alertDiv.innerHTML = `
            ${data.message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        // Insert alert before form
        this.parentNode.insertBefore(alertDiv, this);
        
        if (data.success) {
            this.reset();
        }
        
        // Restore button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Scroll to alert
        alertDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
        
        // Restore button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Add hover effects to contact info cards
document.addEventListener('DOMContentLoaded', function() {
    const contactCards = document.querySelectorAll('.contact-info-card');
    
    contactCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 10px 30px rgba(0,0,0,0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '';
        });
    });
});
</script>

<style>
.contact-info-card {
    transition: all 0.3s ease;
}

.contact-info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.map-wrapper iframe {
    border-radius: 10px;
}

.accordion-button {
    background-color: #f8f9fa;
    color: #4B7043;
    font-weight: 500;
}

.accordion-button:not(.collapsed) {
    background-color: #4B7043;
    color: white;
}

.accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(75, 112, 67, 0.25);
}

.info-item {
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
}

.info-item:last-child {
    border-bottom: none;
}

.contact-form-wrapper,
.contact-info-wrapper {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

@media (max-width: 991px) {
    .contact-form-wrapper,
    .contact-info-wrapper {
        padding: 1.5rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>

