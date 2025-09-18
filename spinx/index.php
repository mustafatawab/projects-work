<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include('./common/header.php');
    ?>

</head>

<body>
    <div>
        <section class="position-relative vh-100 bg-dark">
            <!-- Video Background -->
            <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden">
                <video
                    class="w-100 h-100 object-fit-cover"
                    autoplay
                    loop
                    muted
                    playsinline
                    preload="auto"
                    id="heroVideo">
                    <source src="assets/videos/video1.mp4" type="video/mp4">
                    <source src="assets/videos/video2.mp4" type="video/mp4">
                </video>
            </div>

            <!-- Content Overlay -->
            <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center bg-black bg-opacity-50">
                <div class="container text-center text-md-start">
                    <div class="px-4 text-white">
                        <h1 class="display-3 fw-bold mb-4 lh-1" id="heroText">
                            Near-Zero Loss Energy Transfer
                        </h1>

                        <p class="mb-4 text-white fs-6 fw-light" id="heroText">
                            Quantum Spin is at the forefront of energy innovation with our groundbreaking <br class="d-none d-md-block">
                            SpinX® technology. Revolutionising the way the world is powered, SpinX® <br class="d-none d-md-block">
                            enables near-zero loss energy transfer, drastically improving efficiency and <br class="d-none d-md-block">
                            sustainability across multiple industries.
                        </p>

                        <a href="/TechnologyPage.php" class="btn btn-light btn-lg d-inline-flex align-items-center gap-2" id="heroText">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-inline-block ms-2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology & Stats Section -->

        <?php include('./sections/powering.php'); ?>

        <!-- Welcome Section -->
        <?php include('./sections/quantum.php'); ?>

        <?php include('./sections/carosoul.php'); ?>

        <!-- Mission Section -->
        <section class="mission-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title text-white">Our Mission</h2>
                        <p class="section-text text-white-50">
                            We are committed to delivering exceptional value and driving forward
                            a cleaner, more efficient future by addressing critical challenges in
                            how energy is used and distributed. Through continuous innovation and
                            sustainable practices, we're reshaping the energy landscape.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->

        <!-- market oppertunity -->

        <?php include('./sections/opportunity.php'); ?>
        <?php include('./sections/faq.php'); ?>
        <?php
        include('./common/footer.php');
        ?>

        <script>
            // Advanced video optimization script
            // document.addEventListener("DOMContentLoaded", function() {
            //     const heroVideo = document.getElementById('heroVideo');
            //     let videoInitialized = false;

            //     // Function to handle video initialization
            //     function initializeVideo() {
            //         if (!videoInitialized && heroVideo) {
            //             if (window.innerWidth < 768) {
            //                 heroVideo.src = '.../assets/videos/video1.mp4';
            //             }
            //             // Optimize video loading
            //             heroVideo.load();

            //             // Play video when ready
            //             heroVideo.addEventListener('loadedmetadata', () => {
            //                 heroVideo.play().catch(error => {
            //                     console.warn("Video autoplay failed:", error);
            //                 });
            //             });

            //             // Reduce quality when battery is low
            //             if ('getBattery' in navigator) {
            //                 navigator.getBattery().then(battery => {
            //                     if (battery.level < 0.15) {
            //                         heroVideo.setAttribute('data-quality', 'low');
            //                     }
            //                 });
            //             }

            //             // Pause video when not visible
            //             const videoObserver = new IntersectionObserver(
            //                 (entries) => {
            //                     entries.forEach(entry => {
            //                         if (!entry.isIntersecting) {
            //                             heroVideo.pause();
            //                         } else if (document.visibilityState === 'visible') {
            //                             heroVideo.play().catch(() => {});
            //                         }
            //                     });
            //                 }, {
            //                     threshold: 0.2
            //                 }
            //             );
            //             videoObserver.observe(heroVideo);

            //             // Handle visibility changes
            //             document.addEventListener('visibilitychange', () => {
            //                 if (document.hidden) {
            //                     heroVideo.pause();
            //                 } else {
            //                     if (isElementInViewport(heroVideo)) {
            //                         heroVideo.play().catch(() => {});
            //                     }
            //                 }
            //             });

            //             videoInitialized = true;
            //         }
            //     }

            //     // Helper function to check if element is in viewport
            //     function isElementInViewport(el) {
            //         const rect = el.getBoundingClientRect();
            //         return (
            //             rect.top >= 0 &&
            //             rect.left >= 0 &&
            //             rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            //             rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            //         );
            //     }

            //     // Initialize video with requestIdleCallback for better performance
            //     if ('requestIdleCallback' in window) {
            //         requestIdleCallback(() => initializeVideo());
            //     } else {
            //         setTimeout(initializeVideo, 1);
            //     }

            //     // Reinitialize on resize for responsive behavior
            //     let resizeTimeout;
            //     window.addEventListener('resize', () => {
            //         clearTimeout(resizeTimeout);
            //         resizeTimeout = setTimeout(() => {
            //             videoInitialized = false;
            //             initializeVideo();
            //         }, 250);
            //     });
            // });



            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>