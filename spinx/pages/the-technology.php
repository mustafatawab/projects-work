<?php
include('../common/header.php');
?>


<style>
    .width-80 {
        background-color: var(--primary-color) !important;
    }

    .card-img-top {
        transition: transform 0.3s ease-in-out;
    }

    .overflow-hidden {
        border-radius: 20px;
    }

    .card-img-top:hover {
        transform: scale(1.1);
        /* Zoom in */
    }

    .video-right {
        padding-left: 12%;

    }

    .revo {
        border-radius: 10px;
        max-height: 40vh !important;
        width: 98% !important;
        margin-top: 5%;
        object-fit: cover;
    }

    .cls-left {
        padding: 5%
    }
</style>
<style>
    .process-content {
        padding: 20px;
    }

    .spin-text {
        font-size: 20px;
    }

    .process-image img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 8px;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 20, 0.5), rgba(0, 0, 20, 0.5)),
            url('../assets/tech/tech_background.webp') center/cover;
        max-height: 50vh;

    }

    /* .mb-4 {
          font-weight: bold;
      } */

    .text-custom-color{
        color: #061a40;
    }
</style>
<!-- Hero Section -->
<section class="hero-section d-flex align-items-center position-relative">
    <div class="hero-overlay"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-2 text-white fw-bold">The Technology</h1>
            </div>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="position-relative mb-5 rounded-start-5 rounded-end-5 width-80" style="transform: translateY(-30px);">
    <div>
        <div class="rounded-top-5 mb-5 p-3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="technology-image cls-left">
                        <img src='../assets/tech/revo.webp' alt="SpinX Technology" class="img-fluid revo"
                            loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cls-left">
                        <h2 class=" mt-5 mb-4"
                            style="font-size: clamp(1.125rem, 0.8086rem + 1.6875vw, 2.8125rem); font-weight: bold;">
                            Revolutionising Energy Transfer with SpinX® Technology</h2>
                        <p class="section-text mb-5">
                            At Quantum Spin, we have pioneered a groundbreaking advancement in energy transfer with our
                            patented SpinX® technology. Developed over 15 years of rigorous research and development,
                            SpinX® technology redefines the possibilities of how electricity is transmitted, stored, and
                            utilised, offering near-zero loss energy transfer in a variety of applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="bg-white p-3 row align-items-center justify-content-between">
            <div class="col-lg-5 col-12">
                <h2 class="mb-4 text-custom-color fw-bold">How SpinX® Technology Works</h2>
                <div class="py-3">
                    <p class="lead">SpinX® technology fundamentally transforms the way energy flows through conductors.
                        By leveraging the unique properties of electron spin in conductive materials such as copper and
                        aluminum, SpinX® significantly reduces energy dissipation and enhances conductivity, to create a
                        near-zero loss of electricity. This innovative approach is rooted in advanced quantum physics,
                        utilising the Pauli exclusion principle to maximise efficiency.</p>

                   
                    <p class="lead">  <b style="font-weight: bold;">Controlled Electron Manipulation:</b> At the core of SpinX® technology is the precise control of electron spin in
                        conductive materials. SpinX® technology organises electrons into a more efficient, aligned flow,
                        drastically reducing energy lost through dissipation, and ensuring more efficient energy
                        transfer.</p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div data-w-id="25ce49f1-e48c-4db5-a240-52837f28c31e"
                    style="opacity: 1;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);transform-style: preserve-3d;"
                    class="process-video-wrapper process-content">
                    <div data-poster-url="../../cdn.prod.website-files.com/662a149a4386b0f86449ea23%EA%A4%B7669d09df167e1479e930a6f6_Portrait%20Composition%20v2-poster-00001.jpg"
                        data-video-urls="https://cdn.prod.website-files.com/662a149a4386b0f86449ea23%2F669d09df167e1479e930a6f6_Portrait%20Composition%20v2-transcode.mp4,https://cdn.prod.website-files.com/662a149a4386b0f86449ea23%2F669d09df167e1479e930a6f6_Portrait%20Composition%20v2-transcode.webm"
                        data-autoplay="true" data-loop="true" data-wf-ignore="true"
                        class="process-video w-background-video w-background-video-atom video-right"><video
                            id="264c9253-7003-1fbc-e173-6d49eebd5adf-video" autoplay="" loop=""
                            style="background-image:url(../../cdn.prod.website-files.com/662a149a4386b0f86449ea23%EA%A4%B7669d09df167e1479e930a6f6_Portrait%20Composition%20v2-poster-00001.jpg)"
                            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source
                                src="https://cdn.prod.website-files.com/662a149a4386b0f86449ea23%2F669d09df167e1479e930a6f6_Portrait%20Composition%20v2-transcode.mp4"
                                data-wf-ignore="true">
                            <source
                                src="https://cdn.prod.website-files.com/662a149a4386b0f86449ea23%2F669d09df167e1479e930a6f6_Portrait%20Composition%20v2-transcode.webm"
                                data-wf-ignore="true">
                        </video></div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="bg-white p-4 rounded shadow-sm">
                    <img src="../assets/others/diagram.png" alt="Conductor Diagram" class="img-fluid" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6">

                <p class="mb-4"> <b>Specialised Conductor Coating:</b> Through a specialist coating on conductors SpinX®
                    can facilitate the alignment of electron spin. This coating can be applied to various conductor
                    materials without altering their inherent properties.</p>


                <p> <b>Minimised Energy Dissipation:</b> By directing the flow of electrons, SpinX® creates an energy
                    transfer system that operates with minimal resistance, reduces dissipation, and improves overall
                    energy efficiency.</p>
                <!-- style="font-size: clamp(1.125rem, 1.043rem + 0.4375vw, 1.5625rem); line-height: 2;" -->
            </div>
        </div>
    </div>
