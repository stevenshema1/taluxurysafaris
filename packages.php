<?php
require_once 'includes/config.php';
$page_title = 'Safari Packages';
$page_description = 'Explore our comprehensive safari packages including gorilla trekking, wildlife safaris, and cultural tours in Rwanda, Tanzania, Uganda, and Kenya.';
include 'includes/header.php';

// Get filter parameters
$destination_filter = $_GET['destination'] ?? '';
$tour_type_filter = $_GET['tour_type'] ?? '';

// Define packages with detailed information
$packages = [
    [
        'id' => 'gorilla-trek',
        'title' => '3 Days Exceptional Gorilla Trek',
        'image' => 'package-gorilla-trek.jpg',
        'duration' => '3 Days',
        'destination' => 'rwanda',
        'type' => 'gorilla',
        'price' => 'From $1,500',
        'description' => 'Explore Volcanoes National Park with gorilla trekking, Kigali excursions, and cultural visits to Iby\'Iwacu Village.',
        'highlights' => [
            'Mountain Gorilla Trekking in Volcanoes National Park',
            'Kigali City Tour including Genocide Memorial',
            'Cultural visit to Iby\'Iwacu Village',
            'Professional guide and transportation',
            'Luxury accommodation included'
        ],
        'itinerary' => [
            'Day 1: Arrival in Kigali, city tour, transfer to Volcanoes National Park',
            'Day 2: Gorilla trekking experience, cultural village visit',
            'Day 3: Optional activities, return to Kigali for departure'
        ]
    ],
    [
        'id' => 'akagera-safari',
        'title' => '2 Days Akagera Big-5 Safari',
        'image' => 'package-akagera-safari.jpg',
        'duration' => '2 Days',
        'destination' => 'rwanda',
        'type' => 'wildlife',
        'price' => 'From $800',
        'description' => 'Discover Rwanda\'s Big 5 with game drives and a boat safari on Lake Ihema.',
        'highlights' => [
            'Big 5 wildlife viewing (Lion, Leopard, Elephant, Buffalo, Rhino)',
            'Boat safari on Lake Ihema',
            'Game drives in Akagera National Park',
            'Bird watching opportunities',
            'Professional safari guide'
        ],
        'itinerary' => [
            'Day 1: Transfer to Akagera, afternoon game drive, overnight in park',
            'Day 2: Morning game drive, boat safari on Lake Ihema, return to Kigali'
        ]
    ],
    [
        'id' => 'kigali-tour',
        'title' => '1 Day Kigali City Tour',
        'image' => 'package-kigali-tour.jpg',
        'duration' => '1 Day',
        'destination' => 'rwanda',
        'type' => 'cultural',
        'price' => 'From $150',
        'description' => 'Visit Kigali Genocide Memorial, Kimironko Market, and enjoy ziplining or horse riding.',
        'highlights' => [
            'Kigali Genocide Memorial Centre',
            'Kimironko Market experience',
            'Ziplining or horse riding activities',
            'Local lunch at traditional restaurant',
            'City panoramic views'
        ],
        'itinerary' => [
            'Morning: Genocide Memorial Centre visit',
            'Midday: Kimironko Market tour and local lunch',
            'Afternoon: Adventure activities (ziplining/horse riding)',
            'Evening: City panoramic views and return'
        ]
    ],
    [
        'id' => 'nyungwe-canopy',
        'title' => '1 Day Nyungwe Canopy Walk',
        'image' => 'package-nyungwe-canopy.jpg',
        'duration' => '1 Day',
        'destination' => 'rwanda',
        'type' => 'adventure',
        'price' => 'From $200',
        'description' => 'Experience the thrilling canopy walk and explore Nyungwe\'s waterfalls.',
        'highlights' => [
            'Canopy walk 50 meters above ground',
            'Nyungwe Forest exploration',
            'Waterfall visits',
            'Primate spotting opportunities',
            'Nature photography'
        ],
        'itinerary' => [
            'Early morning: Transfer to Nyungwe Forest',
            'Morning: Canopy walk experience',
            'Afternoon: Waterfall hike and forest exploration',
            'Evening: Return journey'
        ]
    ],
    [
        'id' => 'chimpanzee-trek',
        'title' => '3 Days Chimpanzee Trek',
        'image' => 'package-chimpanzee-trek.jpg',
        'duration' => '3 Days',
        'destination' => 'rwanda',
        'type' => 'primate',
        'price' => 'From $900',
        'description' => 'Trek chimpanzees in Nyungwe National Park with canopy walks and nature trails.',
        'highlights' => [
            'Chimpanzee trekking in Nyungwe Forest',
            'Canopy walk adventure',
            'Nature trail exploration',
            'Bird watching (300+ species)',
            'Tea plantation visit'
        ],
        'itinerary' => [
            'Day 1: Transfer to Nyungwe, afternoon nature walk',
            'Day 2: Chimpanzee trekking, canopy walk experience',
            'Day 3: Tea plantation visit, return to Kigali'
        ]
    ],
    [
        'id' => 'kings-palace',
        'title' => '1 Day King\'s Palace Museum',
        'image' => 'package-kings-palace.jpg',
        'duration' => '1 Day',
        'destination' => 'rwanda',
        'type' => 'cultural',
        'price' => 'From $120',
        'description' => 'Discover Rwanda\'s royal history at the King\'s Palace Museum in Nyanza.',
        'highlights' => [
            'Traditional royal palace exploration',
            'Inyambo cattle demonstration',
            'Royal artifacts and history',
            'Traditional architecture',
            'Cultural performances'
        ],
        'itinerary' => [
            'Morning: Transfer to Nyanza',
            'Midday: King\'s Palace Museum tour',
            'Afternoon: Inyambo cattle experience',
            'Evening: Return to Kigali'
        ]
    ],
    [
        'id' => 'akagera-wildlife',
        'title' => '1 Day Akagera Wildlife Safari',
        'image' => 'package-akagera-safari.jpg',
        'duration' => '1 Day',
        'destination' => 'rwanda',
        'type' => 'wildlife',
        'price' => 'From $300',
        'description' => 'Spot lions, elephants, and hippos in Akagera National Park.',
        'highlights' => [
            'Game drive in Akagera National Park',
            'Wildlife photography opportunities',
            'Savanna landscape exploration',
            'Bird watching',
            'Professional guide'
        ],
        'itinerary' => [
            'Early morning: Transfer to Akagera National Park',
            'Morning-Afternoon: Full day game drive',
            'Evening: Return to Kigali'
        ]
    ],
    [
        'id' => 'uganda-gorilla',
        'title' => '3 Days Uganda Gorilla Tour',
        'image' => 'package-uganda-gorilla.jpg',
        'duration' => '3 Days',
        'destination' => 'uganda',
        'type' => 'gorilla',
        'price' => 'From $1,800',
        'description' => 'Trek gorillas in Bwindi Impenetrable National Park via Kigali.',
        'highlights' => [
            'Gorilla trekking in Bwindi Impenetrable Forest',
            'Cross-border experience (Rwanda-Uganda)',
            'Batwa cultural experience',
            'Forest canopy exploration',
            'Luxury eco-lodge accommodation'
        ],
        'itinerary' => [
            'Day 1: Transfer from Kigali to Bwindi via border crossing',
            'Day 2: Gorilla trekking experience, Batwa cultural visit',
            'Day 3: Optional activities, return to Kigali'
        ]
    ],
    [
        'id' => 'rwanda-kenya-zanzibar',
        'title' => '12 Days Rwanda, Kenya, Zanzibar',
        'image' => 'package-rwanda-kenya-zanzibar.jpg',
        'duration' => '12 Days',
        'destination' => 'multi-country',
        'type' => 'comprehensive',
        'price' => 'From $4,500',
        'description' => 'Explore Rwanda\'s gorillas, Masai Mara, and Zanzibar\'s beaches.',
        'highlights' => [
            'Gorilla trekking in Rwanda',
            'Great Migration in Masai Mara',
            'Zanzibar beach relaxation',
            'Cultural experiences in all destinations',
            'Luxury accommodations throughout'
        ],
        'itinerary' => [
            'Days 1-4: Rwanda - Gorilla trekking and cultural tours',
            'Days 5-8: Kenya - Masai Mara safari experience',
            'Days 9-12: Zanzibar - Beach relaxation and spice tours'
        ]
    ],
    [
        'id' => 'tanzania-safari',
        'title' => '6 Days Tanzania Safari',
        'image' => 'package-tanzania-safari.jpg',
        'duration' => '6 Days',
        'destination' => 'tanzania',
        'type' => 'wildlife',
        'price' => 'From $2,800',
        'description' => 'Visit Tarangire, Serengeti, and Ngorongoro Crater for unforgettable wildlife.',
        'highlights' => [
            'Serengeti National Park game drives',
            'Ngorongoro Crater exploration',
            'Tarangire elephant herds',
            'Great Migration (seasonal)',
            'Luxury tented camps'
        ],
        'itinerary' => [
            'Days 1-2: Tarangire National Park',
            'Days 3-4: Serengeti National Park',
            'Days 5-6: Ngorongoro Crater and departure'
        ]
    ]
];

