<?php include 'header.php'; ?>

<style>
/* Contact Page Styles */
.contact-hero {
    background: linear-gradient(135deg, #f4f8fd, #eef4fb);
    padding: 80px 20px;
}

.contact-hero h2 {
    font-size: 42px;
    font-weight: 700;
    color: #0b3c8c;
    margin-bottom: 15px;
}

.contact-hero p {
    font-size: 18px;
    color: #555;
    max-width: 600px;
}

.contact-container {
    max-width: 1100px;
    margin: -60px auto 80px;
    padding: 0 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.contact-card {
    background: #fff;
    border-radius: 14px;
    padding: 30px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
}

.contact-card h3 {
    color: #0b3c8c;
    margin-bottom: 20px;
}

.contact-info p {
    margin-bottom: 15px;
    font-size: 16px;
}

.contact-info strong {
    color: #0b3c8c;
}

/* Form */
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 14px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 15px;
}

.contact-form textarea {
    resize: none;
    height: 120px;
}

.contact-form button {
    background: #0b5ed7;
    color: #fff;
    border: none;
    padding: 14px 24px;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s ease;
}

.contact-form button:hover {
    background: #094bb5;
}
</style>

<!-- HERO -->
<section class="contact-hero">
    <div class="container">
        <h2>Get in Touch</h2>
        <p>
            Have questions about our packages, coverage, or installation?
            Our local FlashFiber team is ready to help.
        </p>
    </div>
</section>

<!-- CONTENT -->
<section class="contact-container">

    <!-- Contact Info -->
    <div class="contact-card contact-info">
        <h3>Contact Information</h3>
        <p><strong>Phone:</strong> 0799174938</p>
        <p><strong>WhatsApp:</strong> 0799174938</p>
        <p><strong>Email:</strong> flashfiberservices@gmail.com</p>
        <p><strong>Location:</strong> Mombasa, Kenya</p>
        <p><strong>Support Hours:</strong> Mon – Sat, 8am – 6pm</p>
    </div>

    <!-- Contact Form -->
    <div class="contact-card">
        <h3>Send Us a Message</h3>
        <form class="contact-form" method="post" action="#">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="phone" placeholder="Phone Number">
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

</section>

<?php include 'footer.php'; ?>