</section>
<div class="container py-5">
    <div class="row align-items-center justify-content-between">
        <!-- Content Section -->
        <div class="col-lg-6">
            <div class="process-content">
                <h3 class="fw-bold mb-5 text-custom-color">Key Benefits of SpinX® Technology</h3>
                <div class="spin-text">SpinX® technology has undergone rigorous testing and validation by premier
                    research institutions, including the University of Turku and VTT Technical Research Centre of
                    Finland. The results from testing demonstrate significant advancements in energy use including:
                </div><br><br>
                <ul class=" spin-text">
                    <li><strong>Ultra-Fast Charging:</strong> SpinX® technology dramatically reduces charging times for
                        batteries and electronic devices, reducing the typical hours-long process to just minutes.
                        Electric vehicles, for example, can be charged from completely flat to 100% in under three
                        minutes, and mobile devices can be fully charged even quicker.</li><br>
                    <li><strong>Extended Battery Lifespan:</strong> By reducing the stress and heat associated with
                        charging, SpinX® technology extends the lifespan of batteries by up to three times, ensuring
                        longer-lasting performance. It also helps rejuvenate degraded batteries, restoring their
                        capacity and performance.</li><br>
                    <li><strong>Enhanced Energy Efficiency:</strong> SpinX® technology can achieve nearly 100% energy
                        efficiency during energy transfer, eliminating the typical 50-60% energy loss in conventional
                        energy transfer methods.</li><br>
                    <li><strong>Reduced Operational Heat:</strong> Lower operational temperatures enhance the reliability
                        and safety of electronic systems, preventing overheating and extending the lifespan of
                        components.</li>
                </ul>
            </div>
        </div>
        <!-- Image Section -->
        <div class="col-lg-5">
            <div class="process-image">
                <img src="../assets/tech/graph.webp" alt="Businessman using computer with graph growth analysis"
                    class="img-fluid">
            </div>
        </div>
    </div>
</div>


