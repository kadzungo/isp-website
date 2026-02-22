<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Internet Package - FlashFiber</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>

<div class="order-container">

    <!-- LEFT SIDE: FORM -->
    <div class="order-form">
        <h2>Get Connected Today</h2>
        <p class="subtitle">Fill in your details and a FlashFiber agent will contact you shortly.</p>

        <form action="submit_order.php" method="POST">


            <label>Full Name</label>
            <input type="text" name="name" required>

            <label>Phone Number</label>
            <input type="text" name="phone" required>

            <label>Email Address (optional)</label>
            <input type="email" name="email">

            <label>Location / Estate</label>
            <input type="text" name="location" required>

            <label>Select Package</label>
            <select name="package" id="packageSelect" onchange="updatePackageCard()" required>
                <option value="">-- Choose Package --</option>
                <option value="10 Mbps">10 Mbps - KSh 1,500</option>
                <option value="20 Mbps">20 Mbps - KSh 2,500</option>
                <option value="40 Mbps">40 Mbps - KSh 3,500</option>
            </select>

            <label>Additional Notes (optional)</label>
            <textarea name="notes" rows="3"></textarea>

            <button type="submit" class="submit-btn">Submit Order</button>
        </form>
    </div>

    <!-- RIGHT SIDE: PACKAGE SUMMARY -->
    <div class="package-summary" id="packageCard">
        <h3>Selected Package</h3>
        <p class="default-msg">Choose a package to see details.</p>

         <div class="card info-card">
        <h3>Why Choose FlashFiber?</h3>

        <ul class="benefits">
            <li>⚡ Ultra-fast fiber internet</li>
            <li>🕒 24/7 customer support</li>
            <li>🔧 Free installation*</li>
            <li>📶 Unlimited data</li>
            <li>🏢 Home & Business plans</li>
        </ul>

        <div class="notice">
            *Installation subject to network availability in your area.
        </div>
    </div>
    </div>

</div>

<script>
function updatePackageCard() {
    const select = document.getElementById('packageSelect');
    const card = document.getElementById('packageCard');
    const info = document.getElementById('pkgInfo');
    const msg = document.querySelector('.default-msg');

    if (select.value === "") {
        info.classList.add('hidden');
        msg.style.display = "block";
        return;
    }

    msg.style.display = "none";
    info.classList.remove('hidden');

    const speed = document.getElementById('pkgSpeed');
    const price = document.getElementById('pkgPrice');

    const pkg = select.value;

    if (pkg === "10 Mbps") {
        speed.innerText = "10 Mbps";
        price.innerText = "KSh 1,000 / month";
    }
    if (pkg === "20 Mbps") {
        speed.innerText = "20 Mbps";
        price.innerText = "KSh 2,500 / month";
    }
    if (pkg === "40 Mbps") {
        speed.innerText = "40 Mbps";
        price.innerText = "KSh 3,500/ month";
    }
   
}
</script>

</body>
</html>
