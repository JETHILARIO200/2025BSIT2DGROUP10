<?php
// feature.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - Parkwhiz</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .feature-row {
            display: flex;
            flex-wrap: wrap;
            gap: 48px;
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
            margin: 64px 0 0 0;
            width: 100%;
        }
        .feature-text {
            flex: 1 1 400px;
            min-width: 340px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .feature-img {
            flex: 1 1 340px;
            min-width: 320px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .feature-text h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .feature-text p {
            font-size: 1.08rem;
            color: #222;
            margin-bottom: 18px;
        }
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0 0 0 0;
        }
        .feature-list li {
            color: #2ecc71;
            font-size: 1.08rem;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .feature-list li span {
            color: #222;
            font-weight: 400;
        }
        @media (max-width: 900px) {
            .feature-row {
                flex-direction: column;
                gap: 24px;
                align-items: center;
            }
            .feature-img {
                margin-bottom: 24px;
            }
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="feature-row">
            <div class="feature-text">
                <h2>Smart Sensors</h2>
                <p>IoT-based detection of vacant spots using advanced sensor technology<br>for real-time parking availability.</p>
                <ul class="feature-list">
                    <li><span class="feature-check">&#10003;</span> <span>Real-time occupancy detection</span></li>
                    <li><span class="feature-check">&#10003;</span> <span>High percentage accuracy rate</span></li>
                    <li><span class="feature-check">&#10003;</span> <span>Low power consumption</span></li>
                </ul>
            </div>
            <div class="feature-img">
                <div>
                    <div style="font-weight:bold; font-size:1.1rem; text-align:center; margin-bottom:12px;">IoT Sensor Network Diagram</div>
                    <img src="../images/Screenshot 2025-08-17 222033.png" alt="IoT Sensor Network Diagram" class="dashboard-img" style="background:#f7f7f7; border-radius:12px; padding:24px; max-width:350px;">
                </div>
            </div>
        </div>
        <div class="feature-row">
            <div class="feature-text">
                <h2>Mobile App Integration</h2>
                <p>Book and pay for parking spots directly through our intuitive smartphone application.</p>
                <ul class="feature-list">
                    <li><span class="feature-check">&#10003;</span> <span>tap booking system</span></li>
                    <li><span class="feature-check">&#10003;</span> <span>Secure payment processing</span></li>
                    <li><span class="feature-check">&#10003;</span> <span>Real-time notifications</span></li>
                </ul>
            </div>
            <div class="feature-img">
                <div>
                    <img src="../images/Screenshot 2025-08-17 222104.png" alt="ParkSmart UI" class="dashboard-img" style="background:#fff; border-radius:12px; padding:24px; max-width:350px;">
                </div>
            </div>
        </div>
        <div class="feature-row">
            <div class="feature-text">
                <h2>Parking Analytics</h2>
                <p>Comprehensive reports and insights for businesses and cities to optimize parking operations.</p>
                <ul class="feature-list">
                    <li><span class="feature-check">&#10003;</span> <span>Real-time occupancy tracking</span></li>
                    <li><span class="feature-check">&#10003;</span> <span>Revenue optimization insights</span></li>
                    <li><span class="feature-check">&#10003;</span> <span>Custom reporting tools</span></li>
                </ul>
            </div>
            <div class="feature-img">
                <div>
                    <img src="../images/Screenshot 2025-08-17 222126.png" alt="Parking Analytics Dashboard" class="dashboard-img" style="background:#181c23; border-radius:12px; padding:24px; max-width:350px;">
                </div>
            </div>
        </div>
    </div>
    <footer style="background:#181c22; color:#cbd5e1; text-align:center; font-size:1.05rem; padding:18px 0 12px 0; border-top:1px solid #334155; margin-top:18px;">
        &copy; 2025 Parkwhiz. All rights reserved.
    </footer>
</body>
</html>
