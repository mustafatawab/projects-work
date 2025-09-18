<head>
    <?php include('../common/header.php'); ?>
    <style>
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
                url('../assets/partnership.webp') center/cover;
            height: 400px;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .bg-primary {
            background: linear-gradient(rgba(0, 0, 10, 0.5), rgba(0, 0, 10, 0.5)),
                url('../assets/waves_footer.webp');
            max-height: 400px;
            border-top-right-radius: 40px;
        }

        .bg-secondary {
            background: linear-gradient(rgba(0, 0, 20, 0.1), rgba(0, 0, 20, 0.1)),
                url('../assets/p-footer.webp') center/cover;
            max-height: 400px;
        }

        .section-text {
            font-size: 16px !important;
        }

        @media (max-width: 768px) {
            .container-fluid {
                padding-left: 10% !important;
            }
        }
    </style>
</head>

<header class="text-center b-image">
    <div class="container position-relative d-flex align-items-center justify-content-center">
        <div class="col-12 text-center ">
            <h1 class="display-2 text-white fw-bold page-title">
                Partner with Us</h1>
        </div>
    </div>
</header>
<div class="main-container">
    <section class="section-container">
        <div class="section-button">Partner With Quantum Spin</div>
        <h1 class="section-title">Unlock The Future Of Energy Transfer With SpinX® Technology</h1>
        <p class="section-text">
            At Quantum Spin we believe in the power of collaboration to drive innovation and transform industries.
            Our revolutionary SpinX® technology, with its near-zero loss energy transfer, presents an unparalleled opportunity
            for companies and industry leaders to enhance efficiency, sustainability, and performance across various sectors.
        </p>
    </section>

</div>
<?php include('../sections/p-carosoul.php'); ?>
<section>
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-md-6 bg-primary rotate-background text-white p-5 ">
                <h2>Committed to fostering long-term partnerships with industry leaders <br><br></h2>
                <p class="text-white">Our business model is reinforced by a strategic contract with Corporate Mobile Recycling (CMR), a subsidiary of TD SYNNEX, ensuring a stable and predictable revenue stream. We are poised to expand the transformative potential of SpinX® technology across various sectors, driving substantial growth and innovation.</p>
            </div>
            <div class="col-md-6 text-white p-3 p-l-f">
                <h2></h2>
            </div>
        </div>
    </div>

</section>
<?php include('../common/footer.php'); ?>