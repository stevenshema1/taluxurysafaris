<?php
require_once 'includes/config.php';
$page_title = 'Home';
$page_description = 'Experience unforgettable safari adventures in Rwanda, Tanzania, Uganda, and Kenya with TA Luxury Safaris. Gorilla trekking, wildlife safaris, and cultural tours.';
include 'includes/header.php';
?>

<!-- Hero Carousel -->
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="hero-slide" style="background-image: url('images/hero-gorilla-trekking.jpg');">
                <div class="hero-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="display-3 fw-bold text-white mb-4 animate-fade-up">Discover Rwanda with TA Luxury Safaris</h1>
                            <p class="lead text-white mb-4 animate-fade-up" style="animation-delay: 0.2s;">Experience unforgettable gorilla trekking adventures in Volcanoes National Park</p>
                            <a href="bookings.php" class="btn btn-army-green btn-lg px-5 py-3 animate-fade-up" style="animation-delay: 0.4s;">
                                <i class="fas fa-calendar-check me-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="carousel-item">
            <div class="hero-slide" style="background-image: url('images/hero-akagera-safari.jpg');">
                <div class="hero-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="display-3 fw-bold text-white mb-4 animate-fade-up">Akagera Big-5 Safari</h1>
                            <p class="lead text-white mb-4 animate-fade-up" style="animation-delay: 0.2s;">Witness the Big 5 and enjoy boat safaris in Rwanda's premier wildlife destination</p>
                            <a href="bookings.php" class="btn btn-army-green btn-lg px-5 py-3 animate-fade-up" style="animation-delay: 0.4s;">
                                <i class="fas fa-calendar-check me-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Tour Search Form -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4 text-army-green">Find Your Perfect Safari</h3>
                        <form action="packages.php" method="GET" class="row g-3">
                            <div class="col-md-4">
                                <label for="destination" class="form-label">Destination</label>
                                <select class="form-select" id="destination" name="destination">
                                    <option value="">All Destinations</option>
                                    <option value="rwanda">Rwanda</option>
                                    <option value="tanzania">Tanzania</option>
                                    <option value="uganda">Uganda</option>
                                    <option value="kenya">Kenya</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="travel_date" class="form-label">Travel Date</label>
                                <input type="date" class="form-control" id="travel_date" name="travel_date" min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="tour_type" class="form-label">Tour Type</label>
                                <select class="form-select" id="tour_type" name="tour_type">
                                    <option value="">All Tours</option>
                                    <option value="gorilla">Gorilla Trekking</option>
                                    <option value="wildlife">Wildlife Safari</option>
                                    <option value="cultural">Cultural Tour</option>
                                </select>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-army-green btn-lg px-5">
                                    <i class="fas fa-search me-2"></i>Search Tours
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Destinations -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Our Destinations</h2>
                <p class="lead text-muted">Explore the breathtaking landscapes and wildlife of East Africa</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="destination-card card border-0 shadow-sm h-100">
                    <div class="card-img-wrapper">
                        <img src="images/rwanda-landscape.jpg" class="card-img-top" alt="Rwanda">
                        <div class="card-img-overlay d-flex align-items-end">
                            <h5 class="card-title text-white fw-bold">Rwanda</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Explore the land of a thousand hills with gorilla trekking and cultural tours.</p>
                        <a href="destination.php?country=rwanda" class="btn btn-outline-army-green">Explore Packages</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="destination-card card border-0 shadow-sm h-100">
                    <div class="card-img-wrapper">
                        <img src="images/tanzania-wildlife.jpg" class="card-img-top" alt="Tanzania">
                        <div class="card-img-overlay d-flex align-items-end">
                            <h5 class="card-title text-white fw-bold">Tanzania</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Witness the Serengeti migration and relax in Zanzibar.</p>
                        <a href="destination.php?country=tanzania" class="btn btn-outline-army-green">Explore Packages</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="destination-card card border-0 shadow-sm h-100">
                    <div class="card-img-wrapper">
                        <img src="images/uganda-national-park.jpg" class="card-img-top" alt="Uganda">
                        <div class="card-img-overlay d-flex align-items-end">
                            <h5 class="card-title text-white fw-bold">Uganda</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Discover Bwindi's gorillas and vibrant wildlife.</p>
                        <a href="destination.php?country=uganda" class="btn btn-outline-army-green">Explore Packages</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="destination-card card border-0 shadow-sm h-100">
                    <div class="card-img-wrapper">
                        <img src="images/kenya-safari.jpg" class="card-img-top" alt="Kenya">
                        <div class="card-img-overlay d-flex align-items-end">
                            <h5 class="card-title text-white fw-bold">Kenya</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Experience the Masai Mara and Nairobi's urban charm.</p>
                        <a href="destination.php?country=kenya" class="btn btn-outline-army-green">Explore Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Packages -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Featured Packages</h2>
                <p class="lead text-muted">Discover our most popular safari experiences</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="package-card card border-0 shadow-sm h-100">
                    <div class="card-img-wrapper">
                        <img src="images/package-gorilla-trek.jpg" class="card-img-top" alt="3 Days Gorilla Trek">
                        <div class="package-badge">
                            <span class="badge bg-army-green">Featured</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-army-green">3 Days Exceptional Gorilla Trek</h5>
                        <p class="card-text">Explore Volcanoes National Park with gorilla trekking, Kigali excursions, and cultural visits to Iby'Iwacu Village.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fas fa-clock me-1"></i>3 Days</span>
                            <a href="packages.php#gorilla-trek" class="btn btn-army-green">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="package-card card border-0 shadow-sm h-100">
                    <div class="card-img-wrapper">
                        <img src="images/package-akagera-safari.jpg" class="card-img-top" alt="2 Days Akagera Safari">
                        <div class="package-badge">
                            <span class="badge bg-army-green">Popular</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-army-green">2 Days Akagera Big-5 Safari</h5>
                        <p class="card-text">Discover Rwanda's Big 5 with game drives and a boat safari on Lake Ihema.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fas fa-clock me-1"></i>2 Days</span>
                            <a href="packages.php#akagera-safari" class="btn btn-army-green">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="package-card card border-0 shadow-sm h-100">
                    <div class="card-img-wrapper">
                        <img src="images/package-kigali-tour.jpg" class="card-img-top" alt="1 Day Kigali Tour">
                        <div class="package-badge">
                            <span class="badge bg-army-green">Quick Tour</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-army-green">1 Day Kigali City Tour</h5>
                        <p class="card-text">Visit Kigali Genocide Memorial, Kimironko Market, and enjoy ziplining or horse riding.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fas fa-clock me-1"></i>1 Day</span>
                            <a href="packages.php#kigali-tour" class="btn btn-army-green">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold text-army-green mb-4">About TA Luxury Safaris</h2>
                <p class="lead mb-4">TA Luxury Safaris Rwanda Ltd is a premier tour company based in Rwanda, specializing in high-end, personalized safari experiences. We offer tailored travel packages showcasing Rwanda's unique attractions, including gorilla trekking in Volcanoes National Park, wildlife safaris in Akagera National Park, and immersive cultural experiences.</p>
                
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-eye text-army-green fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">Our Vision</h6>
                                <small class="text-muted">Leading provider of tourism experiences in Africa</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-bullseye text-army-green fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">Our Mission</h6>
                                <small class="text-muted">Bespoke, high-end safari experiences</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="contactus.php" class="btn btn-army-green btn-lg">
                    <i class="fas fa-envelope me-2"></i>Contact Us
                </a>
            </div>
            
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="images/rwanda-landscape.jpg" class="img-fluid rounded shadow" alt="Rwanda Landscape">
                    </div>
                    <div class="col-6">
                        <img src="images/package-gorilla-trek.jpg" class="img-fluid rounded shadow" alt="Gorilla Trekking">
                    </div>
                    <div class="col-6">
                        <img src="images/package-akagera-safari.jpg" class="img-fluid rounded shadow" alt="Akagera Safari">
                    </div>
                    <div class="col-6">
                        <img src="images/package-nyungwe-canopy.jpg" class="img-fluid rounded shadow" alt="Nyungwe Canopy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5 bg-army-green text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">What Our Customers Say</h2>
                <p class="lead">Hear from travelers who experienced unforgettable adventures with us</p>
            </div>
        </div>
        
        <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="testimonial-content">
                                <i class="fas fa-quote-left fs-1 mb-4 opacity-50"></i>
                                <p class="fs-5 mb-4">"The gorilla trekking with T.A Luxury Safaris was spectacular! Emmanuel and Samwel provided excellent service, and ranger Daniel made the trek unforgettable."</p>
                                <div class="testimonial-author">
                                    <h6 class="mb-0">Phil Carol</h6>
                                    <small class="opacity-75">Gorilla Trekking Experience</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="testimonial-content">
                                <i class="fas fa-quote-left fs-1 mb-4 opacity-50"></i>
                                <p class="fs-5 mb-4">"T.A Luxury Safaris offered an amazing Rwanda experience. Their warm service and recommendations for Lake Kivu were spot-on. Highly recommend!"</p>
                                <div class="testimonial-author">
                                    <h6 class="mb-0">Francisca Ekwonu</h6>
                                    <small class="opacity-75">Rwanda Cultural Tour</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="testimonial-content">
                                <i class="fas fa-quote-left fs-1 mb-4 opacity-50"></i>
                                <p class="fs-5 mb-4">"Our Akagera safari was thrilling! The guides were knowledgeable, and the boat safari on Lake Ihema was a highlight. Thank you, T.A Luxury Safaris!"</p>
                                <div class="testimonial-author">
                                    <h6 class="mb-0">John Mwangi</h6>
                                    <small class="opacity-75">Akagera Safari</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="testimonial-content">
                                <i class="fas fa-quote-left fs-1 mb-4 opacity-50"></i>
                                <p class="fs-5 mb-4">"Kigali city tour was fantastic! From the Genocide Memorial to ziplining, T.A Luxury Safaris made our day unforgettable. Great service!"</p>
                                <div class="testimonial-author">
                                    <h6 class="mb-0">Sarah Kimani</h6>
                                    <small class="opacity-75">Kigali City Tour</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<!-- Quick Booking -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Quick Booking</h2>
                <p class="lead text-muted">Book your adventure in just a few clicks</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <form id="quickBookingForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="quick_name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="quick_name" name="full_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="quick_email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="quick_email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="quick_phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="quick_phone" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <label for="quick_package" class="form-label">Select Package *</label>
                                    <select class="form-select" id="quick_package" name="package" required>
                                        <option value="">Choose a package</option>
                                        <option value="3 Days Exceptional Gorilla Trek">3 Days Exceptional Gorilla Trek</option>
                                        <option value="2 Days Akagera Big-5 Safari">2 Days Akagera Big-5 Safari</option>
                                        <option value="1 Day Kigali City Tour">1 Day Kigali City Tour</option>
                                        <option value="1 Day Nyungwe Canopy Walk">1 Day Nyungwe Canopy Walk</option>
                                        <option value="3 Days Chimpanzee Trek">3 Days Chimpanzee Trek</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="quick_date" class="form-label">Travel Date *</label>
                                    <input type="date" class="form-control" id="quick_date" name="travel_date" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="quick_guests" class="form-label">Number of Travelers *</label>
                                    <select class="form-select" id="quick_guests" name="number_of_guests" required>
                                        <option value="">Select</option>
                                        <option value="1">1 Person</option>
                                        <option value="2">2 People</option>
                                        <option value="3">3 People</option>
                                        <option value="4">4 People</option>
                                        <option value="5">5+ People</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="quick_notes" class="form-label">Additional Information</label>
                                    <textarea class="form-control" id="quick_notes" name="additional_notes" rows="3" placeholder="Any special requests or questions?"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-army-green btn-lg px-5">
                                        <i class="fas fa-paper-plane me-2"></i>Submit Booking
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Partners -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Our Partners</h2>
                <p class="lead text-muted">Trusted by leading organizations in tourism</p>
            </div>
        </div>
        
        <div class="row align-items-center justify-content-center g-4">
            <div class="col-lg-2 col-md-3 col-6 text-center">
                <div class="partner-logo p-3">
                    <i class="fas fa-mountain text-army-green fs-1"></i>
                    <p class="mt-2 mb-0 small">Visit Rwanda</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center">
                <div class="partner-logo p-3">
                    <i class="fas fa-leaf text-army-green fs-1"></i>
                    <p class="mt-2 mb-0 small">Rwanda Parks</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center">
                <div class="partner-logo p-3">
                    <i class="fas fa-globe-africa text-army-green fs-1"></i>
                    <p class="mt-2 mb-0 small">East Africa Tourism</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center">
                <div class="partner-logo p-3">
                    <i class="fas fa-certificate text-army-green fs-1"></i>
                    <p class="mt-2 mb-0 small">Tourism Board</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 text-center">
                <div class="partner-logo p-3">
                    <i class="fas fa-award text-army-green fs-1"></i>
                    <p class="mt-2 mb-0 small">Safari Association</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Our Expert Team</h2>
                <p class="lead text-muted">Meet our experienced travel guides and safari experts</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="team-card card border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="team-avatar mb-3">
                            <i class="fas fa-user-circle text-army-green" style="font-size: 4rem;"></i>
                        </div>
                        <h5 class="card-title text-army-green">Emmanuel Nkurunziza</h5>
                        <p class="card-text text-muted">Lead Safari Guide</p>
                        <p class="small">Expert in gorilla trekking with 10+ years experience in Volcanoes National Park.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="team-card card border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="team-avatar mb-3">
                            <i class="fas fa-user-circle text-army-green" style="font-size: 4rem;"></i>
                        </div>
                        <h5 class="card-title text-army-green">Samwel Uwimana</h5>
                        <p class="card-text text-muted">Wildlife Safari Expert</p>
                        <p class="small">Specialist in Akagera National Park wildlife safaris and Big 5 tracking.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="team-card card border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="team-avatar mb-3">
                            <i class="fas fa-user-circle text-army-green" style="font-size: 4rem;"></i>
                        </div>
                        <h5 class="card-title text-army-green">Daniel Habimana</h5>
                        <p class="card-text text-muted">Cultural Tour Guide</p>
                        <p class="small">Expert in Rwandan culture and history, specializing in Kigali city tours.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="team-card card border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="team-avatar mb-3">
                            <i class="fas fa-user-circle text-army-green" style="font-size: 4rem;"></i>
                        </div>
                        <h5 class="card-title text-army-green">Grace Mukamana</h5>
                        <p class="card-text text-muted">Operations Manager</p>
                        <p class="small">Ensures seamless travel experiences and coordinates all safari logistics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Quick Booking Form Handler
document.getElementById('quickBookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
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
            alert(data.message);
            this.reset();
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});
</script>

<?php include 'includes/footer.php'; ?>