// Filter packages based on parameters
$filtered_packages = $packages;
if ($destination_filter) {
    $filtered_packages = array_filter($filtered_packages, function($package) use ($destination_filter) {
        return $package['destination'] === $destination_filter || $package['destination'] === 'multi-country';
    });
}
if ($tour_type_filter) {
    $filtered_packages = array_filter($filtered_packages, function($package) use ($tour_type_filter) {
        return $package['type'] === $tour_type_filter;
    });
}
?>

<!-- Page Header -->
<section class="page-header bg-army-green text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Safari Packages</h1>
                <p class="lead">Discover our comprehensive collection of safari experiences</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Packages</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Package Filters -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="GET" class="row g-3 align-items-end">
                    <div class="col-md-4">
                        <label for="destination" class="form-label">Filter by Destination</label>
                        <select class="form-select" id="destination" name="destination" onchange="this.form.submit()">
                            <option value="">All Destinations</option>
                            <option value="rwanda" <?php echo $destination_filter === 'rwanda' ? 'selected' : ''; ?>>Rwanda</option>
                            <option value="tanzania" <?php echo $destination_filter === 'tanzania' ? 'selected' : ''; ?>>Tanzania</option>
                            <option value="uganda" <?php echo $destination_filter === 'uganda' ? 'selected' : ''; ?>>Uganda</option>
                            <option value="kenya" <?php echo $destination_filter === 'kenya' ? 'selected' : ''; ?>>Kenya</option>
                            <option value="multi-country" <?php echo $destination_filter === 'multi-country' ? 'selected' : ''; ?>>Multi-Country</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="tour_type" class="form-label">Filter by Tour Type</label>
                        <select class="form-select" id="tour_type" name="tour_type" onchange="this.form.submit()">
                            <option value="">All Tour Types</option>
                            <option value="gorilla" <?php echo $tour_type_filter === 'gorilla' ? 'selected' : ''; ?>>Gorilla Trekking</option>
                            <option value="wildlife" <?php echo $tour_type_filter === 'wildlife' ? 'selected' : ''; ?>>Wildlife Safari</option>
                            <option value="cultural" <?php echo $tour_type_filter === 'cultural' ? 'selected' : ''; ?>>Cultural Tour</option>
                            <option value="adventure" <?php echo $tour_type_filter === 'adventure' ? 'selected' : ''; ?>>Adventure</option>
                            <option value="comprehensive" <?php echo $tour_type_filter === 'comprehensive' ? 'selected' : ''; ?>>Comprehensive</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <a href="packages.php" class="btn btn-outline-army-green">Clear Filters</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Packages Grid -->