<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h2 class="fw-bold text-custom-color">Our Technology In Action</h2>
            <a href="#" class="btn btn-dark rounded-pill btn-sm px-3 py-2 px-sm-3 py-sm-2">
                Discover More
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg>
            </a>
        </div>


        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 shadow-none">
                    <div class="overflow-hidden" style="height: 250px;">
                        <img src="../assets/others/solar.webp" class="card-img-top h-100 object-fit-cover"
                            alt="Solar Panel" loading="lazy">
                    </div>
                    <div class="card-body">
                        <h3 class="h4 fw-bold text-dark">Revolutionising Solar Panel Efficiency</h3>
                        <p class="card-text">Enhancing the power of solar panels in all weathers</p>
                        <a href="#" class="text-primary text-decoration-none fw-medium">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 shadow-none">
                    <div class="overflow-hidden" style="height: 250px;">
                        <img src="../assets/others/car.webp" class="card-img-top h-100 object-fit-cover"
                            alt="EV Charging">
                    </div>
                    <div class="card-body">
                        <h3 class="h4 fw-bold text-dark">Pioneering Rapid Charging, Extended Capacity and Battery
                            Rejuvenation</h3>
                        <p class="card-text">Delivering ultra-rapid charging for EVs</p>
                        <a href="#" class="text-primary text-decoration-none fw-medium">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 shadow-none">
                    <div class="overflow-hidden" style="height: 250px;">
                        <img src="../assets/others/repair.webp" class="card-img-top h-100 object-fit-cover"
                            alt="Mobile Battery Repair" loading="lazy">
                    </div>
                    <div class="card-body">
                        <h3 class="h4 fw-bold text-dark">Repairing Mobile Batteries</h3>
                        <p class="card-text">Bringing laptop and mobile phone batteries back into use</p>
                        <a href="#" class="text-primary text-decoration-none fw-medium">Read More</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: var(--primary-color) ">


<div class="container py-5 ">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="rounded overflow-hidden">
                <img src="../assets/others/forest.webp" alt="Sustainability Image"
                    class="img-fluid w-100 object-fit-cover" loading="lazy">
            </div>
        </div>
        <div class="col-lg-5">
            <h3 class=" mb-4 text-custom-color fw-bold">Commitment to Sustainability</h3>
            <p class="lead mb-4">
                SpinX® technology is designed with sustainability at its core.
                By significantly improving energy efficiency, it reduces the
                energy consumption and carbon footprint of the energy
                systems where it is used. Additionally, the materials used in
                SpinX® technology are environmentally friendly and
                recyclable, promoting a greener, more sustainable future.
            </p>
            <!-- <a href="#" class="btn btn-primary rounded-pill px-4 py-2">
                  Discover more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg>
              </a> -->
            <a href="#" class="btn btn-dark rounded-pill px-4 py-2">
                Discover More
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg>
            </a>
        </div>
    </div>
</div>
</section>


<section class="py-5">
    <div class="container text-center">
        <h2 class="text-custom-color fw-bold">Future-Proof Energy Solutions</h2>
        <p class="lead">As global energy demands continue to rise, SpinX® technology offers a future-proof solution that can adapt to evolving needs. Whether enhancing existing systems or developing new energy infrastructures, it provides a scalable and reliable foundation for the energy solutions of tomorrow.</p>
    </div>

</section>
<?php
include('../common/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function createElectrons(gridId, organized = false) {
        const grid = document.getElementById(gridId);
        const electronCount = organized ? 48 : 24;

        for (let i = 0; i < electronCount; i++) {
            const electron = document.createElement('div');
            electron.className = 'position-absolute rounded-circle d-flex align-items-center justify-content-center bg-primary bg-opacity-25';
            electron.style.width = '30px';
            electron.style.height = '30px';
            electron.style.transition = 'all 0.3s ease';

            const electronText = document.createElement('span');
            electronText.textContent = 'e';
            electronText.style.fontStyle = 'italic';
            electronText.style.color = '#4169E1';
            electronText.style.fontSize = '14px';
            electron.appendChild(electronText);

            if (organized) {
                const row = Math.floor(i / 8);
                const col = i % 8;
                electron.style.left = `${col * 12.5}%`;
                electron.style.top = `${row * 16.666}%`;
            } else {
                electron.style.left = `${Math.random() * 80}%`;
                electron.style.top = `${Math.random() * 80}%`;
            }

            grid.appendChild(electron);
        }
    }

    window.addEventListener('load', () => {
        createElectrons('grid1', false);
        createElectrons('grid2', true);
    });
</script>