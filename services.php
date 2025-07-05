<?php
require_once 'includes/config.php';
$page_title = 'Services';
$page_description = 'Discover our comprehensive travel services including safari planning, accommodation booking, transportation, and cultural experiences.';
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header bg-army-green text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Our Services</h1>
                <p class="lead">Comprehensive travel services for your perfect safari experience</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">What We Offer</h2>
                <p class="lead text-muted">From planning to execution, we handle every aspect of your safari adventure</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Safari Planning -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-map-marked-alt text-army-green" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title text-army-green mb-3">Safari Planning</h4>
                        <p class="card-text text-muted mb-4">Expert itinerary planning tailored to your interests, budget, and travel dates. We create personalized safari experiences that exceed expectations.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-army-green me-2"></i>Custom itinerary design</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Budget optimization</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Activity recommendations</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Seasonal planning advice</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Accommodation Booking -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-bed text-army-green" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title text-army-green mb-3">Accommodation Booking</h4>
                        <p class="card-text text-muted mb-4">From luxury lodges to eco-friendly camps, we book the perfect accommodation for your safari experience and comfort level.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-army-green me-2"></i>Luxury safari lodges</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Eco-friendly camps</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Budget-friendly options</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Special dietary arrangements</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Transportation Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-car text-army-green" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title text-army-green mb-3">Transportation</h4>
                        <p class="card-text text-muted mb-4">Reliable and comfortable transportation with experienced drivers who know the terrain and wildlife patterns.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-army-green me-2"></i>4WD safari vehicles</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Airport transfers</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Professional drivers</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Vehicle maintenance</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Professional Guides -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-user-tie text-army-green" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title text-army-green mb-3">Professional Guides</h4>
                        <p class="card-text text-muted mb-4">Experienced local guides with extensive knowledge of wildlife, culture, and conservation efforts in East Africa.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-army-green me-2"></i>Certified wildlife guides</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Cultural interpreters</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Photography assistance</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Safety expertise</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Permit & Documentation -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-file-alt text-army-green" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title text-army-green mb-3">Permits & Documentation</h4>
                        <p class="card-text text-muted mb-4">We handle all necessary permits, visas, and documentation required for your safari, including gorilla trekking permits.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-army-green me-2"></i>Gorilla trekking permits</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Park entry fees</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Visa assistance</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Travel insurance advice</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Cultural Experiences -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-users text-army-green" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title text-army-green mb-3">Cultural Experiences</h4>
                        <p class="card-text text-muted mb-4">Authentic cultural interactions with local communities, traditional performances, and educational experiences.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-army-green me-2"></i>Village visits</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Traditional performances</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Local craft workshops</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Community projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Process -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">How We Work</h2>
                <p class="lead text-muted">Our simple 4-step process ensures a seamless safari experience</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number bg-army-green text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <span class="fw-bold fs-4">1</span>
                    </div>
                    <h5 class="text-army-green mb-3">Consultation</h5>
                    <p class="text-muted">We discuss your preferences, budget, and travel dates to understand your dream safari.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number bg-army-green text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <span class="fw-bold fs-4">2</span>
                    </div>
                    <h5 class="text-army-green mb-3">Planning</h5>
                    <p class="text-muted">Our experts create a detailed itinerary with accommodations, activities, and logistics.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number bg-army-green text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <span class="fw-bold fs-4">3</span>
                    </div>
                    <h5 class="text-army-green mb-3">Booking</h5>
                    <p class="text-muted">We handle all bookings, permits, and documentation while keeping you informed.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="process-step text-center">
                    <div class="step-number bg-army-green text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <span class="fw-bold fs-4">4</span>
                    </div>
                    <h5 class="text-army-green mb-3">Experience</h5>
                    <p class="text-muted">Enjoy your safari with our professional guides and 24/7 support throughout your journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Additional Services</h2>
                <p class="lead text-muted">Extra services to enhance your safari experience</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="additional-service d-flex align-items-start">
                    <div class="service-icon me-4">
                        <i class="fas fa-camera text-army-green fs-2"></i>
                    </div>
                    <div>
                        <h5 class="text-army-green mb-2">Photography Services</h5>
                        <p class="text-muted mb-3">Professional photography services to capture your safari memories. Our photographers know the best spots and timing for wildlife photography.</p>
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-army-green me-2"></i>Professional wildlife photography</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Equipment rental available</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Photo editing services</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="additional-service d-flex align-items-start">
                    <div class="service-icon me-4">
                        <i class="fas fa-utensils text-army-green fs-2"></i>
                    </div>
                    <div>
                        <h5 class="text-army-green mb-2">Special Dietary Arrangements</h5>
                        <p class="text-muted mb-3">We accommodate all dietary requirements including vegetarian, vegan, halal, kosher, and allergy-specific meals.</p>
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-army-green me-2"></i>Vegetarian and vegan options</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Religious dietary requirements</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Allergy-friendly meals</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="additional-service d-flex align-items-start">
                    <div class="service-icon me-4">
                        <i class="fas fa-gift text-army-green fs-2"></i>
                    </div>
                    <div>
                        <h5 class="text-army-green mb-2">Special Occasions</h5>
                        <p class="text-muted mb-3">Celebrate special moments with customized safari experiences for honeymoons, anniversaries, birthdays, and family reunions.</p>
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-army-green me-2"></i>Honeymoon packages</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Anniversary celebrations</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Birthday surprises</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="additional-service d-flex align-items-start">
                    <div class="service-icon me-4">
                        <i class="fas fa-shield-alt text-army-green fs-2"></i>
                    </div>
                    <div>
                        <h5 class="text-army-green mb-2">Travel Insurance & Safety</h5>
                        <p class="text-muted mb-3">Comprehensive travel insurance advice and safety protocols to ensure your peace of mind throughout your safari.</p>
                        <ul class="list-unstyled small">
                            <li><i class="fas fa-check text-army-green me-2"></i>Travel insurance guidance</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>Emergency evacuation coverage</li>
                            <li><i class="fas fa-check text-army-green me-2"></i>24/7 emergency support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Our Services -->
