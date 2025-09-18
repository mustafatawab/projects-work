<head>
    <?php
    include('../common/header.php');
    ?>
    <style>
        .feature-list {
            list-style: none;
            padding-left: 0;
        }

        .feature-list li {
            position: relative;
            padding-left: 1.5em;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .feature-list li::before {
            content: "•";
            color: #007bff;
            position: absolute;
            left: 0;
            font-size: 1.2em;
        }

        .custom-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
        }

        @media (min-width: 1200px) {
            .custom-container {
                max-width: 1000px;
            }
        }

        h1 {
            font-size: 2.5rem !important;
            font-weight: 600 !important;
            color: #1a2a4a;
        }

        h2 {
            color: #1a2a4a;
            font-weight: 600 !important;
            margin-top: 3rem !important;
        }

        .b-image {
            background: linear-gradient(rgba(0, 0, 20, 0.5), rgba(0, 0, 20, 0.5)),
                url('../assets/consumer-goods.webp') center/cover;
            height: 400px;
        }

        .section-title {
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: 600;
        }

        .mb-5 ul li {
            font-size: 1.2rem;
            font-weight: 400;

        }

        .lead {
            font-size: 1.1rem !important;
            color: #000000;
            font-weight: 400 !important;
        }
        .page-title{
            margin-top:150px;
        }
    </style>
</head>
<header class="text-center b-image mb-5">
    <div class="container position-relative d-flex align-items-center justify-content-center">
        <div class="col-12 text-center mb-5">
            <h1 class="display-2 text-white fw-bold page-title">Consumer Goods</h1>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="custom-container my-5">
    <h3 class="mb-4 text-start">Revolutionising Everyday Products with SpinX® Technology</h3>

    <p class="lead mb-5">
        SpinX® technology offers transformative benefits for a wide range of consumer goods, enhancing their performance, efficiency, and sustainability. By integrating SpinX® into everyday products, consumers can enjoy improved functionality, extended lifespan, and significant energy savings, leading to reduced utility bills and a more sustainable lifestyle.
    </p>

    <section class="mb-5">
        <h2 class="h3 mb-4">Enhanced Performance and Convenience</h2>
        <ul class="feature-list">
            <li><strong>Faster Charging:</strong> SpinX® technology enables ultra-fast charging for mobile devices, portable computers, and electric bicycles and scooters, reducing charging times from hours to minutes.</li>
            <li><strong>Improved Reliability:</strong> By providing a stable and efficient power supply, SpinX® technology enhances the reliability and durability of consumer electronics and appliances, ensuring they perform optimally under various conditions.</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2 class="h3 mb-4">Extended Battery Life</h2>
        <ul class="feature-list">
            <li><strong>Longer Usage Periods:</strong> Devices equipped with SpinX® technology experience extended battery life, allowing for longer usage periods between charges. This is particularly beneficial for mobile devices, laptops, and electric bicycles, enhancing convenience for users.</li>
            <li><strong>Reduced Replacement Costs:</strong> The extended lifespan of batteries means fewer replacements are needed, saving consumers money over time.</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2 class="h3 mb-4">Energy Efficiency and Cost Savings</h2>
        <ul class="feature-list">
            <li><strong>Lower Energy Consumption:</strong> SpinX® technology minimises energy loss in consumer goods, ensuring that more of the electricity drawn from the grid is used effectively. This leads to lower energy consumption and reduced utility bills for consumers.</li>
            <li><strong>Eco-Friendly Operation:</strong> By improving energy efficiency, SpinX® technology helps reduce the environmental impact of household appliances and electronics, contributing to a more sustainable lifestyle.</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2 class="h3 mb-4">Versatile Applications in Consumer Goods</h2>
        <ul class="feature-list">
            <li><strong>Heat Pumps:</strong> SpinX® technology enhances the efficiency of heat pumps used for heating and cooling, reducing operational costs and improving performance.</li>
            <li><strong>Home Appliances:</strong> From refrigerators and washing machines to air conditioners and lighting systems, SpinX® technology optimises energy use, resulting in lower electricity bills and longer-lasting appliances.</li>
            <li><strong>Portable Electronics:</strong> SpinX® technology ensures that portable devices like smartphones, tablets, and laptops charge quickly and retain their battery life longer, providing users with more convenience and reliability.</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2 class="h3 mb-4">Sustainability and Environmental Impact</h2>
        <ul class="feature-list">
            <li><strong>Reduced Carbon Footprint:</strong> By lowering energy consumption and improving efficiency, SpinX® technology helps consumers reduce their carbon footprint, contributing to a cleaner and greener environment.</li>
            <li><strong>Recyclable Materials:</strong> SpinX® technology utilises eco-friendly and recyclable materials, supporting sustainable manufacturing practices and reducing electronic waste.</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2 class="h3 mb-4">Future-Proof Consumer Goods</h2>
        <ul class="feature-list">
            <li><strong>Scalable Solutions:</strong> SpinX® technology can be adapted to a wide range of consumer goods, from small portable devices to large home appliances, ensuring future-proof solutions for evolving consumer needs.</li>
            <li><strong>Innovative Features:</strong> With SpinX® technology, manufacturers can incorporate advanced features and functionalities into consumer products, setting new benchmarks for performance and energy efficiency.</li>
        </ul>
    </section>
</div>
<?php
include('../sections/opportunity.php');
include('../common/footer.php');
?>