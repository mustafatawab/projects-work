<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quantum Spin - Zero-Loss Energy Transfer</title>

  <!-- Favicon -->
  <?php
  $page = basename($_SERVER['PHP_SELF']);
  $iconPath = ($page == "index.php") ? "./assets/fav-icon.png" : "../assets/fav-icon.png";
  ?>
  <link rel="icon" type="image/x-icon" href="<?= $iconPath ?>">
  <?php
  $current_page = basename($_SERVER['PHP_SELF']); // Get the current page
  ?> <!-- Preload critical assets -->

  <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" as="style">
  <link rel="preload" href="assets/videos/video1.mp4" as="video" type="video/mp4" media="(min-width: 768px)">
  <?php
  $page = basename($_SERVER['PHP_SELF']);
  $stylepath = ($page == "index.php") ? "./assets/style.css?v=2" : "../assets/style.css?v=2";
  ?>
  <link rel="stylesheet" href="<?php echo $stylepath; ?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </noscript>

  <!-- Custom CSS -->
  <style>
    /* Navbar styling */
    .navbar {
      transition: background-color 0.3s ease;
    }

    .navbar.scrolled {
      background-color: #0a192f !important;
    }

    /* Handle mobile dropdown background */
    @media (max-width: 991.98px) {

      /* Mobile Navbar */
      .navbar-collapse {
        position: fixed;
        top: 0;
        left: -100%;
        /* Start off-screen to the left */
        height: 100vh;
        width: 250px;
        /* Adjust the width of the slide */
        background-color: #0a192f;
        padding: 1rem;
        border-radius: 8px;
        transition: left 0.3s ease;
        /* Transition for sliding effect */
      }

      /* Show the mobile menu when open */
      .navbar-collapse.open {
        left: 0;
      }

      .dropdown-menu {
        background-color: rgba(10, 25, 47, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.1);
      }

      .dropdown-item {
        color: white;
      }

      .dropdown-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
      }
    }

    /* Logo size adjustment */
    .logo {
      height: 50px;
      width: auto;
    }

    /* Show dropdown menu on hover */
    .dropdown:hover .dropdown-menu {
      display: block;
    }

    .dropdown-menu {
      display: none;
      opacity: 0;
      transition: opacity 0.5s;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
      opacity: 1;
    }

    /* Mobile Menu Button on the right side */
    .navbar-toggler {
      position: absolute;
      right: 15px;
      top: 15px;
      z-index: 10;
    }

    .nav-dropdown-link-line {
      background-color: #006daa;
      width: 25px;
      height: 2px;
      margin-right: 15px;
      display: inline-block;
    }

    .dropdown-item {
      color: #000000 !important;
    }

    .dropdown-item:hover {
      color: #006daa !important;
    }

    .drop-flex {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-left: 10px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <?php
      // Determine the current page name
      $page = basename($_SERVER['PHP_SELF']);
      $logoPath = ($page == "index.php") ? "./assets/logo.svg" : "../assets/logo.svg";
      ?>

      <!-- Navbar Brand -->
      <a class="navbar-brand" href="<?= ($page == "index.php") ? './index.php' : '../index.php' ?>">
        <img src="<?= $logoPath ?>" alt="Quantum Spin" class="logo" />
      </a>

      <!-- Mobile Menu Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="bi bi-list"></i> <!-- Custom icon using Bootstrap Icons -->
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- Home Link -->
          <li class="nav-item">
            <a class="nav-link" href="<?= ($page == "index.php") ? './index.php' : '../index.php' ?>">Home</a>
          </li>

          <!-- The Technology Link -->
          <li class="nav-item">
            <a class="nav-link" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './the-technology.php' : './pages/the-technology.php' ?>">The Technology</a>
          </li>

          <!-- Our Work Link -->
          <li class="nav-item">
            <a class="nav-link" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './our-work.php' : './pages/our-work.php' ?>">Our Work</a>
          </li>

          <!-- Sustainability Link -->
          <li class="nav-item">
            <a class="nav-link" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './sustainablity.php' : './pages/sustainablity.php' ?>">Sustainability</a>
          </li>

          <!-- Industries Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Industries
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './energy.php' : './pages/energy.php' ?>">Energy</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './techonology.php' : './pages/techonology.php' ?>">Technology</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './healthcare.php' : './pages/healthcare.php' ?>">Healthcare</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './commerical.php' : './pages/commerical.php' ?>">Commercial</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './military.php' : './pages/military.php' ?>">Military</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './consumergoods.php' : './pages/consumerGoods.php' ?>">Consumer Goods</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './manufacturing.php' : './pages/manufacturing.php' ?>">Manufacturing</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './automotive.php' : './pages/automotive.php' ?>">Automotive</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './research.php' : './pages/research.php' ?>">Research & Development</a></li>
            </ul>
          </li>

          <!-- About Us Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              About Us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './about-us.php' : './pages/about-us.php' ?>">About Us</a></li>
              <li><a class="dropdown-item" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './our-team.php' : './pages/our-team.php' ?>">Our Team</a></li>
            </ul>
          </li>

          <!-- Contact Us Button -->
          <li class="nav-item ms-3">
            <a class="btn btn-outline-light rounded-pill px-4" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? './contact-us.php' : './pages/contact-us.php' ?>">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script>
    // Scroll effect
    window.addEventListener("scroll", function() {
      const navbar = document.querySelector(".navbar");
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });

    // Add background color when mobile menu is opened
    document.addEventListener("DOMContentLoaded", function() {
      const navbarToggler = document.querySelector(".navbar-toggler");
      const navbarCollapse = document.querySelector(".navbar-collapse");

      navbarToggler.addEventListener("click", function() {
        navbarCollapse.classList.toggle("open");
        if (!navbarCollapse.classList.contains("scrolled")) {
          navbarCollapse.classList.add("scrolled");
        }
      });
    });

    //transition effect 

    document.addEventListener("DOMContentLoaded", function() {
      const sections = document.querySelectorAll(".section");

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("show");
            }
          });
        }, {
          threshold: 0.2
        } // Adjust visibility threshold
      );

      sections.forEach((section) => {
        observer.observe(section);
      });
    });
  </script>

</body>

</html>