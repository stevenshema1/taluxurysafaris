<?php
require_once 'includes/config.php';
$page_title = 'Book Your Safari';
$page_description = 'Book your dream safari adventure with TA Luxury Safaris. Complete our booking form to start planning your East African journey.';
include 'includes/header.php';

// Check for booking form messages
$booking_message = $_SESSION['booking_message'] ?? '';
$booking_success = $_SESSION['booking_success'] ?? false;
unset($_SESSION['booking_message'], $_SESSION['booking_success']);

// Get pre-selected package from URL
$selected_package = $_GET['package'] ?? '';
?>

<!-- Page Header -->
<section class="page-header bg-army-green text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Book Your Safari</h1>
                <p class="lead">Start your adventure with us today</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Booking Steps -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="booking-steps d-flex justify-content-center">
                    <div class="step active">
                        <div class="step-number">1</div>
                        <div class="step-title">Details</div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-title">Review</div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-title">Confirmation</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking Form -->
<section class="py-5">
    <div class="container">
        <?php if ($booking_message): ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-<?php echo $booking_success ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                        <?php echo htmlspecialchars($booking_message); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="booking-form-wrapper card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <h2 class="text-army-green mb-4 text-center">Complete Your Booking</h2>
                        
                        <form id="bookingForm" action="submit_booking.php" method="POST">
                            <!-- Personal Information -->
                            <div class="form-section mb-5">
                                <h4 class="text-army-green mb-4">
                                    <i class="fas fa-user me-2"></i>Personal Information
                                </h4>
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
                                        <label for="phone" class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nationality" class="form-label">Nationality *</label>
                                        <select class="form-select" id="nationality" name="nationality" required>
                                            <option value="">Select your nationality</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="France">France</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="age_group" class="form-label">Age Group *</label>
                                        <select class="form-select" id="age_group" name="age_group" required>
                                            <option value="">Select age group</option>
                                            <option value="18-25">18-25 years</option>
                                            <option value="26-35">26-35 years</option>
                                            <option value="36-45">36-45 years</option>
                                            <option value="46-55">46-55 years</option>
                                            <option value="56-65">56-65 years</option>
                                            <option value="65+">65+ years</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emergency_contact" class="form-label">Emergency Contact</label>
                                        <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" placeholder="Name and phone number">
                                    </div>
                                </div>
                            </div>

                            <!-- Safari Details -->
                            <div class="form-section mb-5">
                                <h4 class="text-army-green mb-4">
                                    <i class="fas fa-map-marked-alt me-2"></i>Safari Details
                                </h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="package" class="form-label">Select Package *</label>
                                        <select class="form-select" id="package" name="package" required>
                                            <option value="">Choose a safari package</option>
                                            <option value="3 Days Exceptional Gorilla Trek" <?php echo $selected_package === '3 Days Exceptional Gorilla Trek' ? 'selected' : ''; ?>>3 Days Exceptional Gorilla Trek</option>
                                            <option value="2 Days Akagera Big-5 Safari" <?php echo $selected_package === '2 Days Akagera Big-5 Safari' ? 'selected' : ''; ?>>2 Days Akagera Big-5 Safari</option>
                                            <option value="1 Day Kigali City Tour" <?php echo $selected_package === '1 Day Kigali City Tour' ? 'selected' : ''; ?>>1 Day Kigali City Tour</option>
                                            <option value="1 Day Nyungwe Canopy Walk" <?php echo $selected_package === '1 Day Nyungwe Canopy Walk' ? 'selected' : ''; ?>>1 Day Nyungwe Canopy Walk</option>
                                            <option value="3 Days Chimpanzee Trek" <?php echo $selected_package === '3 Days Chimpanzee Trek' ? 'selected' : ''; ?>>3 Days Chimpanzee Trek</option>
                                            <option value="1 Day King's Palace Museum" <?php echo $selected_package === "1 Day King's Palace Museum" ? 'selected' : ''; ?>>1 Day King's Palace Museum</option>
                                            <option value="1 Day Akagera Wildlife Safari" <?php echo $selected_package === '1 Day Akagera Wildlife Safari' ? 'selected' : ''; ?>>1 Day Akagera Wildlife Safari</option>
                                            <option value="3 Days Uganda Gorilla Tour" <?php echo $selected_package === '3 Days Uganda Gorilla Tour' ? 'selected' : ''; ?>>3 Days Uganda Gorilla Tour</option>
                                            <option value="12 Days Rwanda, Kenya, Zanzibar" <?php echo $selected_package === '12 Days Rwanda, Kenya, Zanzibar' ? 'selected' : ''; ?>>12 Days Rwanda, Kenya, Zanzibar</option>
                                            <option value="6 Days Tanzania Safari" <?php echo $selected_package === '6 Days Tanzania Safari' ? 'selected' : ''; ?>>6 Days Tanzania Safari</option>
                                            <option value="Custom Package">Custom Package</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="travel_date" class="form-label">Preferred Travel Date *</label>
                                        <input type="date" class="form-control" id="travel_date" name="travel_date" min="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="number_of_guests" class="form-label">Number of Travelers *</label>
                                        <select class="form-select" id="number_of_guests" name="number_of_guests" required>
                                            <option value="">Select number</option>
                                            <option value="1">1 Person</option>
                                            <option value="2">2 People</option>
                                            <option value="3">3 People</option>
                                            <option value="4">4 People</option>
                                            <option value="5">5 People</option>
                                            <option value="6">6 People</option>
                                            <option value="7">7 People</option>
                                            <option value="8">8 People</option>
                                            <option value="9">9 People</option>
                                            <option value="10+">10+ People</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="budget_range" class="form-label">Budget Range (USD) *</label>
                                        <select class="form-select" id="budget_range" name="budget_range" required>
                                            <option value="">Select budget range</option>
                                            <option value="Under $500">Under $500</option>
                                            <option value="$500 - $1,000">$500 - $1,000</option>
                                            <option value="$1,000 - $2,000">$1,000 - $2,000</option>
                                            <option value="$2,000 - $5,000">$2,000 - $5,000</option>
                                            <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                                            <option value="Over $10,000">Over $10,000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Accommodation Preferences -->
                            <div class="form-section mb-5">
                                <h4 class="text-army-green mb-4">
                                    <i class="fas fa-bed me-2"></i>Accommodation Preferences
                                </h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="accommodation_type" class="form-label">Accommodation Type *</label>
                                        <select class="form-select" id="accommodation_type" name="accommodation_type" required>
                                            <option value="">Select accommodation type</option>
                                            <option value="Luxury Lodge">Luxury Lodge</option>
                                            <option value="Mid-range Hotel">Mid-range Hotel</option>
                                            <option value="Budget Hotel">Budget Hotel</option>
                                            <option value="Eco-lodge">Eco-lodge</option>
                                            <option value="Camping">Camping</option>
                                            <option value="Mix of Options">Mix of Options</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="room_type" class="form-label">Room Type *</label>
                                        <select class="form-select" id="room_type" name="room_type" required>
                                            <option value="">Select room type</option>
                                            <option value="Single Room">Single Room</option>
                                            <option value="Double Room">Double Room</option>
                                            <option value="Twin Room">Twin Room</option>
                                            <option value="Family Room">Family Room</option>
                                            <option value="Suite">Suite</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Special Requirements -->
                            <div class="form-section mb-5">
                                <h4 class="text-army-green mb-4">
                                    <i class="fas fa-cog me-2"></i>Special Requirements
                                </h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="dietary_requirements" class="form-label">Dietary Requirements</label>
                                        <select class="form-select" id="dietary_requirements" name="dietary_requirements">
                                            <option value="">No special requirements</option>
                                            <option value="Vegetarian">Vegetarian</option>
                                            <option value="Vegan">Vegan</option>
                                            <option value="Halal">Halal</option>
                                            <option value="Kosher">Kosher</option>
                                            <option value="Gluten-free">Gluten-free</option>
                                            <option value="Other">Other (specify in notes)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="physical_fitness" class="form-label">Physical Fitness Level *</label>
                                        <select class="form-select" id="physical_fitness" name="physical_fitness" required>
                                            <option value="">Select fitness level</option>
                                            <option value="Excellent">Excellent - Can handle strenuous activities</option>
                                            <option value="Good">Good - Can handle moderate activities</option>
                                            <option value="Average">Average - Prefer easier activities</option>
                                            <option value="Limited">Limited - Need assistance</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="mobility_assistance" name="mobility_assistance">
                                            <label class="form-check-label" for="mobility_assistance">
                                                I require mobility assistance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="travel_insurance" name="travel_insurance">
                                            <label class="form-check-label" for="travel_insurance">
                                                I need assistance with travel insurance
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="form-section mb-5">
                                <h4 class="text-army-green mb-4">
                                    <i class="fas fa-comment me-2"></i>Additional Information
                                </h4>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="additional_notes" class="form-label">Special Requests or Questions</label>
                                        <textarea class="form-control" id="additional_notes" name="additional_notes" rows="4" placeholder="Tell us about any special requests, celebrations, medical conditions, or questions you have..."></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="how_did_you_hear" class="form-label">How did you hear about us?</label>
                                        <select class="form-select" id="how_did_you_hear" name="how_did_you_hear">
                                            <option value="">Select an option</option>
                                            <option value="Google Search">Google Search</option>
                                            <option value="Social Media">Social Media</option>
                                            <option value="Friend/Family">Friend/Family Recommendation</option>
                                            <option value="Travel Agent">Travel Agent</option>
                                            <option value="Previous Customer">Previous Customer</option>
                                            <option value="Travel Blog">Travel Blog</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="preferred_contact" class="form-label">Preferred Contact Method</label>
                                        <select class="form-select" id="preferred_contact" name="preferred_contact">
                                            <option value="Email">Email</option>
                                            <option value="Phone">Phone</option>
                                            <option value="WhatsApp">WhatsApp</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="form-section mb-4">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="terms_conditions" name="terms_conditions" required>
                                    <label class="form-check-label" for="terms_conditions">
                                        I agree to the <a href="#" class="text-army-green">Terms and Conditions</a> and <a href="#" class="text-army-green">Privacy Policy</a> *
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="newsletter_subscribe" name="newsletter_subscribe">
                                    <label class="form-check-label" for="newsletter_subscribe">
                                        Subscribe to our newsletter for safari tips and special offers
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-army-green btn-lg px-5 py-3">
                                    <i class="fas fa-paper-plane me-2"></i>Submit Booking Request
                                </button>
                                <p class="text-muted mt-3 small">
                                    <i class="fas fa-info-circle me-1"></i>
                                    This is a booking request. We will contact you within 24 hours to confirm availability and finalize your booking.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking Information -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">What Happens Next?</h2>
                <p class="lead text-muted">Our simple booking process</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-icon bg-army-green text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-paper-plane fs-4"></i>
                    </div>
                    <h5 class="text-army-green mb-3">1. Submit Request</h5>
                    <p class="text-muted">Complete and submit your booking form with all your preferences and requirements.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-icon bg-army-green text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-phone fs-4"></i>
                    </div>
                    <h5 class="text-army-green mb-3">2. We Contact You</h5>
                    <p class="text-muted">Our team will contact you within 24 hours to discuss your requirements and confirm availability.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-icon bg-army-green text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-file-contract fs-4"></i>
                    </div>
                    <h5 class="text-army-green mb-3">3. Finalize Details</h5>
                    <p class="text-muted">We'll create a detailed itinerary and handle all bookings, permits, and documentation.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-icon bg-army-green text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-plane fs-4"></i>
                    </div>
                    <h5 class="text-army-green mb-3">4. Start Your Adventure</h5>
                    <p class="text-muted">Enjoy your safari with our professional guides and 24/7 support throughout your journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Form validation and enhancement