<section class="py-5">
    <div class="container">
        <?php if (empty($filtered_packages)): ?>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="alert alert-info">
                        <h4>No packages found</h4>
                        <p>No packages match your current filters. Please try different filter options.</p>
                        <a href="packages.php" class="btn btn-army-green">View All Packages</a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <?php foreach ($filtered_packages as $package): ?>
                    <div class="col-lg-6 col-xl-4">
                        <div class="package-card card border-0 shadow-sm h-100" id="<?php echo $package['id']; ?>">
                            <div class="card-img-wrapper position-relative">
                                <img src="images/<?php echo $package['image']; ?>" class="card-img-top" alt="<?php echo $package['title']; ?>" style="height: 250px; object-fit: cover;">
                                <div class="package-overlay">
                                    <span class="badge bg-army-green position-absolute top-0 start-0 m-3"><?php echo $package['duration']; ?></span>
                                    <span class="badge bg-dark position-absolute top-0 end-0 m-3"><?php echo $package['price']; ?></span>
                                </div>
                                <div class="package-hover-overlay">
                                    <button class="btn btn-light btn-sm" onclick="openPackageModal('<?php echo $package['id']; ?>')">
                                        <i class="fas fa-eye me-1"></i>Quick View
                                    </button>
                                </div>
                            </div>
                            
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-army-green mb-2"><?php echo $package['title']; ?></h5>
                                <p class="card-text text-muted mb-3"><?php echo $package['description']; ?></p>
                                
                                <div class="package-highlights mb-3">
                                    <h6 class="text-army-green mb-2">Highlights:</h6>
                                    <ul class="list-unstyled small">
                                        <?php foreach (array_slice($package['highlights'], 0, 3) as $highlight): ?>
                                            <li><i class="fas fa-check text-army-green me-2"></i><?php echo $highlight; ?></li>
                                        <?php endforeach; ?>
                                        <?php if (count($package['highlights']) > 3): ?>
                                            <li class="text-muted"><i class="fas fa-plus me-2"></i>And more...</li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-army-green btn-sm" onclick="openPackageModal('<?php echo $package['id']; ?>')">
                                            <i class="fas fa-info-circle me-1"></i>Details
                                        </button>
                                        <a href="bookings.php?package=<?php echo urlencode($package['title']); ?>" class="btn btn-army-green">
                                            <i class="fas fa-calendar-check me-1"></i>Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Package Modal -->
