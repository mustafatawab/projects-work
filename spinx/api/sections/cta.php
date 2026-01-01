<!DOCTYPE html>
<html>

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero-section2 {
      background-color: #0a192f;
      max-height: 400px;
      overflow: hidden;
    }

    .wave-animation {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 50%;
      opacity: 0.2;
      background-image: url("data:image/svg+xml,%3Csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3Cpattern id='waves' width='100' height='100' patternUnits='userSpaceOnUse'%3E%3Cpath d='M0 50 Q25 25, 50 50 T100 50' stroke='%2300ffff' fill='none' stroke-width='2'/%3E%3C/pattern%3E%3C/defs%3E%3Crect width='100%25' height='100%25' fill='url(%23waves)'/%3E%3C/svg%3E");
      animation: wave 10s linear infinite;
    }

    @keyframes wave {
      0% {
        transform: translateX(0) translateY(0);
      }

      100% {
        transform: translateX(-100px) translateY(-100px);
      }
    }

    .btn-custom {
      position: relative;
      transition: 0.5s;
    }

    .btn-custom .arrow {
      transition: opacity 0.3s ease, visibility 0s 0.3s;
      /* Smooth opacity transition */
      opacity: 1;
      visibility: visible;
    }

    .btn-custom:hover .arrow {
      opacity: 0;
      visibility: hidden;
    }

    .display-4 {
      font-size: 42px;
    }
  </style>
</head>

<body>
  <section class="hero-section2 position-relative d-flex align-items-center justify-content-center py-5">
    <div class="wave-animation"></div>
    <div class="container position-relative">
      <div class="text-center text-white px-3">
        <h5 class="display-4 mb-4 mx-auto fw-medium" style="max-width: 800px;">
          Join us in creating a more energy-efficient and environmentally sustainable future.
        </h5>

        <a href="#" class="btn btn-light btn-lg px-4 rounded-pill btn-custom">
          Get Started
          <span class="ms-2 bi bi-arrow-right-circle-fill border-0 arrow"></span>
        </a>
      </div>
    </div>
  </section>
</body>

</html>