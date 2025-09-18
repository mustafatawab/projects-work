<head>
    <?php include('../common/header.php');

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" as="image" href="https://cdn.prod.website-files.com/662a149b4386b0f86449eb42/6696dbd49d7f19c024dead10_739034897_60345381.webp">
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

        .section-image {
            border-radius: 20px;
            width: 400;
        }

        .b-image {
            background: linear-gradient(rgba(0, 0, 20, 0.5), rgba(0, 0, 20, 0.5)),
                url('../assets/automotive.webp') center/cover;
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
            <h1 class="display-2 text-white fw-bold page-title">Automotive</h1>
        </div>
    </div>
</header>

<div class="custom-container my-5">
    <h3 class="mb-4 text-start">Revolutionising automotive performance with SpinX® technology</h3>
    <p class="lead mb-5">SpinX® technology is set to transform the automotive industry by enhancing the efficiency, performance, and sustainability of electric and hybrid vehicles. Our innovative energy transfer solutions provide significant benefits across various aspects of automotive engineering and operations. </p>
    <section class="mb-5">
        <h2 class="h3 mb-4">Ultra-Fast Charging</h2>
        <ul class="feature-list">
            <li><strong>Rapid Energy Replenishment</strong>: SpinX® technology dramatically reduces charging times, enabling electric vehicles to charge from 0 to 100% in under 3 minutes. This rapid charging capability makes electric vehicles as convenient and practical as traditional fossil-fuel vehicles.</li>
            <li><strong>Improved Infrastructure Efficiency</strong>: By reducing the time electric vehicles spend at charging stations, SpinX®technology helps to alleviate congestion and improve the efficiency of charging infrastructure.</li>
        </ul>
    </section>
    <section class="mb-5">
        <h2 class="h3 mb-4">Enhanced Battery Capacity</h2>
        <ul class="feature-list">
            <li><strong>Increased Energy Density</strong>: SpinX® technology optimises the storage capacity of batteries, allowing electric vehicles to travel longer distances on a single charge. This improvement in energy density directly translates to extended driving ranges for electric vehicles
            </li>
            <li><strong>Extended Battery Life</strong>: By minimising energy dissipation and reducing operational heat, SpinX® technology extends the lifespan of vehicle batteries, reducing the need for frequent replacements and lowering maintenance costs.</li>
        </ul>
    </section>
    <section class="mb-5">
        <h2 class="h3 mb-4">Increased Responsiveness</h2>
        <ul class="feature-list">
            <li><strong>Instantaneous Power Delivery</strong>: SpinX® technology enhances the responsiveness of electric and hybrid vehicles by ensuring more efficient and immediate power delivery to the motor. This results in smoother acceleration and a more dynamic driving experience.</li>

            <li><strong>Optimised Performance</strong>: With improved energy transfer efficiency, vehicles equipped with SpinX® technology can achieve higher performance levels, providing drivers with a more engaging and enjoyable driving experience.</li>
        </ul>
    </section>
    <section class="mb-5">
        <h2 class="h3 mb-4">Enhanced Power Gain from Regenerative Braking</h2>
        <ul class="feature-list">
            <li><strong>Maximised Energy Recovery</strong>: SpinX® technology improves the efficiency of regenerative braking systems, allowing vehicles to recover and store more energy during braking. This recovered energy can be used to extend the driving range and improve overall efficiency.</li>
            <li><strong>Reduced Wear and Tear</strong>: By enhancing the efficiency of regenerative braking, SpinX® technology reduces the stress on mechanical braking components, leading to lower maintenance requirements and increased longevity of the braking system.</li>
        </ul>
    </section>
    <section class="mb-5">
        <h2 class="h3 mb-4">Sustainability and Environmental Impact</h2>
        <ul class="feature-list">
            <li><strong>Lower Emissions</strong>: By improving the efficiency of electric and hybrid vehicles, SpinX® technology contributes to lower greenhouse gas emissions, supporting global efforts to combat climate change.</li>
            <li><strong>Eco-Friendly Materials</strong>: SpinX® technology utilises environmentally friendly and recyclable materials, promoting sustainability and reducing the environmental footprint of automotive manufacturing and operations.</li>
        </ul>
    </section>
    <section class="mb-5">
        <h2 class="h3 mb-4">Future-Proofing Automotive Innovation</h2>
        <ul class="feature-list">
            <li><strong>Scalable Solutions</strong>: SpinX® technology is adaptable to various types of vehicles, from compact city cars to large commercial trucks. This scalability ensures that automotive manufacturers can future-proof their fleets with cutting-edge energy transfer solutions.</li>
            <li><strong>Driving Industry Standards</strong>: As the automotive industry continues to evolve, SpinX® technology sets new benchmarks for efficiency, performance, and sustainability, leading the way for future innovations in vehicle design and operation.</li>
        </ul>
    </section>
    <section class="my-5 text-start">


    <h2 class=" text-custom-color fw-bold">Technology In Action</h2>

    <img src="../assets/others/solar.webp" alt="Technology In Action" class=" section-image">

    <h3 style="max-width: 400px;" class="mt-3">Revolutionising Solar Panel Efficiency</h3>
    <p style="max-width: 400px;">Enhancing the power of solar panels in all weathers</p>


    <a href="#" class="text-decoration-none">Read More</a>
  </section>
</div>
<?php
include('../sections/opportunity.php');
include('../common/footer.php');
$content = ob_get_clean();
?>