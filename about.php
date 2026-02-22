<?php
// about.php - FlashFiber About Page
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>About Us — FlashFiber</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- NAV -->
<header class="site-header">
  <div class="wrap">
    <a class="brand" href="index.php">FlashFiber</a>

    <nav class="main-nav">
      <a href="index.php#packages">Packages</a>
      <a href="index.php#coverage">Coverage</a>
      <a href="order.php">Order</a>
      <a href="contact.php" class="btn-ghost">Contact</a>
    </nav>

    <a href="order.php" class="btn-primary nav-cta">Get Connected</a>
    <button class="nav-toggle" aria-label="Open menu">☰</button>
  </div>
</header>

<!-- HERO -->
<section class="hero hero-small">
  <div class="wrap hero-grid">
    <div class="hero-text">
      <h1>About FlashFiber</h1>
      <p>
        We’re a local internet service provider delivering fast,
        reliable, and affordable fiber internet for homes and businesses.
      </p>
    </div>
  </div>
</section>

<!-- ABOUT CONTENT -->
<section class="wrap" style="padding:80px 20px;">
  <div class="about-grid">

    <div>
      <h2>Who We Are</h2>
      <p>
        FlashFiber is a locally owned Internet Service Provider focused on
        delivering high-speed fiber connectivity with dependable customer
        support. We believe everyone deserves fast and stable internet
        without complicated contracts.
      </p>
      <p>
        Our network is designed for modern digital needs — streaming,
        remote work, online learning, and business operations.
      </p>
    </div>

    <div>
      <h2>Our Mission</h2>
      <p>
        To provide reliable, high-performance internet solutions while
        maintaining honest pricing, fast installations, and responsive
        local support.
      </p>

      <h2 style="margin-top:30px;">Our Vision</h2>
      <p>
        To become the most trusted community-focused ISP by expanding
        fiber access and empowering homes and businesses through
        connectivity.
      </p>
    </div>

  </div>
</section>

<!-- VALUES -->
<section class="features wrap">
  <div class="feature">
    <div class="icon">🚀</div>
    <h3>Speed & Reliability</h3>
    <p>Consistent performance backed by a modern fiber network.</p>
  </div>

  <div class="feature">
    <div class="icon">🤝</div>
    <h3>Customer First</h3>
    <p>Local support teams that actually pick up your calls.</p>
  </div>

  <div class="feature">
    <div class="icon">📍</div>
    <h3>Local Focus</h3>
    <p>Built for Kenyan homes, estates, and growing businesses.</p>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner">
  <div class="wrap">
    <div class="cta-text">
      <h3>Want Fast & Reliable Internet?</h3>
      <p>Check availability in your area or talk to our team today.</p>
    </div>
    <div class="cta-actions">
      <a class="btn-primary large" href="order.php">Check Availability</a>
      <a class="btn-outline large" href="contact.php">Contact Us</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="wrap footer-grid">
    <div>
      <strong>FlashFiber</strong>
      <p>Fast, reliable, affordable internet.</p>
    </div>
    <div>
      <h4>Company</h4>
      <a href="about.php">About</a><br>
      <a href="contact.php">Contact</a>
    </div>
    <div>
      <h4>Support</h4>
      <a href="mailto:flashfiberservices@gmail.com">flashfiberservices@gmail.com</a><br>
      <a href="#">+254799174938</a>
    </div>
  </div>

  <div class="wrap copyright">
    <small>© <?php echo date('Y'); ?> FlashFiber — All rights reserved</small>
  </div>
</footer>

<!-- WhatsApp -->
<a class="whatsapp-float" href="https://wa.me/254799174938" target="_blank">Chat</a>

<script src="assets/script.js"></script>
</body>
</html>
