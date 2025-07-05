<?php
$page_title = "Our Updates";
$page_description = "Stay up-to-date with the latest news, events, and adventures from TA Luxury Safaris.";
require_once 'includes/config.php';
require_once 'includes/functions.php';
include 'includes/header.php';
?>

<main>
    <section class="hero-section bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-army-green">Our Latest Updates</h1>
            <p class="lead text-muted">Stay informed about our new packages, exciting safaris, and company news.</p>
        </div>
    </section>

    <section class="updates-content py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-army-green mb-4">A Journey Through Our Milestones</h2>
                    <p class="lead">At TA Luxury Safaris, we are constantly evolving, exploring new horizons, and enhancing our services to provide you with the most unforgettable East African adventures. This section is dedicated to sharing our journey, recent achievements, and exciting developments.</p>
                    
                    <p>From discovering new hidden gems in the heart of Rwanda to expanding our conservation efforts in Tanzania, every step we take is aimed at enriching your safari experience while contributing positively to the local communities and wildlife. We believe in sustainable tourism that leaves a lasting impact, both on our travelers and the incredible ecosystems we explore.</p>

                    <h3 class="text-army-green mt-5 mb-3">Our Recent Adventures & Highlights</h3>
                    <div class="row gallery-grid">
                        <div class="col-md-6 mb-4">
                            <a href="images/gallery-1.jpg" data-lightbox="updates-gallery" data-title="Gorilla Trekking Expedition">
                                <img src="images/gallery-1.jpg" class="img-fluid rounded shadow-sm" alt="Gorilla Trekking Expedition">
                            </a>
                            <p class="text-muted mt-2">Successful Gorilla Trekking Expedition in Volcanoes National Park.</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="images/gallery-2.jpg" data-lightbox="updates-gallery" data-title="Akagera Wildlife Safari">
                                <img src="images/gallery-2.jpg" class="img-fluid rounded shadow-sm" alt="Akagera Wildlife Safari">
                            </a>
                            <p class="text-muted mt-2">Spotting the Big Five in Akagera National Park.</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="images/gallery-3.jpg" data-lightbox="updates-gallery" data-title="Cultural Village Visit">
                                <img src="images/gallery-3.jpg" class="img-fluid rounded shadow-sm" alt="Cultural Village Visit">
                            </a>
                            <p class="text-muted mt-2">Immersive cultural experience at Iby'Iwacu Cultural Village.</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="images/gallery-4.jpg" data-lightbox="updates-gallery" data-title="Serengeti Migration">
                                <img src="images/gallery-4.jpg" class="img-fluid rounded shadow-sm" alt="Serengeti Migration">
                            </a>
                            <p class="text-muted mt-2">Witnessing the Great Migration in Serengeti National Park.</p>
                        </div>
                    </div>

                    <h3 class="text-army-green mt-5 mb-3">Featured Video: The Spirit of Safari</h3>
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item w-100" style="height: 400px;" src="https://www.youtube.com/embed/your_video_id" allowfullscreen></iframe>
                    </div>
                    <p class="text-muted">Experience the magic of East Africa through our latest video showcasing the breathtaking landscapes and incredible wildlife encounters.</p>

                    <h3 class="text-army-green mt-5 mb-3">Upcoming Events & New Packages</h3>
                    <p>We are excited to announce several new packages and special events for the upcoming season. Keep an eye on our social media channels and subscribe to our newsletter for exclusive early bird offers and detailed itineraries.</p>
                    <ul>
                        <li>**August 2025**: Launch of our new "Uganda Primate & Culture Trail" package.</li>
                        <li>**September 2025**: Special photography safari workshop in Masai Mara, Kenya.</li>
                        <li>**October 2025**: Participation in the East Africa Tourism Expo in Kigali.</li>
                    </ul>

                    <p>Thank you for being a part of the TA Luxury Safaris family. We look forward to creating more unforgettable memories with you!</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

