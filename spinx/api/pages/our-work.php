<head>
    <?php
    include('../common/header.php');

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpinX® Research & Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .tags-container {
            text-align: center;
            margin-top: 30px;
        }

        .tag {
            background-color: #b0d0eb;
            color: #006daa;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 1rem;
            margin: 5px;
            display: inline-block;
            cursor: pointer;
            border: none;
            font-weight: 600;
        }

        .tag.active {
            background-color: #006daa !important;
            color: white;
        }

        .content-section {
            display: none;
            text-align: center;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .content-section.active {
            display: block;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #5a5a5a;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .feature-box {
            text-align: center;
            padding: 20px;
        }

        .feature-icon {
            padding: 20px;
            width: 80px;
            height: 80px;
            background-color: #0a2240;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin: 0 auto 10px;
        }

        .feature-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #0a2240;
        }

        .feature-text {
            font-size: 1rem;
            color: #5a5a5a;
        }

        .tags-container {
            text-align: center;
            margin-top: 30px;
        }

        .tag {
            background-color: #e0e8f0;
            color: #0a2240;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin: 5px;
            display: inline-block;
            cursor: pointer;
        }

        .tag.active {
            background-color: #0a2240;
            color: white;
        }

        .collaborative-section {
            text-align: center;
            padding: 50px 20px;
        }

        .top-section {
            display: flex;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            width: 100%;
            height: 70%;

        }

        .work-section {
            display: flex;
            align-items: center;
            background-image: linear-gradient(#23232380, #23232380);
            position: absolute;
            inset: 0%;
            height: 50vh;
        }

        .title-sec {
            max-width: 740px;
            margin-top: 10%;

        }

        .dis-flex {
            text-align: -webkit-center;
        }

        .image-cover {
            object-fit: cover;
            width: 100%;
            height: 50vh;
        }


        .text-custom-color {
            color: #061a40;
        }
    </style>

</head>
<!-- Research Section -->
<section>
    <img class="image-cover" src="../assets/ourwork/work-back.webp" alt="">
    <div class="top-section work-section page-title">Our Work</div>
    <div class="container dis-flex">
        <h2 class=" title-sec fw-bold text-custom-color mb-4">Driving Innovation Through Rigorous Research And
            Development</h2>
        <p class="section-subtitle">
            At Quantum Spin, our groundbreaking SpinX® technology is the result of extensive research and collaboration
            with top experts.
        </p>
        <p class="section-subtitle">
            Explore our detailed research to understand the scientific principles and transformative results behind
            SpinX® technology. These studies reflect our mission to revolutionize energy transfer with unmatched
            efficiency and sustainability.
        </p>

        <div class="row text-center mt-5">
            <!-- Feature 1 -->
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="../assets/ourwork/energy.svg" alt="">
                    </div>
                    <h4 class="feature-title">Energy Efficiency</h4>
                    <p class="feature-text">
                        Investigating ways to maximise energy transfer efficiency and minimise losses in conductive
                        materials.
                    </p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="../assets/ourwork/industrial.svg" alt="">
                    </div>
                    <h4 class="feature-title">Industrial Applications</h4>
                    <p class="feature-text">
                        Assessing the performance of SpinX® technology across diverse industries, from automotive and
                        solar energy to medical devices and telecommunications.
                    </p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="../assets/ourwork/sustainability.svg" alt="">
                    </div>
                    <h4 class="feature-title">Sustainability</h4>
                    <p class="feature-text">
                        Evaluating the environmental benefits of SpinX® technology, including reduced greenhouse gas
                        emissions and the use of recyclable materials.
                    </p>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="../assets/ourwork/battery.svg" alt="">
                    </div>
                    <h4 class="feature-title">Battery Technology</h4>
                    <p class="feature-text">
                        Exploring the impact of SpinX® on battery health, charging times, and lifespan enhancement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tags Section -->
<section class="tags-container">
    <div class="tags-container d-flex flex-wrap align-items-center justify-content-center">
        <button class="tag active" data-section="all-projects">All Projects</button>
        <button class="tag" data-section="technology">Technology</button>
        <button class="tag" data-section="commercial">Commercial</button>
        <button class="tag" data-section="energy">Energy</button>
        <button class="tag" data-section="consumer">Consumer</button>
        <button class="tag" data-section="medical">Medical</button>
        <button class="tag" data-section="research">Research & Development</button>
        <button class="tag" data-section="military">Military</button>
    </div>
    <!-- Content Sections -->
    <div class="container">
        <div id="all-projects" class="content-section active shadow-none">
            <div class="row ">

                <div class="col-lg-4 col-md-5 col-12">
                    <div class="text-start">

                        <img class="rounded-4 img-fluid"
                            src="https://spinx.tech/_site/cdn.prod.website-files.com/662a149b4386b0f86449eb42/6696dbb59c5682522aa36596_340587673-p-500.webp" />
                        <h4 class=" fw-bold text-custom-color mt-2 text-start">SpinX® Reduces Costs for Bitcoin Mining
                            Data Centre</h4>
                        <a href="#" class="text-decoration-none">Technology</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-5 col-12">
                    <div class="text-start">

                        <img class="rounded-4 img-fluid"
                            src="https://spinx.tech/_site/cdn.prod.website-files.com/662a149b4386b0f86449eb42/6696db7a959ad410466ae854_Solar_Unsplashed-p-500.webp" />
                        <h4 class=" fw-bold text-custom-color mt-2 text-start">Revolutionising Solar Panel Efficiency
                        </h4>
                        <a href="#" class="text-decoration-none">Energy</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-12">
                    <div class="text-start">

                        <img class="rounded-4 img-fluid"
                            src="https://spinx.tech/_site/cdn.prod.website-files.com/662a149b4386b0f86449eb42/6696db8f765d35104192c0e8_628403454-p-500.webp" />
                        <h4 class=" fw-bold text-custom-color mt-2 text-start">Pioneering Rapid Charging, Extended
                            Capacity
                            and Battery Rejuvenation</h4>
                        <a href="#" class="text-decoration-none">Automotive</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-12">
                    <div class="text-start">

                        <img class="rounded-4 img-fluid"
                            src="https://spinx.tech/_site/cdn.prod.website-files.com/662a149b4386b0f86449eb42/6696dba5b6e198c81c00a074_107500164-p-800.webp" />
                        <h4 class=" fw-bold text-custom-color mt-2 text-start">Repairing Mobile Batteries</h4>
                        <a href="#" class="text-decoration-none">Consumer Goods</a>
                    </div>
                </div>

        </div>
    </div>
    <div id="technology" class="content-section shadow-none">
        <div class="container">

            <div class="row ">

                <div class="col-4 col-md-5 col-12">
                    <div class="text-start">

                        <img class="rounded-4 img-fluid"
                            src="https://spinx.tech/_site/cdn.prod.website-files.com/662a149b4386b0f86449eb42/6696dbb59c5682522aa36596_340587673-p-500.webp" />
                        <h4 class=" fw-bold text-custom-color mt-2 text-start">SpinX® Reduces Costs for Bitcoin Mining
                            Data Centre</h4>
                        <a href="#" class="text-decoration-none">Technology</a>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <div id="commercial" class="content-section shadow-none">
        <h2>Commercial</h2>
        <p>Developing business-friendly innovations.</p>
    </div>
    <div id="energy" class="content-section shadow-none">
        <div class="container">
            <div class="row ">



                <div class="col-lg-4 col-md-5 col-12">
                    <div class="text-start">

                        <img class="rounded-4 img-fluid"
                            src="https://spinx.tech/_site/cdn.prod.website-files.com/662a149b4386b0f86449eb42/6696db7a959ad410466ae854_Solar_Unsplashed-p-500.webp" />
                        <h4 class=" fw-bold text-custom-color mt-2 text-start">Revolutionising Solar Panel Efficiency
                        </h4>
                        <a href="#" class="text-decoration-none">Energy</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div id="consumer" class="content-section shadow-none">
    <div class="container">
            <div class="row ">



                <div class="col-lg-4 col-md-5 col-12">
                    <div class="text-start">

                        <img class="rounded-4 img-fluid"
                            src="https://spinx.tech/_site/cdn.prod.website-files.com/662a149b4386b0f86449eb42/6696dba5b6e198c81c00a074_107500164-p-800.webp" />
                        <h4 class=" fw-bold text-custom-color mt-2 text-start">Repairing Mobile Batteries</h4>
                        <a href="#" class="text-decoration-none">Consumer Goods</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div id="medical" class="content-section shadow-none">
        <h2>Medical</h2>
        <p>Revolutionizing healthcare through advanced research.</p>
    </div>
    <div id="research" class="content-section shadow-none">
        <h2>Research & Development</h2>
        <p>Continuously pushing the boundaries of innovation.</p>
    </div>
    <div id="military" class="content-section shadow-none">
        <h2>Military</h2>
        <p>Enhancing defense technology for security and resilience.</p>
    </div>
    </div>

</section>
<!-- Collaborative Efforts Section -->
<section class="collaborative-section mt-5">
    <h2 class="section-title text-custom-color fw-bold">Collaborative Efforts</h2>
    <p class="section-subtitle">
        Our research studies are conducted in collaboration with prestigious universities, research centres, and
        industry partners. These collaborations ensure that our findings are robust, reliable, and relevant, driving the
        continuous improvement and real-world application of SpinX® technology.
    </p>
</section>
<?php include('../common/footer.php'); ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".tag");
        const sections = document.querySelectorAll(".content-section");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                // Remove active class from all buttons
                buttons.forEach(btn => btn.classList.remove("active"));
                // Add active class to clicked button
                this.classList.add("active");

                // Hide all sections
                sections.forEach(section => section.classList.remove("active"));

                // Show the selected section
                const sectionId = this.getAttribute("data-section");
                document.getElementById(sectionId).classList.add("active");
            });
        });
    });
</script>