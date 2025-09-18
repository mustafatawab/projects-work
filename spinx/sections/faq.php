<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ Section</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    </style>
</head>

<body>

    <div class="container mt-5" style="margin-top:7%; margin-bottom:7%">
        <div class=" row">
            <!-- Left Column (FAQ Title) -->
            <div class="col-md-3">
                <div class="faq-title">FAQ</div>
            </div>

            <!-- Right Column (FAQ Questions) -->
            <div class="col-md-9" style="background-color: #f6f7f9; padding: 30px; border-radius:30px">
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
                        <p style="font-size: 26px; max-width: 85%;">What are the main benefits of SpinX technology?
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

</body>

</html>