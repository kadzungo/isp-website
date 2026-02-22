<?php
// FlashFiber ISP Website - Home Page
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FlashFiber | Fast & Reliable Fiber Internet in Kenya</title>

    <meta name="description" content="FlashFiber provides fast, reliable and unlimited fiber internet for homes and businesses. Affordable monthly plans with 24/7 support.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Main Styles -->
    <link rel="preload" href="assets/style.css" as="style">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body id="home">

<!-- ================= HEADER ================= -->
<header class="site-header">
    <div class="wrap">
        <a href="index.php" class="brand" aria-label="FlashFiber Home">
            <img src="assets/images/logo.png" alt="FlashFiber Internet Logo" class="logo">
        </a>

        <nav class="main-nav" aria-label="Main Navigation">
            <a href="#home">Home</a>
            <a href="#packages">Packages</a>
            <a href="#features">Features</a>
            <a href="order.php" class="btn-primary nav-cta">Order Now</a>
        </nav>
    </div>
</header>

<!-- ================= HERO ================= -->
<section class="hero">
    <div class="wrap hero-grid">

        <div class="hero-text">
            <h1>Fast. Reliable. Unlimited Internet.</h1>
            <p>
                Experience high-speed fiber internet with FlashFiber —
                perfect for homes, businesses, gaming, and streaming.
            </p>

            <div class="hero-cta">
                <a href="order.php" class="btn-primary">Get Connected</a>
                <a href="#packages" class="btn-outline">View Packages</a>
            </div>

            <ul class="hero-features">
                <li>✔ Unlimited Data</li>
                <li>✔ 24/7 Technical Support</li>
                <li>✔ Affordable Monthly Plans</li>
            </ul>
        </div>

        <div class="hero-media">
            <img src="assets/images/logo.png" alt="FlashFiber Fiber Internet Service" class="hero-logo">
        </div>

    </div>
</section>

<!-- ================= FEATURES ================= -->
<section class="features" id="features">
    <div class="wrap">

        <div class="feature">
            <div class="icon">⚡</div>
            <h3>Ultra-Fast Speeds</h3>
            <p>Enjoy seamless browsing, gaming, and HD streaming.</p>
        </div>

        <div class="feature">
            <div class="icon">🛡️</div>
            <h3>Stable Connection</h3>
            <p>Enterprise-grade fiber ensures reliable uptime.</p>
        </div>

        <div class="feature">
            <div class="icon">📞</div>
            <h3>Local Support</h3>
            <p>Friendly local technicians ready to assist 24/7.</p>
        </div>

    </div>
</section>

<!-- ================= PACKAGES ================= -->
<section class="packages" id="packages">
    <div class="wrap">
        <h2>Our Internet Packages</h2>

        <div class="package-grid">

            <div class="card">
                <h3>Basic</h3>
                <p class="price">KSh 1,500 / month</p>
                <p>10 Mbps – Ideal for browsing & emails</p>
                <a href="order.php?package=Basic" class="btn-primary full">Order Now</a>
            </div>

            <div class="card popular">
                <h3>Standard</h3>
                <p class="price">KSh 2,500 / month</p>
                <p>20 Mbps – Perfect for streaming & remote work</p>
                <a href="order.php?package=Standard" class="btn-primary full">Order Now</a>
            </div>

            <div class="card">
                <h3>Premium</h3>
                <p class="price">KSh 3,500 / month</p>
                <p>40 Mbps – Best for businesses & gamers</p>
                <a href="order.php?package=Premium" class="btn-primary full">Order Now</a>
            </div>

        </div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="site-footer">
  <div class="wrap footer-content">

    <p>© <?php echo date('Y'); ?> FlashFiber. All Rights Reserved.</p>

    <div class="footer-socials">
      <a href="https://wa.me/254799174938?text=Hello%20FlashFiber,%20I%20would%20like%20to%20get%20connected."
         target="_blank"
         aria-label="Chat with FlashFiber on WhatsApp">
        <img src="assets/images/whatsapp.png" alt="WhatsApp">
      </a>
    </div>

  </div>
</footer>

</body>