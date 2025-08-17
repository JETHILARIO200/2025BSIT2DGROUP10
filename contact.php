<?php
// contact.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Parkwhiz</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #fff; }
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 20px 40px; background: #fff; border-bottom: 1px solid #eee; }
        .navbar a { text-decoration: none; color: #222; margin: 0 15px; font-weight: 500; }
        .navbar .nav-links { display: flex; align-items: center; }
        .navbar .auth { display: flex; gap: 10px; align-items: center; }
        .navbar .btn { background: #222; color: #fff; border: none; padding: 8px 18px; border-radius: 5px; cursor: pointer; }
        .container { max-width: 1200px; margin: 40px auto; padding: 0 20px; }
        .contact-title { text-align: center; font-size: 2.2rem; margin-top: 30px; margin-bottom: 10px; }
        .contact-desc { text-align: center; color: #444; margin-bottom: 40px; }
        .contact-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: 40px; }
        .contact-form { background: #fff; border-radius: 12px; padding: 32px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
        .contact-form label { display: block; margin-bottom: 8px; font-weight: 500; }
        .contact-form input, .contact-form textarea { width: 100%; padding: 10px; margin-bottom: 18px; border: 1px solid #ddd; border-radius: 6px; font-size: 1rem; }
        .contact-form textarea { min-height: 80px; resize: vertical; }
        .contact-form button { width: 100%; background: #222; color: #fff; border: none; padding: 12px; border-radius: 6px; font-size: 1.1rem; cursor: pointer; margin-top: 10px; }
        .contact-info { background: #fafafa; border-radius: 12px; padding: 32px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); margin-bottom: 24px; }
        .contact-info h3 { margin-top: 0; margin-bottom: 18px; }
        .contact-info p { margin: 8px 0; color: #333; }
        .contact-info .icon { margin-right: 8px; }
        .faq { background: #fafafa; border-radius: 12px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
        .faq h4 { margin-top: 0; margin-bottom: 12px; }
        .faq p { margin: 8px 0; color: #333; font-size: 0.98rem; }
        .footer { background: #222; color: #fff; text-align: center; padding: 32px 0 12px 0; font-size: 0.95rem; margin-top: 60px; }
        .footer-grid { display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .footer-col { flex: 1 1 180px; margin-bottom: 18px; }
        .footer-col h5 { color: #fff; margin-bottom: 10px; }
        .footer-col ul { list-style: none; padding: 0; margin: 0; }
        .footer-col ul li { margin-bottom: 8px; }
        .footer-col ul li a { color: #bbb; text-decoration: none; font-size: 0.98rem; }
        .footer-col ul li a:hover { color: #fff; }
        @media (max-width: 900px) {
            .contact-grid { grid-template-columns: 1fr; }
            .footer-grid { flex-direction: column; }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div><a href="index.php"><strong>Parkwhiz</strong></a></div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="feature.php">Features</a>
            <a href="index.php#how">How It Works</a>
            <a href="#pricing">Pricing</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="auth">
            <a href="#login">Login</a>
            <button class="btn">Sign Up</button>
        </div>
    </nav>
    <div class="container">
        <div class="contact-title">Contact Us</div>
        <div class="contact-desc">Get in touch with our team. We're here to help you with any questions.</div>
        <div class="contact-grid">
            <form class="contact-form">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your full name">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="How can we help?">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Tell us more about your inquiry..."></textarea>
                <button type="submit">Send Message</button>
            </form>
            <div>
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <p><span class="icon">&#9993;</span> <strong>Email</strong><br>support@parkwhiz.com</p>
                    <p><span class="icon">&#9742;</span> <strong>Phone</strong><br>+1 (555) 123-4567</p>
                    <p><span class="icon">&#127968;</span> <strong>Address</strong><br>1234 Parking Ave<br>Suite 100 Cityville,<br>State 12345</p>
                    <p><span class="icon">&#128337;</span> <strong>Business Hours</strong><br>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                </div>
                <div class="faq">
                    <h4>Frequently Asked Questions</h4>
                    <p><strong>How quickly do you respond to inquiries?</strong><br>We typically respond within 24 hours during business days.</p>
                    <p><strong>Do you offer phone support?</strong><br>Yes, phone support is available during business hours.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-grid">
            <div class="footer-col">
                <h5>Parkwhiz</h5>
                <p>Making parking simple and convenient for everyone.</p>
            </div>
            <div class="footer-col">
                <h5>Product</h5>
                <ul>
                    <li><a href="feature.php">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#how">How It Works</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Company</h5>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Support</h5>
                <ul>
                    <li><a href="#help">Help Center</a></li>
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#terms">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div style="margin-top:18px; color:#bbb; font-size:0.97rem;">&copy; 2025 Parkwhiz. All rights reserved.</div>
    </div>
</body>
</html>
