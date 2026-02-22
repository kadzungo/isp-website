<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Order Sent - FlashFiber</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    font-family: "Segoe UI", Arial, sans-serif;
    background: linear-gradient(135deg, #f0f4ff, #eaf1f8);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.success-box {
    background: white;
    padding: 50px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    max-width: 420px;
}

.checkmark {
    font-size: 80px;
    color: #1cc88a;
}

.success-box h2 {
    margin-top: 20px;
    color: #003b8e;
}

.success-box p {
    color: #555;
    margin: 15px 0 30px;
}

.success-box a {
    display: inline-block;
    padding: 14px 25px;
    background: #25D366;
    color: white;
    font-weight: bold;
    border-radius: 10px;
    text-decoration: none;
    margin-bottom: 15px;
}

.success-box a:hover {
    opacity: 0.9;
}

.back-home {
    display: block;
    margin-top: 10px;
    text-decoration: none;
    color: #003b8e;
}
</style>
</head>

<body>

<div class="success-box">
    <div class="checkmark">✅</div>
    <h2>Order Sent Successfully</h2>
    <p>Thank you for choosing FlashFiber. Our team will contact you shortly.</p>

    <a href="<?php echo $_GET['wa']; ?>" target="_blank">
        Notify via WhatsApp
    </a>

    <a class="back-home" href="index.php">← Back to Home</a>
</div>

</body>
</html>