<div class="modal fade" id="packageModal" tabindex="-1" aria-labelledby="packageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-army-green text-white">
                <h5 class="modal-title" id="packageModalLabel">Package Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="packageModalBody">
                <!-- Content will be loaded dynamically -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-army-green" id="bookPackageBtn">Book This Package</button>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<section class="py-5 bg-army-green text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold mb-3">Can't Find What You're Looking For?</h2>
                <p class="lead mb-0">We specialize in creating custom safari experiences tailored to your preferences and budget.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contactus.php" class="btn btn-light btn-lg">
                    <i class="fas fa-envelope me-2"></i>Request Custom Package
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Package data for modal
const packagesData = <?php echo json_encode($packages); ?>;

function openPackageModal(packageId) {
    const package = packagesData.find(p => p.id === packageId);
    if (!package) return;
    
    const modalBody = document.getElementById('packageModalBody');
    const modalTitle = document.getElementById('packageModalLabel');
    const bookBtn = document.getElementById('bookPackageBtn');
    
    modalTitle.textContent = package.title;
    
    modalBody.innerHTML = `
        <div class="row">
            <div class="col-md-6">
                <img src="images/${package.image}" class="img-fluid rounded mb-3" alt="${package.title}">
                <div class="package-info">
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <div class="info-item">
                                <i class="fas fa-clock text-army-green me-2"></i>
                                <strong>Duration:</strong> ${package.duration}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="info-item">
                                <i class="fas fa-tag text-army-green me-2"></i>
                                <strong>Price:</strong> ${package.price}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h6 class="text-army-green mb-3">Description</h6>
                <p class="mb-4">${package.description}</p>
                
                <h6 class="text-army-green mb-3">Highlights</h6>
                <ul class="list-unstyled mb-4">
                    ${package.highlights.map(highlight => `<li><i class="fas fa-check text-army-green me-2"></i>${highlight}</li>`).join('')}
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <h6 class="text-army-green mb-3">Itinerary</h6>
                <div class="itinerary">
                    ${package.itinerary.map(day => `<div class="itinerary-item mb-2"><i class="fas fa-map-marker-alt text-army-green me-2"></i>${day}</div>`).join('')}
                </div>
            </div>
        </div>
    `;
    
    bookBtn.onclick = function() {
        window.location.href = `bookings.php?package=${encodeURIComponent(package.title)}`;
    };
    
    const modal = new bootstrap.Modal(document.getElementById('packageModal'));
    modal.show();
}

// Add hover effects
document.addEventListener('DOMContentLoaded', function() {
    const packageCards = document.querySelectorAll('.package-card');
    
    packageCards.forEach(card => {
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
.package-card {
    transition: all 0.3s ease;
}

.package-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.package-hover-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(75, 112, 67, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.package-card:hover .package-hover-overlay {
    opacity: 1;
}

.itinerary-item {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.itinerary-item:last-child {
    border-bottom: none;
}
</style>

<?php include 'includes/footer.php'; ?>

