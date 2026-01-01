<footer class="footer">
  <?php
  $page = basename($_SERVER['PHP_SELF']);
  $ctaPath = ($page == "index.php") ? "./sections/cta.php" : "../sections/cta.php";
  if (basename($_SERVER['PHP_SELF']) !== 'partnership.php') {
    include($ctaPath);
  }
  ?>

  <div class="container ctn-padding-top pb-5">
    <div class="row">
      <!-- Logo and Description Column -->
      <div class="col-12 col-md-6 mb-4 mb-md-0">
        <?php
        $page = basename($_SERVER['PHP_SELF']);
        $logoPath = ($page == "index.php") ? "./assets/logo.svg" : "../assets/logo.svg";
        ?>
        <img src="<?= $logoPath ?>" alt="Quantum Spin" class="logo"  />
        <p class="mb-4 text-white ">
          Join us in revolutionising industries with our <br />
          SpinX® technology.
        </p>
        <a href="mailto:website.enquiry@quantumspin.uk" class="email-link">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-envelope"
            viewBox="0 0 16 16">
            <path
              d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
          </svg>
          website.enquiry@quantumspin.uk
        </a>
      </div>

      <!-- Useful Links Column -->
      <?php
      $page = basename($_SERVER['PHP_SELF']);
      $currentDir = dirname($_SERVER['PHP_SELF']);

      // Determine if we are in the `/pages/` directory
      $isInPagesDir = strpos($currentDir, '/pages') !== false;

      // Set the correct base path
      $basePath = $isInPagesDir ? "../" : "./";
      ?>

      <div class="col-12 col-md-3 mb-4 mb-md">
        <h5 class="mb-4">Useful Links</h5>
        <ul class="footer-links">
          <li><a href="<?= $basePath ?>pages/faqs.php">FAQ</a></li>
          <li><a href="<?= $basePath ?>pages/partnership.php">Partnerships</a></li>
          <li><a href="<?= $basePath ?>pages/investors.php">Investor Relations</a></li>
          <li><a href="<?= $basePath ?>pages/epgpolicy.php">ESG Policy</a></li>
          <li><a href="<?= $basePath ?>pages/privacypolicy.php">Privacy Policy</a></li>
          <li><a href="<?= $basePath ?>pages/cookiepolicy.php">Cookie Policy</a></li>
          <li><a href="<?= $basePath ?>pages/termsconditions.php">Terms & Conditions</a></li>
        </ul>
      </div>



      <!-- Follow Us Column -->
      <div class="col-12 col-md-3">
        <h5 class="mb-4">Follow Us</h5>
        <a href="#" class="text-white">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="currentColor"
            class="bi bi-linkedin"
            viewBox="0 0 16 16">
            <path
              d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
          </svg>
        </a>
      </div>
    </div>

    <!-- Copyright Section -->
    <div class="copyright">
      <div class="row">
        <div class="col-12">
          <p class="mb-2 text-white1">© Quantum Spin LTD 2024</p>
          <p class="mb-2 text-white1">
            Quantum Spin LTD: 13 Charles II Street, London, SW1Y 4QU
          </p>
          <p class="mb-0 text-white1">
            Registered in England & Wales No 15590854
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<style>
  /* Footer */
  .text-white1 {
    font-size: 1.0rem;
    color: #fff;
    font-weight: 500;
  }

  .footer {
    background-color: #061a40;
    color: white;
  }

  .footer-links {
    list-style: none;
    padding: 0;
  }

  .footer-links li {
    margin-bottom: 0.75rem;
  }

  .footer-links a {
    color: white;
    text-decoration: none;
  }

  .footer-links a:hover {
    text-decoration: underline;
  }

  .copyright {
    border-top: 1px solid rgba(255, 255, 255, 0.953);
    margin-top: 3rem;
    padding-top: 2rem;
  }

  .email-link {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 2rem;
  }

  .ctn-padding-top {
    padding-top: 6%;
  }
</style>