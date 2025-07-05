<?php
require_once 'includes/config.php';
$page_title = 'Destinations';
$page_description = 'Explore our safari destinations in Rwanda, Tanzania, Uganda, and Kenya. Discover unique wildlife and cultural experiences.';
include 'includes/header.php';

// Get selected country from URL parameter
$selected_country = $_GET['country'] ?? '';
?>

<!-- Page Header -->
<section class="page-header bg-army-green text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Our Destinations</h1>
                <p class="lead">Discover the breathtaking landscapes and wildlife of East Africa</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Destinations</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Destination Filter -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="btn-group" role="group" aria-label="Destination filter">
                        <button type="button" class="btn <?php echo empty($selected_country) ? 'btn-army-green' : 'btn-outline-army-green'; ?>" onclick="filterDestinations('')">All Destinations</button>
                        <button type="button" class="btn <?php echo $selected_country === 'rwanda' ? 'btn-army-green' : 'btn-outline-army-green'; ?>" onclick="filterDestinations('rwanda')">Rwanda</button>
                        <button type="button" class="btn <?php echo $selected_country === 'tanzania' ? 'btn-army-green' : 'btn-outline-army-green'; ?>" onclick="filterDestinations('tanzania')">Tanzania</button>
                        <button type="button" class="btn <?php echo $selected_country === 'uganda' ? 'btn-army-green' : 'btn-outline-army-green'; ?>" onclick="filterDestinations('uganda')">Uganda</button>
                        <button type="button" class="btn <?php echo $selected_country === 'kenya' ? 'btn-army-green' : 'btn-outline-army-green'; ?>" onclick="filterDestinations('kenya')">Kenya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Destinations Grid -->
