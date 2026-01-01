<head>

    <?php
    include('../common/header.php');
    ?>

    <style>
        .hero-section {
            background-image: linear-gradient(#061a4066, #061a4066),
                url('../assets/about/about.webp');
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            width: 100%;
        }

        .sub-headings {
            font-size: 1.16rem;
            margin-top: 1.2rem;
        }

        .headings {
            font-weight: bold;
        }

        .mission-section {
            background-color: white;
            color: black
        }

        .mission-tabs button {
            margin-right: 10px;
            border-radius: 20px;
        }

        .mission-content {
            font-size: 1.1rem;
        }

        .icon-box {
            width: 80px;
            height: 80px;
            padding: 20px;
            border-radius: 50px;
            background-color: black;
            margin: 40px;
        }

        .cta-section-abt {
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .abt-section {
            display: flex;
            align-items: center;
        }

        .content-section {
            display: none;
        }

        .active-section {
            display: block;
        }

        .redifined {
            text-align: center;
            padding: 0 10% 0 10%;
        }

        .redifined-des {
            text-align: center;
            padding: 0 10% 0 10%;
            font-size: 1.3rem;
            color: black !important
        }
    </style>
</head>

<!-- Hero Section -->
<div class="hero-section abt-section">
    About Us
</div>

<!-- About Section -->
<section class="container mission-section">
    <div class="row">
        <div class="col-md-6">
            <div class="mission-tabs">
                <button id="mission-btn" class="btn btn-primary">Our Mission</button>
                <button id="values-btn" class="btn btn-outline-primary">Our Values</button>
            </div>
            <div id="mission-section" class="content-section active-section">
                <h2 class="mt-4">Empowering the Future with Near-Zero Loss Energy Transfer</h2>
                <p class="mission-content">
                    At Quantum Spin our mission is to deliver innovative energy solutions that redefine how energy is transferred, stored, and used.
                </p>
                <p class="mission-content">
                    We believe that through more efficient energy transfer we can revolutionize the global energy landscape and create a more environmentally sustainable future.
                </p>
            </div>
            <div id="values-section" class="content-section">
                <h2 class="mt-4">Innovation, environmental sustainability, and excellence</h2>
                <div class="mission-content">
                    Our values guide everything we do and inform our decisions. We prioritise <strong>innovation</strong> by creating cutting-edge solutions that transform energy transfer and continuously evolve to be best-in-class. <strong>Sustainability</strong> is at our core, as we develop technology for a greener future and use eco-friendly materials and practices. <strong>Excellence</strong> drives us to provide high-quality, reliable solutions and exceptional customer service. <strong>Integrity</strong> ensures we remain transparent and committed to ethical practices. <strong>Collaboration</strong> is key, as we work with partners and engage with local communities to promote education, sustainability, and social well-being.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="../assets/about/man.webp" class="img-fluid rounded shadow" alt="Mission Image">
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="container text-center my-5">
    <div>
        <h2 class="text-center mb-4 redifined">Redefining Energy Transfer And Battery Health</h2>
        <p class="text-center text-muted redifined-des">
            Our solutions utilise readily available and environmentally friendly materials, facilitating easy recycling and reuse. Our technology is created free from hazardous materials, aligning with sustainability and environmental conservation objectives.
        </p>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <div>
                <img class="icon-box" src="../assets/about/storage-icon.svg " alt="Icon">
                <h4 class="headings">Near-Zero Loss Energy Transfer</h4>
                <p class="sub-headings">Up to <strong>37% of energy</strong> is lost in electric delivery systems. Our technology provides <strong>near-zero loss energy transfer</strong>.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img class="icon-box" src="../assets/about/recycle-icon.svg" alt="Icon">
                <h4 class="headings">Accelerated Energy Transfer</h4>
                <p class="sub-headings"><strong>43 minutes</strong> is the average EV fast charging session in the US. With SpinX® technology, <strong>0-100% charge in as little as 3 minutes</strong>.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img class="icon-box" src="../assets/about/storage-icon.svg" alt="Icon">
                <h4 class="headings">Extended Lifespan and Performance</h4>
                <p class="sub-headings"><strong>20%</strong> is the average <strong>loss of mobile device capacity</strong> after 500 cycles. Our technology rejuvenates the battery.</p>
            </div>
        </div>
    </div>
</section>

<?php include('../common/footer.php'); ?>


<!-- Bootstrap & jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#mission-btn').click(function() {
            $('#mission-section').addClass('active-section');
            $('#values-section').removeClass('active-section');
            $(this).addClass('btn-primary').removeClass('btn-outline-primary');
            $('#values-btn').addClass('btn-outline-primary').removeClass('btn-primary');
        });

        $('#values-btn').click(function() {
            $('#values-section').addClass('active-section');
            $('#mission-section').removeClass('active-section');
            $(this).addClass('btn-primary').removeClass('btn-outline-primary');
            $('#mission-btn').addClass('btn-outline-primary').removeClass('btn-primary');
        });
    });
</script>