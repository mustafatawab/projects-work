<head>
    <?php
    include('../common/header.php');
    ?>
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

        .b-image {
            background: linear-gradient(rgba(0, 0, 20, 0.5), rgba(0, 0, 20, 0.5)),
                url('../assets/faqsbg.webp') center/cover;
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

        .heading {
            background-color: #ffff;
            font-weight: bolder;
        }
    </style>
</head>
<header class="text-center b-image mb-5">
    <div class="container position-relative d-flex align-items-center justify-content-center">
        <div class="col-12 text-center mb-5">
            <h1 class="display-2 text-white fw-bold">Frequently Asked Questions
            </h1>
        </div>
    </div>
</header>

<div class="container mt-5" style="margin-top:7%; margin-bottom:7%">
    <div class=" row">
        <div class="heading mb-5">
            <h1>General Questions</h1>
        </div>
        <div class="col-md-12" style="background-color: #f6f7f9; padding: 30px; border-radius:30px">
            <!-- Question 1 -->

            <div class="faq-item">
                <button class="faq-button" onclick="toggleFAQ(this)">
                    <p style="font-size: 26px; max-width: 85%;">
                        What is SpinX technology
                    </p>
                    <div class="arrow-btn"><span>&rarr;</span></div>
                </button>
                <div class="faq-content">
                    SpinX® technology is a revolutionary energy transfer solution developed by Quantum Spin. It leverages the unique properties of electron spin to achieve near-zero energy loss in conductive materials like copper and aluminium, significantly improving efficiency and performance across various applications.
                </div>
            </div>
            <!-- Question 2 -->
            <div class="faq-item">
                <button class="faq-button" onclick="toggleFAQ(this)">
                    <p style="font-size: 26px; max-width: 85%;">
                        How does SpinX technology work?
                    </p>
                    <div class="arrow-btn"><span>&rarr;</span></div>
                </button>
                <div class="faq-content">
                    SpinX® technology works by aligning the spin of electrons in conductive materials, reducing energy dissipation and heat generation. This is achieved through a specialised coating applied to the conductors, enabling almost lossless energy transfer.
                </div>
            </div>

            <!-- Question 3 -->
            <div class="faq-item">
                <button class="faq-button" onclick="toggleFAQ(this)">
                    <p style="font-size: 26px; max-width: 85%;">
                        What are the main benefits of SpinX technology?
                    </p>
                    <div class="arrow-btn"><span>&rarr;</span></div>
                </button>
                <div class="faq-content">
                    The main benefits of SpinX® technology include ultra-fast charging, extended battery life, improved energy efficiency, reduced operational heat, and enhanced reliability and performance in various applications such as electric vehicles, solar panels, medical devices and more.
                </div>
            </div>

            <!-- Question 4 -->
            <div class="faq-item">
                <button class="faq-button" onclick="toggleFAQ(this)">
                    <p style="font-size: 26px; max-width: 85%;">
                        What industries can benefit from SpinX technology?
                    </p>
                    <div class="arrow-btn"><span>&rarr;</span></div>
                </button>
                <div class="faq-content">
                    SpinX® technology can benefit a wide range of industries including automotive, solar energy, medical, technology, military, and has benefits for heating, ventilation and air conditioning. Each industry can leverage SpinX® technology to enhance efficiency, reliability, and sustainability in their operations.
                </div>
            </div>

            <!-- Question 5 -->
            <div class="faq-item">
                <button class="faq-button" onclick="toggleFAQ(this)">
                    <p style="font-size: 26px; max-width: 85%;">
                        Is SpinX technology environmentally friendly?
                    </p>
                    <div class="arrow-btn"><span>&rarr;</span></div>
                </button>
                <div class="faq-content">
                    Yes, SpinX® technology is designed with sustainability in mind. It uses recyclable and environmentally friendly materials, reduces energy consumption, and lowers greenhouse gas emissions, promoting a cleaner and more sustainable environment.
                </div>
            </div>
        </div>
        <div class=" row  mb-5">
            <div class="heading mt-5">
                <h1>Technology and Performance</h1>
            </div>
            <div class="col-md-12" style="background-color: #f6f7f9; padding: 30px; border-radius:30px">
                <!-- Question 1 -->

                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            How does SpinX® technology improve battery life?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        SpinX® technology reduces the stress and heat associated with charging, thereby extending the lifespan of batteries by up to three times. It also helps in rejuvenating degraded batteries, restoring their capacity and performance.
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            Can SpinX® technology be retrofitted into existing systems?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        Yes, SpinX® technology can be integrated into both new and existing systems. The specialised coating can be applied to current conductive materials, enhancing their performance without the need for significant modifications.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            What is the typical charging time for devices using SpinX® technology?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        Devices using SpinX® technology can experience drastically reduced charging times. For example, electric vehicles could be charged from 0 to 100% in under 3 minutes, and mobile devices could be fully charged in just a few minutes.
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            How does SpinX® technology enhance solar panel efficiency?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        SpinX® technology improves the energy transfer efficiency of solar panels, increasing their peak energy yield by 3-6% and overall energy production by 10-15%. It also enhances performance in low light and cloudy conditions.
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            What are the temperature benefits of using SpinX® technology?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        SpinX® technology significantly reduces operational heat, decreasing the temperature of components and systems. This leads to improved reliability, extended lifespan of equipment, and reduced cooling requirements.
                    </div>
                </div>
            </div>
        </div>
        <div class=" row  mb-5">
            <div class="heading mt-5 mb-5">
                <h1>Applications and Use Cases</h1>
            </div>
            <div class="col-md-12" style="background-color: #f6f7f9; padding: 30px; border-radius:30px">
                <!-- Question 1 -->

                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            How can SpinX® technology benefit electric vehicles?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        SpinX® technology can enhance electric vehicles by reducing charging times, extending battery range and lifespan, improving safety and reliability, and optimising energy efficiency, making EVs more practical and efficient for everyday use.
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            How does SpinX® technology improve the performance of data centres?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        By minimising energy loss and reducing heat generation, SpinX® technology enhances data centre efficiency, leading to lower energy consumption, reduced cooling costs, and increased server reliability and uptime.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            What advantages does SpinX® technology offer for medical devices?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        SpinX technology improves the accuracy and reliability of medical devices by reducing signal noise and ensuring stable power supply. It also extends battery life and enables faster charging of portable medical equipment.
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            Can SpinX® technology be used in telecommunications?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        Yes, SpinX® technology can enhance telecommunications by improving signal quality, reducing noise, and ensuring efficient power distribution across network infrastructure, leading to clearer communication and more reliable networks.
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            How does SpinX® technology support military applications?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        SpinX® technology provides robust, reliable energy solutions for military applications, including drones, portable power units, and communication systems. It ensures efficient energy transfer, reduces operational heat, and enhances the performance and durability of critical equipment.
                    </div>
                </div>
            </div>
        </div>
        <div class=" row  mb-5">
            <div class="heading mt-5 mb-5">
                <h1>Investment and Business</h1>
            </div>
            <div class="col-md-12" style="background-color: #f6f7f9; padding: 30px; border-radius:30px">
                <!-- Question 1 -->

                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            How can I invest in Quantum Spin and SpinX® technology?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        For investment opportunities, please visit our Investor Relations page or contact us directly to discuss how you can be part of our journey in revolutionising energy transfer technology.
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            What are the financial benefits of using SpinX® technology?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        SpinX® technology offers substantial cost savings through reduced energy consumption, lower operational and maintenance costs, and extended lifespan of equipment. These benefits translate to higher efficiency and profitability for businesses.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            How do I become a partner or distributor of SpinX® technology?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        To explore partnership or distribution opportunities, please reach out to our business development team via our
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            What support and services does Quantum Spin provide?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        Quantum Spin offers comprehensive support and services, including technical assistance, integration support, and customised solutions tailored to meet the specific needs of our clients and partners.
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="faq-item">
                    <button class="faq-button" onclick="toggleFAQ(this)">
                        <p style="font-size: 26px; max-width: 85%;">
                            Where can I find more detailed technical specifications for SpinX® technology?
                        </p>
                        <div class="arrow-btn"><span>&rarr;</span></div>
                    </button>
                    <div class="faq-content">
                        Detailed technical specifications for SpinX® technology and its applications can be found on our Products and Solutions page. For further inquiries, you can also contact our technical support team.
                    </div>
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
<?php
include('../common/footer.php');


$content = ob_get_clean();
?>