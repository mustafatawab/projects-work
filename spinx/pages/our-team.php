<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Section</title>
    <?php
    include('../common/header.php');
    ?>

    <style>
        /* Team Section Background */
        .team-section {
            text-align: center;
            padding: 120px 0;
            max-height: 400px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(rgba(0, 0, 20, 0.5), rgba(0, 0, 20, 0.5)),
                url('../assets/team/team.webp') center/cover;
        }

        .team-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
        }

        .team-button {
            background-color: #b3d6f5;
            color: #0c2340;
            font-size: 14px;
            border-radius: 20px;
            padding: 8px 18px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .team-button:hover {
            background-color: #89b9e8;
        }

        /* Team Cards Section - Below Background */
        .team-container {
            position: relative;
            padding-bottom: 60px;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            /* Ensures cards stay in one row */
            gap: 20px;
        }

        /* Individual Team Card */
        .team-card {
            text-align: left;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: white;
            transition: 0.3s ease-in-out;
            width: 22%;
            /* Four cards per row */
            min-width: 250px;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .team-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }

        .team-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 0px;
            color: #000000;
        }

        .team-role {
            font-size: 1.2rem;
            color: #555;
            font-weight: 400;
        }

        .team-description {
            font-size: 15px;
            color: #444;
            margin-top: 10px;
            font-weight: 400;
        }

        .team-social-links-wrapper {
            text-align: left;
            margin-top: 10px;
        }

        .team-social-icon {
            font-size: 25px;
            text-decoration: none;
            color: #0a66c2;
            transition: 0.3s;
            font-weight: bold;
        }

        .team-social-icon:hover {
            color: #004182;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .team-card {
                width: 45%;
                /* Two cards per row */
            }
        }

        @media (max-width: 768px) {
            .team-section {
                padding: 30px 0;
            }

            .team-title {
                font-size: 2rem;
            }

            .team-button {
                font-size: 12px;
                padding: 6px 14px;
            }

            .team-container {
                flex-wrap: wrap;
                /* Cards break into multiple rows for small screens */
                justify-content: center;
            }

            .team-card {
                width: 90%;
                /* Single card per row */
            }
        }

        /* Footer Fix */
        footer {
            position: relative;
            width: 100%;
            margin-top: 50px;
        }

        .container2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Team Section (Background Only) -->
    <section class="team-section">
        <div class="container">
            <h1 class="team-title mt-5">Our Team</h1>
        </div>
    </section>
    <div class="container2">
        <h1 class="team-title2 mt-5">Powering Charge</h1>
        <button class="team-button mt-4">
            <h4>Core Team</h4>
        </button>
    </div>
    <!-- Team Cards (Below Background) -->
    <div class="container team-container mt-5">
        <div class="team-card shadow-none">
            <img src="../assets/team/t1.jpg" alt="Adrian Eteen-Bliss">
            <p class="team-name">Adrian Eteen-Bliss</p>
            <p class="team-role">CEO and Co-Founder</p>
            <p class="team-description">Adrian has focused on delivering circular economy projects, energy efficiency solutions, and green bond investments for more than a decade. As a certified financial planner with extensive experience in commercial property investment and wealth management, Adrian has built a diverse network of investors and partners worldwide supporting our commercialisation and growth.</p>
            <div class="team-social-links-wrapper">
                <a href="https://www.linkedin.com/in/adrianbliss/" target="_blank" class="team-social-icon">in</a>
            </div>
        </div>

        <div class="team-card shadow-none">
            <img src="../assets/team/t2.jpg" alt="Omar Arti">
            <p class="team-name">Omar Arti</p>
            <p class="team-role">Co-Founder</p>
            <p class="team-description">With more than 30 years in Investment Banking, Omar manages Astinal Consulting, specialising in Private Capital and Project Finance. He began his career at J.P. Morgan, overseeing Securities Services for global asset managers. Later, Omar served as lead banker to Middle Eastern Sovereign Wealth Funds. Omar advises a fin-tech in embedded finance and a green tech fund.</p>
            <div class="team-social-links-wrapper">
                <a href="https://www.linkedin.com/in/omar-arti-039b22a8/" target="_blank" class="team-social-icon">in</a>
            </div>
        </div>

        <div class="team-card shadow-none">
            <img src="../assets/team/t3.jpg" alt="Craig Rochford">
            <p class="team-name">Craig Rochford</p>
            <p class="team-role">CTO and Co-Founder</p>
            <p class="team-description">Craig, a mechanical engineer with a Ph.D. in computational fluid dynamics, invented the Epipen 2 more than 20 years ago. With diverse experience across financial security, telecommunications and start-ups, Craig specialises in establishing venture capital for technology sectors like energy, telecoms, crypto currencies, and cyber protection. He also works as an engineering design consultant.</p>
            <div class="team-social-links-wrapper">
                <a href="https://www.linkedin.com/in/craig-rochford-656883109" target="_blank" class="team-social-icon">in</a>
            </div>
        </div>

        <div class="team-card shadow-none">
            <img src="../assets/team/t4.jpg" alt="Peter Coe">
            <p class="team-name">Peter Coe</p>
            <p class="team-role">COO</p>
            <p class="team-description">With more than 30 years experience in technology and operations, Peter integrates cutting-edge technologies to drive growth in businesses. Leading digital transformations and AI developments across industries, he enhances operational efficiencies and ensures technology strategies meet global standards, leveraging his extensive network and deep industry insights.</p>
            <div class="team-social-links-wrapper">
                <a href="https://www.linkedin.com/in/pecoe/" target="_blank" class="team-social-icon">in</a>
            </div>
        </div>
    </div>

    <?php include('../common/footer.php'); ?>


</body>

</html>