<section class="py-5">
    <div class="container">
        <div class="row g-4" id="destinationsGrid">
            <!-- Rwanda -->
            <div class="col-lg-6 destination-item" data-country="rwanda" style="<?php echo $selected_country && $selected_country !== 'rwanda' ? 'display: none;' : ''; ?>">
                <div class="destination-card card border-0 shadow-lg h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-6">
                            <div class="card-img-wrapper h-100">
                                <img src="images/rwanda-landscape.jpg" class="card-img h-100 object-cover" alt="Rwanda">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body h-100 d-flex flex-column">
                                <div class="mb-3">
                                    <h3 class="card-title text-army-green mb-2">Rwanda</h3>
                                    <span class="badge bg-army-green mb-3">Land of a Thousand Hills</span>
                                </div>
                                <p class="card-text flex-grow-1">Discover the land of a thousand hills with gorilla trekking, wildlife safaris, and vibrant culture. Experience Volcanoes National Park, Akagera National Park, and the beautiful Lake Kivu.</p>
                                
                                <div class="destination-highlights mb-3">
                                    <h6 class="text-army-green mb-2">Highlights:</h6>
                                    <ul class="list-unstyled small">
                                        <li><i class="fas fa-check text-army-green me-2"></i>Mountain Gorilla Trekking</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Big 5 Wildlife Safari</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Cultural Experiences</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Nyungwe Canopy Walk</li>
                                    </ul>
                                </div>
                                
                                <div class="mt-auto">
                                    <a href="packages.php?destination=rwanda" class="btn btn-army-green">
                                        <i class="fas fa-map-marked-alt me-2"></i>Explore Rwanda Packages
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tanzania -->
            <div class="col-lg-6 destination-item" data-country="tanzania" style="<?php echo $selected_country && $selected_country !== 'tanzania' ? 'display: none;' : ''; ?>">
                <div class="destination-card card border-0 shadow-lg h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-6">
                            <div class="card-img-wrapper h-100">
                                <img src="images/tanzania-wildlife.jpg" class="card-img h-100 object-cover" alt="Tanzania">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body h-100 d-flex flex-column">
                                <div class="mb-3">
                                    <h3 class="card-title text-army-green mb-2">Tanzania</h3>
                                    <span class="badge bg-army-green mb-3">Serengeti & Zanzibar</span>
                                </div>
                                <p class="card-text flex-grow-1">Experience the Serengeti, Ngorongoro Crater, and Tarangire's wildlife wonders. Witness the Great Migration and relax on the pristine beaches of Zanzibar.</p>
                                
                                <div class="destination-highlights mb-3">
                                    <h6 class="text-army-green mb-2">Highlights:</h6>
                                    <ul class="list-unstyled small">
                                        <li><i class="fas fa-check text-army-green me-2"></i>Great Migration</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Ngorongoro Crater</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Zanzibar Beaches</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Tarangire National Park</li>
                                    </ul>
                                </div>
                                
                                <div class="mt-auto">
                                    <a href="packages.php?destination=tanzania" class="btn btn-army-green">
                                        <i class="fas fa-map-marked-alt me-2"></i>Explore Tanzania Packages
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Uganda -->
            <div class="col-lg-6 destination-item" data-country="uganda" style="<?php echo $selected_country && $selected_country !== 'uganda' ? 'display: none;' : ''; ?>">
                <div class="destination-card card border-0 shadow-lg h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-6">
                            <div class="card-img-wrapper h-100">
                                <img src="images/uganda-national-park.jpg" class="card-img h-100 object-cover" alt="Uganda">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body h-100 d-flex flex-column">
                                <div class="mb-3">
                                    <h3 class="card-title text-army-green mb-2">Uganda</h3>
                                    <span class="badge bg-army-green mb-3">Pearl of Africa</span>
                                </div>
                                <p class="card-text flex-grow-1">Discover Bwindi's gorillas and vibrant wildlife. Trek gorillas in Bwindi Impenetrable National Park and explore lush landscapes filled with diverse wildlife.</p>
                                
                                <div class="destination-highlights mb-3">
                                    <h6 class="text-army-green mb-2">Highlights:</h6>
                                    <ul class="list-unstyled small">
                                        <li><i class="fas fa-check text-army-green me-2"></i>Bwindi Gorilla Trekking</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Queen Elizabeth Park</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Murchison Falls</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Kibale Chimpanzees</li>
                                    </ul>
                                </div>
                                
                                <div class="mt-auto">
                                    <a href="packages.php?destination=uganda" class="btn btn-army-green">
                                        <i class="fas fa-map-marked-alt me-2"></i>Explore Uganda Packages
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kenya -->
            <div class="col-lg-6 destination-item" data-country="kenya" style="<?php echo $selected_country && $selected_country !== 'kenya' ? 'display: none;' : ''; ?>">
                <div class="destination-card card border-0 shadow-lg h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-6">
                            <div class="card-img-wrapper h-100">
                                <img src="images/kenya-safari.jpg" class="card-img h-100 object-cover" alt="Kenya">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body h-100 d-flex flex-column">
                                <div class="mb-3">
                                    <h3 class="card-title text-army-green mb-2">Kenya</h3>
                                    <span class="badge bg-army-green mb-3">Magical Kenya</span>
                                </div>
                                <p class="card-text flex-grow-1">Experience the Great Migration in Masai Mara and Nairobi's urban charm. Witness incredible wildlife and enjoy stunning beaches along the coast.</p>
                                
                                <div class="destination-highlights mb-3">
                                    <h6 class="text-army-green mb-2">Highlights:</h6>
                                    <ul class="list-unstyled small">
                                        <li><i class="fas fa-check text-army-green me-2"></i>Masai Mara Reserve</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Amboseli National Park</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Coastal Beaches</li>
                                        <li><i class="fas fa-check text-army-green me-2"></i>Cultural Experiences</li>
                                    </ul>
                                </div>
                                
                                <div class="mt-auto">
                                    <a href="packages.php?destination=kenya" class="btn btn-army-green">
                                        <i class="fas fa-map-marked-alt me-2"></i>Explore Kenya Packages
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Our Destinations -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-army-green mb-3">Why Choose Our Destinations</h2>
                <p class="lead text-muted">Experience the best of East Africa with our expert guidance</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-card text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-users text-army-green fs-1"></i>
                    </div>
                    <h5 class="text-army-green mb-3">Expert Local Guides</h5>
                    <p class="text-muted">Our experienced local guides provide authentic insights and ensure your safety throughout your journey.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-leaf text-army-green fs-1"></i>
                    </div>
                    <h5 class="text-army-green mb-3">Sustainable Tourism</h5>
                    <p class="text-muted">We promote responsible tourism that benefits local communities and protects wildlife habitats.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-star text-army-green fs-1"></i>
                    </div>
                    <h5 class="text-army-green mb-3">Luxury Experiences</h5>
                    <p class="text-muted">Enjoy high-end accommodations and personalized services that make your safari truly memorable.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-shield-alt text-army-green fs-1"></i>
                    </div>
                    <h5 class="text-army-green mb-3">Safety First</h5>
                    <p class="text-muted">Your safety is our priority with comprehensive insurance and emergency support systems.</p>
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
                <h2 class="display-6 fw-bold mb-3">Ready to Explore East Africa?</h2>
                <p class="lead mb-0">Contact us today to start planning your dream safari adventure across our amazing destinations.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contactus.php" class="btn btn-light btn-lg me-3">
                    <i class="fas fa-envelope me-2"></i>Contact Us
                </a>
                <a href="bookings.php" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-calendar-check me-2"></i>Book Now
                </a>
            </div>
        </div>
    </div>
</section>

<script>
function filterDestinations(country) {
    const items = document.querySelectorAll('.destination-item');
    const buttons = document.querySelectorAll('.btn-group .btn');
    
    // Update button states
    buttons.forEach(btn => {
        btn.classList.remove('btn-army-green');
        btn.classList.add('btn-outline-army-green');
    });
    
    // Set active button
    event.target.classList.remove('btn-outline-army-green');
    event.target.classList.add('btn-army-green');
    
    // Filter items
    items.forEach(item => {
        if (country === '' || item.dataset.country === country) {
            item.style.display = 'block';
            item.style.animation = 'fadeIn 0.5s ease-in';
        } else {
            item.style.display = 'none';
        }
    });
    
    // Update URL without page reload
    const url = new URL(window.location);
    if (country) {
        url.searchParams.set('country', country);
    } else {
        url.searchParams.delete('country');
    }
    window.history.pushState({}, '', url);
}

// Add CSS animation
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .object-cover {
        object-fit: cover;
    }
    
    .destination-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .destination-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
    }
`;
document.head.appendChild(style);
</script>

<?php include 'includes/footer.php'; ?>

