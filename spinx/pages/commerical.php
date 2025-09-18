<head>
    <?php
    include('../common/header.php');
    ?>

    <head>
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

            .lead {
                font-size: 1.1rem !important;
                color: #000000;
            }

            h2 {
                color: #1a2a4a;
                font-weight: 600 !important;
                margin-top: 3rem !important;
            }

            .b-image {
                background: linear-gradient(rgba(0, 0, 20, 0.5), rgba(0, 0, 20, 0.5)),
                    url('../assets/commercial.jpeg') center/cover;
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
                <h1 class="display-2 text-white fw-bold page-title">Commercial
                </h1>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="custom-container my-5">
        <h3 class="mb-4 text-start">Revolutionising Air-Conditioning, Heating, and Cooling with Near-Zero Loss Energy Transfer</h3>

        <p class="lead mb-5">
            SpinX® technology from Quantum Spin brings transformative advancements to heat pump systems, significantly enhancing their efficiency, reliability, and sustainability. By integrating SpinX® into air-conditioning, heating, and cooling systems, we deliver substantial benefits across various applications.
        </p>

        <section class="mb-5">
            <h2 class="h3 mb-4">Improved Energy Efficiency</h2>
            <ul class="feature-list">
                <li><strong>Near Zero Energy Loss:</strong> SpinX® technology minimises energy loss during transfer, ensuring that more energy is effectively used for heating and cooling. This results in considerable improvements in system efficiency.</li>
                <li><strong>Reduced Operational Costs:</strong> Increased energy efficiency translates to lower electricity consumption, cutting down operational costs for both residential and commercial users.</li>
            </ul>
        </section>

        <section class="mb-5">
            <h2 class="h3 mb-4">Enhanced Performance and Reliability</h2>
            <ul class="feature-list">
                <li><strong>Stable Power Supply:</strong> SpinX® technology provides a stable and consistent power supply to heat pump systems, ensuring reliable performance even under varying load conditions.</li>
                <li><strong>Reduced Heat Generation:</strong> Lower operational temperatures decrease the stress on system components, enhancing their durability and extending the lifespan of air conditioning, heating, and ventilation systems.</li>
            </ul>
        </section>

        <section class="mb-5">
            <h2 class="h3 mb-4">Faster Response Times</h2>
            <ul class="feature-list">
                <li><strong>Rapid Temperature Adjustment:</strong> SpinX® technology enables quicker response times for heating and cooling adjustments, improving user comfort and system performance.</li>
                <li><strong>Optimised Heat Transfer:</strong> Enhanced energy transfer efficiency means that heat pumps can more quickly and effectively reach the desired temperature settings.</li>
            </ul>
        </section>

        <section class="mb-5">
            <h2 class="h3 mb-4">Sustainability and Environmental Impact</h2>
            <ul class="feature-list">
                <li><strong>Eco-Friendly Materials:</strong> SpinX® technology uses recyclable and environmentally friendly materials, promoting sustainability and reducing the environmental footprint.</li>
                <li><strong>Lower Emissions:</strong> Improved energy efficiency leads to reduced greenhouse gas emissions, contributing to a cleaner and more sustainable environment.</li>
            </ul>
        </section>

        <section class="mb-5">
            <h2 class="h3 mb-4">Application Versatility</h2>
            <ul class="feature-list">
                <li><strong>Residential and Commercial Use:</strong> SpinX®-enhanced heat pumps are suitable for a wide range of applications from home air-conditioning systems to large-scale commercial heating and cooling installations.</li>
                <li><strong>Adaptability:</strong> SpinX® technology can be integrated into both new heat pump systems and retrofitted into existing ones, providing flexibility for various installation scenarios.</li>
            </ul>
        </section>

        <section class="mb-5">
            <h2 class="h3 mb-4">Enhanced User Experience</h2>
            <ul class="feature-list">
                <li><strong>Quieter Operation:</strong> Reduced energy loss and lower operational heat contribute to quieter operations, enhancing comfort in residential and commercial environments.</li>
                <li><strong>Consistent Comfort:</strong> With improved efficiency and faster response times, SpinX® technology ensures consistent and reliable indoor climate control, providing optimal comfort for users.</li>
            </ul>
        </section>
    </div>



    </div>
    <?php
    include('../sections/opportunity.php');
    include('../common/footer.php');   ?>