<section class="py-5 bg-army-green text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Why Choose Our Services</h2>
                <p class="lead">What sets us apart in the safari industry</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-award fs-1"></i>
                    </div>
                    <h5 class="mb-3">Award-Winning Service</h5>
                    <p class="mb-0">Recognized for excellence in safari tourism and customer satisfaction.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-clock fs-1"></i>
                    </div>
                    <h5 class="mb-3">24/7 Support</h5>
                    <p class="mb-0">Round-the-clock assistance before, during, and after your safari.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-leaf fs-1"></i>
                    </div>
                    <h5 class="mb-3">Sustainable Tourism</h5>
                    <p class="mb-0">Committed to conservation and supporting local communities.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-heart fs-1"></i>
                    </div>
                    <h5 class="mb-3">Personalized Experience</h5>
                    <p class="mb-0">Every safari is tailored to your unique preferences and interests.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Testimonials -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">What Our Clients Say</h2>
                <p class="lead text-muted">Hear from travelers who experienced our exceptional service</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="testimonial-card card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="testimonial-content">
                            <div class="stars mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="mb-3">"The planning process was seamless, and every detail was perfectly arranged. Our guide was knowledgeable and made our gorilla trekking experience unforgettable."</p>
                            <div class="testimonial-author">
                                <h6 class="mb-0 text-army-green">Sarah Johnson</h6>
                                <small class="text-muted">Gorilla Trekking Safari</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="testimonial-card card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="testimonial-content">
                            <div class="stars mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="mb-3">"Exceptional service from start to finish. The accommodation recommendations were perfect, and the transportation was comfortable and reliable."</p>
                            <div class="testimonial-author">
                                <h6 class="mb-0 text-army-green">Michael Chen</h6>
                                <small class="text-muted">Multi-Country Safari</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="testimonial-card card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="testimonial-content">
                            <div class="stars mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="mb-3">"The cultural experiences were authentic and meaningful. TA Luxury Safaris truly understands how to create memorable journeys."</p>
                            <div class="testimonial-author">
                                <h6 class="mb-0 text-army-green">Emma Williams</h6>
                                <small class="text-muted">Cultural Safari Experience</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold text-army-green mb-3">Ready to Start Planning Your Safari?</h2>
                <p class="lead text-muted mb-0">Contact us today for a free consultation and let us create your perfect safari experience.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contactus.php" class="btn btn-army-green btn-lg me-3">
                    <i class="fas fa-envelope me-2"></i>Get Consultation
                </a>
                <a href="bookings.php" class="btn btn-outline-army-green btn-lg">
                    <i class="fas fa-calendar-check me-2"></i>Book Now
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.service-card {
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.process-step {
    position: relative;
}

.process-step:not(:last-child)::after {
    content: '';
    position: absolute;
    top: 30px;
    right: -50%;
    width: 100%;
    height: 2px;
    background: linear-gradient(to right, #4B7043, transparent);
    z-index: -1;
}

@media (max-width: 991px) {
    .process-step::after {
        display: none;
    }
}

.additional-service {
    padding: 1.5rem;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.additional-service:hover {
    background-color: #f8f9fa;
    transform: translateX(10px);
}

.testimonial-card {
    transition: all 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}
</style>

<?php include 'includes/footer.php'; ?>

