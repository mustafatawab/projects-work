<?php
include('../common/header.php');


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Technology - Quantum Spin</title>


    <!-- Defer non-critical CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="../styles/style.css" media="print" onload="this.media='all'">
    <style>
        .hero-section {
            position: relative;
            height: 60vh;
            background-image: url('../assets/sustainablity/back-grond.webp');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 20, 0.5);
        }


        .contact-btn {
            background-color: transparent;
            border: 2px solid white;
            border-radius: 25px;
            padding: 8px 2px;
        }

        .technology-image {
            border-radius: 8px;
            overflow: hidden;
        }



        .technology-section {
            background-color: white;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .discover-btn {
            background-color: #001f3f;
            color: white;
            border-radius: 25px;
            padding: 10px 25px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }


        .text-custom-color {
            color: #061a40;
        }
    </style>
</head>
<!-- Hero Section -->
<section class="hero-section d-flex align-items-center position-relative" style="min-height: 400px;">
    <div class="hero-overlay"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1 class="display-2 fw-bold">Sustainablity and Corporate Responsibility</h1>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="position-relative " style=" background-image: url('../assets/sustainablity/back-grond.webp'); ">
    <div style="background-color : #f6f7f9" class=" rounded-top-5 pt-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h1 class="mb-4 mt-4" style="font-weight:700">Leading the Charge Towards a<br> Sustainable Future</h1>
                    <p style="font-size: 18px; font-family : sans-serif">At Quantum Spin, our groundbreaking SpinX® technology is the result of extensive research and collaboration with top experts
                        Explore our detailed research to understand the scientific principles and transformative results behind SpinX® technology. These studies reflect our mission to revolutionise energy transfer with unmatched efficiency and sustainability.</p>
                </div>
            </div>
            <div class=" row">
                <!-- Rest of your content remains the same -->
            </div>
        </div>

        <!-- First Section -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-1 order-lg-1">
                    <div class="technology-image mb-lg-0">
                        <img src="../assets/sustainablity/sustain.webp" alt="SpinX Technology">
                    </div>
                </div>
                <div class="col-lg-7 order-2 order-lg-2" style="padding:8%">
                    <h2 class="display-6 mb-4" style="font-weight:700">Sustainability</h2>
                    <p class="lead" style="font-weight:400">
                        <span class="fw-bold">Energy Efficiency:</span> SpinX® technology enhances energy efficiency across various applications, reducing energy consumption and minimising waste. By improving the effectiveness of energy transfer, we help industries lower their overall energy demand, contributing to a more sustainable energy landscape.<br><br>
                        <span class="fw-bold">Resource Optimisation: </span>‍Our technology ensures optimal resource use, enhancing the performance and lifespan of batteries and electronic devices. This reduces the need for frequent replacements and conserves valuable resources.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Second Section -->
<section class="technology-section py-5" >
    <div class="container">
        <div class="row align-items-center" style="gap : 100px">
            <div class="col-lg-5 col-12 mb-4 order-1 order-lg-2">
                <div class="technology-image mb-lg-0 ">
                    <img src="../assets/sustainablity/environ.webp" alt="SpinX Technology" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-5 col-12 order-2 order-lg-1 mb-4" style="padding:5% 0px">
                <h2 class=" display-6 mb-4 text-custom-color" style="font-weight:700">Environmental Impact</h2>
                <p class="lead" style="font-weight:400; line-height:1.3; font-size: 18px">
                    <span class=" fw-bold">Reduced Carbon Footprint:</span> SpinX® technology helps reduce greenhouse gas emissions by significantly lowering energy loss and improving efficiency. This contributes to global efforts to combat climate change and promotes a cleaner, healthier environment.<br><br>

                    <span class="fw-bold">‍Minimised Waste: </span>SpinX® technology reduces electronic waste by extending the lifespan of batteries and electronic devices. Fewer replacements mean less waste, supporting a circular economy and reducing landfill pressure.<br><br>

                    <span class="fw-bold">‍Sustainable Energy Solutions: </span>Our focus on renewable energy applications, such as solar and wind power, supports the transition to sustainable energy sources. SpinX® technology maximises the efficiency of these systems, making renewable energy more viable and effective.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Third Section -->
<section class="technology-section py-5" style="background-color : #f6f7f9">
    <div class="container">
        <div class="row align-items-center" style="gap : 100px">
            <div class="col-lg-5 order-1 mb-4 order-lg-1">
                <div class="technology-image mb-4 mb-lg-0">
                    <img src="../assets/sustainablity/eco.webp" alt="SpinX Technology" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-5 order-2 order-lg-2">
                <h2 class="display-6 mb-4" style="font-weight:700">Eco-Friendly Materials</h2>
                <p class="lead" style="font-weight:400">
                    <span class=" fw-bold">Recyclable Components:</span> SpinX® technology utilises recyclable materials in its design and manufacturing processes. This commitment to using eco-friendly materials ensures that our products have a minimal environmental impact throughout their lifecycle.
                    <br><br>
                    <span class="fw-bold">Non-Toxic Substances: </span>We prioritise the use of non-toxic and safe materials in our products, reducing the risk of environmental contamination and ensuring the safety of our customers and communities.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Fourth Section -->
<section class="technology-section">
    <div class="container">
        <div class="row align-items-center mt-5" style="gap : 100px">
            <div class="col-lg-5 col-12 order-1 order-lg-2">
                <div class="technology-image mb-4 mb-lg-0">
                    <img src="../assets/sustainablity/corporate.webp" alt="SpinX Technology" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-5 col-12 order-2 mt-5 mb-5 order-lg-1">
                <h2 class="display-6 mb-3 text-custom-color" style="font-weight:700">Corporate Responsibility</h2>
                <p class=" lead" style="font-weight:400; font-size : 18px">
                    <span class="fw-bold ">Reduced Carbon Footprint:</span> Quantum Spin is dedicated to maintaining the highest ethical standards in all aspects of our business. We are committed to transparency, integrity, and accountability in our operations.<br><br>

                    <span class="fw-bold">‍Minimised Waste: </span>We actively engage with local communities, supporting initiatives that promote education, environmental conservation, and social well-being. Our goal is to make a positive impact on the communities in which we operate.<br><br>

                    <span class="fw-bold">‍Sustainable Energy Solutions: </span>We prioritise the health, safety, and well-being of our employees. By fostering a positive and inclusive workplace culture, we ensure that our team is motivated, supported, and empowered to achieve their best.<br><br>

                    <span class="fw-bold">‍Sustainable Growth: </span>Our business strategies are aligned with long-term sustainability goals. We strive to balance economic growth with environmental stewardship, ensuring that our success contributes to a sustainable future.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include('../common/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>


</script>