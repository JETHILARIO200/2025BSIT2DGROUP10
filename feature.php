<?php
// feature.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - Parkwhiz</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #fff; }
    .navbar { display: flex; justify-content: space-between; align-items: center; padding: 20px 40px; background: #fff; border-bottom: 1px solid #eee; }
        .navbar a { text-decoration: none; color: #222; margin: 0 15px; font-weight: 500; }
        .navbar .nav-links { display: flex; align-items: center; }
    .navbar .auth { display: flex; gap: 10px; align-items: center; }
        .navbar .btn { background: #222; color: #fff; border: none; padding: 8px 18px; border-radius: 5px; cursor: pointer; }
        .container { max-width: 1200px; margin: 40px auto; padding: 0 20px; }
        .features-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 40px; }
        .feature-block { background: #f9f9f9; border-radius: 12px; padding: 32px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
        .feature-block h2 { margin-top: 0; }
        .feature-list { list-style: none; padding: 0; }
        .feature-list li { margin-bottom: 10px; color: #2ecc71; font-weight: 500; }
        .feature-list li span { color: #222; font-weight: 400; }
        .img-center { display: flex; justify-content: center; align-items: center; margin: 30px 0; }
        .footer { text-align: center; padding: 30px 0 10px; color: #888; font-size: 15px; border-top: 1px solid #eee; margin-top: 60px; }
        .dashboard-img { max-width: 350px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.07); }
    </style>
</head>
<body>
    <nav class="navbar">
        <div><a href="index.php"><strong>Parkwhiz</strong></a></div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="feature.php">Features</a>
            <a href="#how">How It Works</a>
            <a href="#pricing">Pricing</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="auth">
            <a href="#login">Login</a>
            <button class="btn">Sign Up</button>
        </div>
    </nav>
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; gap: 40px; margin-top: 40px; align-items: flex-start;">
            <div style="flex: 1 1 400px; min-width: 340px;">
                <h2 style="font-size:2rem; margin-bottom:10px;">Smart Sensors</h2>
                <p style="margin-bottom:18px;">IoT-based detection of vacant spots using advanced sensor technology for real-time parking availability.</p>
                <ul class="feature-list">
                    <li>✔ <span>Real-time occupancy detection</span></li>
                    <li>✔ <span>High percentage accuracy rate</span></li>
                    <li>✔ <span>Low power consumption</span></li>
                </ul>
            </div>
            <div style="flex: 1 1 340px; min-width: 320px; display: flex; justify-content: center; align-items: center;">
                <img src="images/Screenshot 2025-08-17 222033.png" alt="IoT Sensor Network Diagram" class="dashboard-img" style="max-width:350px;">
            </div>
        </div>
        <div style="display: flex; flex-wrap: wrap; gap: 40px; margin-top: 60px; align-items: flex-start;">
            <div style="flex: 1 1 340px; min-width: 320px; display: flex; justify-content: center; align-items: center;">
                <img src="images/Screenshot 2025-08-17 222104.png" alt="ParkSmart UI" class="dashboard-img" style="max-width:350px;">
            </div>
            <div style="flex: 1 1 400px; min-width: 340px;">
                <h2 style="font-size:2rem; margin-bottom:10px;">Mobile App Integration</h2>
                <p style="margin-bottom:18px;">Book and pay for parking spots directly through our intuitive smartphone application.</p>
                <ul class="feature-list">
                    <li>✔ <span>Tap booking system</span></li>
                    <li>✔ <span>Secure payment processing</span></li>
                    <li>✔ <span>Real-time notifications</span></li>
                </ul>
            </div>
        </div>
        <div style="display: flex; flex-wrap: wrap; gap: 40px; margin-top: 60px; align-items: flex-start;">
            <div style="flex: 1 1 400px; min-width: 340px;">
                <h2 style="font-size:2rem; margin-bottom:10px;">Parking Analytics</h2>
                <p style="margin-bottom:18px;">Comprehensive reports and insights for businesses and cities to optimize parking operations.</p>
                <ul class="feature-list">
                    <li>✔ <span>Real-time occupancy tracking</span></li>
                    <li>✔ <span>Revenue optimization insights</span></li>
                    <li>✔ <span>Custom reporting tools</span></li>
                </ul>
            </div>
            <div style="flex: 1 1 340px; min-width: 320px; display: flex; justify-content: center; align-items: center;">
                <img src="images/Screenshot 2025-08-17 222126.png" alt="Parking Analytics Dashboard" class="dashboard-img" style="max-width:350px;">
            </div>
        </div>
    </div>
    <div class="footer">
        &copy; 2025 Parkwhiz. All rights reserved.
    </div>
</body>
</html>
