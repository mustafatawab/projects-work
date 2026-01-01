<style>
  .base-container-op {
    align-items: start;
  }


  
</style>
<?php
// Determine the current page name
$page = basename($_SERVER['PHP_SELF']);
$assets = ($page == "index.php") ? "./assets" : "../assets";
?>
<div class="base-container-op container">
  <div>
    <h2 class="section-title">Market Opportunities</h2>
    <?php
    if (basename($_SERVER['PHP_SELF']) === 'index.php') {
    ?>
      <p>SpinX technology's versatility allows it to be seamlessly integrated into a wide range of applications, delivering transformative benefits across various sectors:</p>
    <?php
    }
    ?>
  </div>
  <div class="container">
  <div class="row g-3">
    <!-- Energy Card -->
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card rounded-4">
        <div class="market-card-head">
          <div class="icon-wrapper">
            <img
              alt="Image Services"
              loading="lazy"
              src="<?php echo $assets . '/opportunities/energy-light.svg'; ?>" class="icon-industries" />
          </div>
          <h3 class="title">Energy</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Transforming technological advancements with near-zero loss energy transfer</p>
        </div>
      </div>
    </div>

    <!-- Technology Card -->
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card rounded-4">
        <div class="market-card-head">
          <div class="icon-wrapper">
            <img
              alt="Image Services"
              loading="lazy"
              src="<?php echo $assets . '/opportunities/technology_Light.svg' ?>"
              class="icon-industries" />
          </div>
          <h3 class="title">Technology</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Revolutionising healthcare with near-zero loss energy transfer</p>
        </div>
      </div>
    </div>

    <!-- Healthcare Card -->
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card rounded-4">
        <div class="market-card-head">
          <div class="icon-wrapper">
            <img
              loading="lazy"
              alt="Image Services"
              src="<?php echo $assets . '/opportunities/medical_Light.svg' ?>"
              class="icon-industries" />
          </div>
          <h3 class="title">Healthcare</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Revolutionising healthcare with near-zero loss energy transfer</p>
        </div>
      </div>
    </div>

    <!-- Commercial Card -->
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card rounded-4">
        <div class="market-card-head">
          <div class="icon-wrapper">
            <img
              alt="Image Services"
              loading="lazy"
              src="<?php echo $assets . '/opportunities/finance.svg' ?>"
              class="icon-industries" />
          </div>
          <h3 class="title">Commercial</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Revolutionising air-conditioning, heating, and cooling with near-zero loss energy transfer</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card rounded-4">
        <div class="market-card-head">
          <div class="icon-wrapper">
            <img
              alt="Image Services"
              loading="lazy"
              src="<?php echo $assets . '/opportunities/military_Light.svg' ?>"
              class="icon-industries" />
          </div>
          <h3 class="title">Military</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Enhancing defence capabilities with near-zero loss energy transfer</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card rounded-4">
        <div class="market-card-head">
          <div class="icon-wrapper">
            <img
              alt="Image Services"
              loading="lazy"
              src="<?php echo $assets . '/opportunities/consumer_Light.svg' ?>"
              class="icon-industries" />
          </div>
          <h3 class="title">Consumer Goods</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Revolutionising everyday products with SpinX® technology</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card rounded-4">
        <div class="market-card-head">
          <div class="icon-wrapper">
            <img
              alt="Image Services"
              loading="lazy"
              src="<?php echo $assets . '/opportunities/commercial_Light.svg' ?>"
              class="icon-industries" />
          </div>
          <h3 class="title">Manufacturing</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Boosting efficiency and sustainability with SpinX® technology</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card rounded-4">
        <div class="market-card-head">
          <div class="icon-wrapper">
            <img
              alt="Image Services"
              loading="lazy"
              src="<?php echo $assets . '/opportunities/automotive.svg' ?>"
              class="icon-industries" />
          </div>
          <h3 class="title">Automotive</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Revolutionising automotive performance with SpinX® technology</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-5 col-lg-4">
      <div class="market-card">
        <div class="market-card-head"> <span class="icon-wrapper">
            <img
              alt="Image Services"
              loading="lazy"
              src="<?php echo $assets . '/opportunities/d_Light.svg' ?>"
              class="icon-industries" />
          </span>
          <h3 class="title">Research & Development</h3>
        </div>
        <div class="hover-content">
          <p class="text-muted mb-0">Unlocking new market opportunities with SpinX® technology</p>
        </div>
      </div>
    </div>
    <!-- Rest of the cards follow the same pattern -->
    <!-- Add the remaining cards with the same structure but different icons and content -->

  </div>
  </div>
</div>