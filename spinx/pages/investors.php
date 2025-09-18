<head>
    <?php include('../common/header.php'); ?>
    <style>
        /* FAQ Title Styling */
        .faq-title {
            font-size: 1.75rem;
            font-weight: bold;
            text-transform: uppercase;
            padding: 10px 0;
        }

        /* FAQ Button */
        .faq-button {
            font-size: 1.8rem;
            font-weight: bold;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: 30px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            color: #000;
            transition: all 0.3s ease-in-out;
        }

        /* Circular Arrow Button */
        .arrow-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #071A3D;
            /* Dark Blue */
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease-in-out;
        }

        .arrow-btn span {
            color: white;
            font-size: 1.2rem;
            transition: transform 0.3s ease-in-out;
        }

        /* Rotate arrow when expanded */
        .faq-item.active .arrow-btn span {
            transform: rotate(90deg);
        }

        /* FAQ Content (Initially Hidden) */
        .faq-content {
            max-height: 0;
            overflow: hidden;
            padding: 0 10px;
            font-size: 1.3rem;
            transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
            opacity: 0;
        }

        /* Show content when active */
        .faq-item.active .faq-content {
            max-height: 200px;
            /* Adjust as needed */
            opacity: 1;
        }

        /* Add spacing between FAQ items */
        .faq-item {
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 5px;
        }

        .section-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 4rem 1rem;
            /* Adjust padding */
            max-width: 900px;
            margin: 0 auto;
        }

        .section-button {
            background: rgba(52, 152, 219, 0.2);
            color: #006daa;
            font-size: 1rem;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 30px;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .b-image {
            background: linear-gradient(rgba(0, 0, 20, 0.5), rgba(0, 0, 20, 0.5)),
                url('../assets/investor.webp') center/cover;
            height: 400px;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }


        .fix {
            width: 390px !important;
            height: 300px !important;
            border-radius: 10px;
        }


        .top-title {
            font-weight: 700;
        }

        .lead {
            font-size: 15px !important;
        }
    </style>
</head>

<header class="text-center b-image">
    <div class="container position-relative d-flex align-items-center justify-content-center">
        <div class="col-12 text-center ">
            <h1 class="display-2 text-white fw-bold page-title">Investor Relations</h1>
        </div>
    </div>
</header>
<div class="container">
    <section class="section-container">
        <h1 class="section-title mb-5">Welcome to Quantum Spin Investor Relations</h1>
        <p class="section-text">
            At Quantum Spin, we are committed to transparency and fostering strong relationships with our investors. Our Investor Relations page provides comprehensive information on our financial performance, strategic growth plans, and key initiatives driving our innovation in energy technology.
        </p>
    </section>
    <div class="main-container">
        <div class="row align-items-center">
            <h1 class="text-center top-title">Why Invest in Quantum Spin?</h1>
            <div class="col-lg-6 order-1 order-lg-1">
                <div class="technology-image mb-lg-0">
                    <img src="../assets/investors/innovative.webp" alt="SpinX Technology" class="mt-5 img-fluid mb-5 fix">
                </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-2 mb-5 mt-5">
                <h4 class="display-6 mt-5" style="font-weight:700">Innovative Technology</h4>
                <p class="lead" style="font-weight:400">
                    Our pioneering SpinX® technology revolutionises energy transfer, promising near-zero energy loss and significant advancements across multiple industries.
                </p>
                <a href="/TechnologyPage.php"
                    class="btn btn-dark btn-lg d-inline-flex align-items-center gap-2 text-white"
                    id="heroText">
                    Discover More
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="d-inline-block ms-2 text-white">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>

            </div>
        </div>

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-2 ">
                <div class="technology-image mb-lg-0">
                    <img src="../assets/investors/groth.webp" alt="SpinX Technology" class="mt-5 img-fluid mb-5 fix">
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-1 mb-5 mt-5">
                <h4 class="display-6 mt-5" style="font-weight:700">Sustainable Growth</h4>
                <p class="lead" style="font-weight:400">
                    We are dedicated to sustainability, focusing on reducing environmental impact and promoting eco-friendly practice.
                </p>
                <a href="/TechnologyPage.php"
                    class="btn btn-dark btn-lg d-inline-flex align-items-center gap-2 text-white"
                    id="heroText">
                    Discover How
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="d-inline-block ms-2 text-white">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 order-1 order-lg-1">
                <div class="technology-image mb-lg-0">
                    <img src="../assets/investors/strong.webp" alt="SpinX Technology" class="mt-5 img-fluid mb-5 fix">
                </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-2 mb-5 mt-5">
                <h4 class="display-6 mt-5" style="font-weight:700">Strong Partnerships</h4>
                <p class="lead" style="font-weight:400">
                    Our strategic alliances and collaborations with industry leaders drive continuous innovation and market expansion.
                </p>
                <a href="/TechnologyPage.php"
                    class="btn btn-dark btn-lg d-inline-flex align-items-center gap-2 text-white"
                    id="heroText">
                    Discover More
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="d-inline-block ms-2 text-white">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-2 ">
                <div class="technology-image mb-lg-0">
                    <img src="../assets/investors/finance.webp" alt="SpinX Technology" class="mt-5 img-fluid mb-5 fix">
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-1 mb-5 mt-5">
                <h4 class="display-6 mt-5" style="font-weight:700">Financial Performance</h4>
                <p class="lead" style="font-weight:400">
                    Stay updated with our financial reports, revenue projections, and performance metrics, reflecting our robust growth and profitability.
                </p>
                <a href="/TechnologyPage.php"
                    class="btn btn-dark btn-lg d-inline-flex align-items-center gap-2 text-white"
                    id="heroText">
                    Discover More
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="d-inline-block ms-2 text-white">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>

            </div>
        </div>

        <div>

            <h1 class="text-left mt-5 mb-5">Key Information for Investors</h1>
            <div class="container mt-5" style="margin-top:7%; margin-bottom:7%">
                <div class=" row">
                    <div class="col-md-12" style="background-color: #f6f7f9; padding: 30px; border-radius:30px">
                        <!-- Question 1 -->
                        <div class="faq-item">
                            <button class="faq-button" onclick="toggleFAQ(this)">
                                <p style="font-size: 26px; max-width: 85%;">
                                    Financial Reports
                                </p>
                                <div class="arrow-btn"><span>&rarr;</span></div>
                            </button>
                            <div class="faq-content">
                                Access our annual and quarterly financial reports, investor presentations, and other key financial documents.
                            </div>
                        </div>
                        <!-- Question 2 -->
                        <div class="faq-item">
                            <button class="faq-button" onclick="toggleFAQ(this)">
                                <p style="font-size: 26px; max-width: 85%;">
                                    Stock Information
                                </p>
                                <div class="arrow-btn"><span>&rarr;</span></div>
                            </button>
                            <div class="faq-content">
                                Find current stock prices, historical data, and market trends related to Quantum Spin.
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="faq-item">
                            <button class="faq-button" onclick="toggleFAQ(this)">
                                <p style="font-size: 26px; max-width: 85%;">Corporate Governance
                                </p>
                                <div class="arrow-btn"><span>&rarr;</span></div>
                            </button>
                            <div class="faq-content">
                                Learn about our governance framework, board of directors, and commitment to ethical business practices.
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="faq-item">
                            <button class="faq-button" onclick="toggleFAQ(this)">
                                <p style="font-size: 26px; max-width: 85%;">
                                    Investor News
                                </p>
                                <div class="arrow-btn"><span>&rarr;</span></div>
                            </button>
                            <div class="faq-content">
                                Stay informed with the latest updates on company developments, new partnerships, product launches, and other significant announcements.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function toggleFAQ(button) {
                    const faqItem = button.parentElement;
                    const isActive = faqItem.classList.contains("active");

                    // Close all open items
                    document.querySelectorAll(".faq-item").forEach(item => item.classList.remove("active"));

                    // Toggle the clicked item
                    if (!isActive) {
                        faqItem.classList.add("active");
                    }
                }
            </script>
        </div>

    </div>
    <section>
        <div class="row mt-5">
            <div class="col-lg-5">
                <h3 text-left>Contact Investor Relations</h3>
                <p>For inquiries or more information about investment opportunities, please contact our Investor Relations team.</p><br>
                <strong>Email:</strong> investors@quantumspin.uk <br>
                <strong>Phone:</strong> +44 (0)1234 567890

            </div>
            <div class="col-lg-7">
                <form id="contactForm" class="bg-light p-4 rounded">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Your name*" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input name="email" type="email" class="form-control" placeholder="Email*" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" rows="6" placeholder="Message*" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark px-4">Send message</button>
                    <div id="formMessage" class="mt-3"></div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php
include('../common/footer.php');
?>