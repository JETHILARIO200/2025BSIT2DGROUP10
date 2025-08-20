<?php
// contact.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Parkwhiz</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <style>
        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 16px 0 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contact-title {
            font-size: 2.2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 8px;
        }
        .contact-desc {
            text-align: center;
            color: #444;
            margin-bottom: 32px;
        }
        .contact-main {
            display: flex;
            gap: 48px;
            width: 100%;
            justify-content: center;
            align-items: flex-start;
        }
        .contact-form {
            flex: 1 1 340px;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            background: #fafafa;
        }
        .contact-form textarea {
            min-height: 80px;
            resize: vertical;
        }
        .contact-form button {
            background: #222;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 12px;
            font-size: 1.08rem;
            font-weight: 500;
            cursor: pointer;
            margin-top: 8px;
        }
        .contact-info {
            flex: 1 1 340px;
            max-width: 340px;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .info-card {
            background: #fafafa;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 24px 20px;
            margin-bottom: 0;
        }
        .info-card h3 {
            font-size: 1.15rem;
            font-weight: bold;
            margin-bottom: 16px;
        }
        .info-list {
            list-style: none;
            padding: 0;
            margin: 0;
            color: #222;
            font-size: 1rem;
        }
        .info-list li {
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
        }
        .info-list li i {
            margin-right: 8px;
            color: #222;
        }
        .faq-card {
            background: #fafafa;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 20px 18px;
        }
        .faq-card h3 {
            font-size: 1.08rem;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .faq-q {
            font-weight: 500;
            margin-bottom: 2px;
        }
        .faq-a {
            color: #444;
            margin-bottom: 12px;
        }
        @media (max-width: 900px) {
            .contact-main {
                flex-direction: column;
                gap: 32px;
                align-items: center;
            }
            .contact-info {
                max-width: 100%;
            }
        }
        .footer {
            background: #181c23;
            color: #fff;
            padding: 40px 0 0 0;
            margin-top: 64px;
        }
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 48px;
            justify-content: space-between;
            padding: 0 16px;
        }
        .footer-section {
            flex: 1 1 180px;
            min-width: 160px;
            margin-bottom: 24px;
        }
        .footer-section h4 {
            font-size: 1.08rem;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-section ul li {
            margin-bottom: 8px;
            color: #ccc;
            font-size: 0.98rem;
        }
        .footer-bottom {
            text-align: center;
            color: #aaa;
            font-size: 0.95rem;
            padding: 18px 0 12px 0;
            border-top: 1px solid #222;
            margin-top: 24px;
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="contact-container">
        <div class="contact-title">Contact Us</div>
        <div class="contact-desc">Get in touch with our team. We're here to help you with any questions.</div>
        <div class="contact-main">
            <form class="contact-form">
                <input type="text" placeholder="Your full name" required>
                <input type="email" placeholder="you@example.com" required>
                <input type="text" placeholder="How can we help?" required>
                <textarea placeholder="Tell us more about your inquiry..." required></textarea>
                <button type="submit">Send Message</button>
            </form>
            <div class="contact-info">
                <div class="info-card">
                    <h3>Get in Touch</h3>
                    <ul class="info-list">
                        <li><i class="fa fa-envelope"></i> Email<br>support@parkwhiz.com</li>
                        <li><i class="fa fa-phone"></i> Phone<br>+1 (555) 123-4567</li>
                        <li><i class="fa fa-map-marker"></i> Address<br>1234 Parking Ave<br>Suite 100 Cityville,<br>State 12345</li>
                        <li><i class="fa fa-clock-o"></i> Business Hours<br>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</li>
                    </ul>
                </div>
                <div class="faq-card">
                    <h3>Frequently Asked Questions</h3>
                    <div class="faq-q">How quickly do you respond to inquiries?</div>
                    <div class="faq-a">We typically respond within 24 hours during business days.</div>
                    <div class="faq-q">Do you offer phone support?</div>
                    <div class="faq-a">Yes, phone support is available during business hours.</div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Parkwhiz</h4>
                <div style="color:#ccc; font-size:0.98rem;">Making parking simple and convenient for everyone.</div>
            </div>
            <div class="footer-section">
                <h4>Product</h4>
                <ul>
                    <li>Features</li>
                    <li>Pricing</li>
                    <li>How It Works</li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li>About</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Support</h4>
                <ul>
                    <li>Help Center</li>
                    <li>Privacy Policy</li>
                    <li>Terms of Service</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025 Parkwhiz. All rights reserved.
        </div>
    </footer>
</body>
</html>