document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Submitting...';
    submitBtn.disabled = true;
    
    fetch('submit_booking.php', {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            const successDiv = document.createElement('div');
            successDiv.className = 'alert alert-success alert-dismissible fade show';
            successDiv.innerHTML = `
                <h5><i class="fas fa-check-circle me-2"></i>Booking Request Submitted!</h5>
                <p class="mb-0">${data.message}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            // Insert at top of form
            this.parentNode.insertBefore(successDiv, this);
            
            // Reset form
            this.reset();
            
            // Scroll to top
            successDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else {
            // Show error message
            const errorDiv = document.createElement('div');
            errorDiv.className = 'alert alert-danger alert-dismissible fade show';
            errorDiv.innerHTML = `
                ${data.message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            this.parentNode.insertBefore(errorDiv, this);
            errorDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        
        // Restore button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
        
        // Restore button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Dynamic form updates
document.getElementById('package').addEventListener('change', function() {
    const customPackageNote = document.getElementById('customPackageNote');
    if (this.value === 'Custom Package') {
        if (!customPackageNote) {
            const note = document.createElement('div');
            note.id = 'customPackageNote';
            note.className = 'alert alert-info mt-2';
            note.innerHTML = '<i class="fas fa-info-circle me-2"></i>Please describe your custom package requirements in the additional notes section.';
            this.parentNode.appendChild(note);
        }
    } else {
        if (customPackageNote) {
            customPackageNote.remove();
        }
    }
});

// Form progress tracking
const formSections = document.querySelectorAll('.form-section');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Update progress or highlight current section
            entry.target.style.borderLeft = '4px solid #4B7043';
            entry.target.style.paddingLeft = '20px';
        } else {
            entry.target.style.borderLeft = 'none';
            entry.target.style.paddingLeft = '0';
        }
    });
}, { threshold: 0.5 });

formSections.forEach(section => {
    observer.observe(section);
});
</script>

<style>
.booking-steps {
    display: flex;
    align-items: center;
    gap: 2rem;
}

.step {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
}

.step:not(:last-child)::after {
    content: '';
    position: absolute;
    top: 15px;
    left: 100%;
    width: 2rem;
    height: 2px;
    background: #ddd;
}

.step.active .step-number {
    background: #4B7043;
    color: white;
}

.step.active::after {
    background: #4B7043;
}

.step-number {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: #ddd;
    color: #666;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.step-title {
    font-size: 0.9rem;
    color: #666;
}

.form-section {
    transition: all 0.3s ease;
    padding: 1.5rem;
    border-radius: 10px;
    margin-bottom: 2rem;
}

.form-section:hover {
    background-color: #f8f9fa;
}

.booking-form-wrapper {
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

@media (max-width: 768px) {
    .booking-steps {
        flex-direction: column;
        gap: 1rem;
    }
    
    .step::after {
        display: none;
    }
}
</style>

<?php include 'includes/footer.php'; ?>

