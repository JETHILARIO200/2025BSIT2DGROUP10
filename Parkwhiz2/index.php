<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkwhiz</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
</head>
<body>
    <?php include 'php/nav.php'; ?>
    <section class="hero" style="position:relative;min-height:420px;display:flex;flex-direction:column;align-items:center;justify-content:center;overflow:hidden;">
        <img src="images/john-matychuk-yvfp5YHWGsc-unsplash.jpg" alt="Smart Parking" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:0;">
        <div style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(20,20,20,0.45);z-index:1;"></div>
        <div style="position:relative;z-index:2;text-align:center;width:100%;padding:80px 0;">
            <h1 style="color:#fff;text-shadow:0 4px 24px rgba(0,0,0,0.7);font-size:3rem;font-weight:900;letter-spacing:2px;">PARKWHIZ</h1>
            <p style="color:#fff;text-shadow:0 2px 16px rgba(0,0,0,0.7);font-size:1.5rem;font-weight:600;">Revolutionizing parking with IoT and real-time analytics.</p>
            <button class="welcome-btn">WELCOME</button>
        </div>
    </section>
    <section style="height: 40px; background: #f7f7f7; border: none;"></section>
    <section class="how-it-works" id="how">
        <h2>How It Works</h2>
        <p>Discover how Parkwhiz transforms parking with smart technology.</p>
    </section>
    <div class="features" id="features">
        <div class="feature">
            <span class="feature-icon">&#9889;</span>
            <div class="feature-title">Real-Time Space Detection</div>
            <div class="feature-desc">Our IoT sensors monitor parking spaces and instantly update availability, ensuring you always know where to park.</div>
        </div>
        <div class="feature">
            <span class="feature-icon">&#128247;</span>
            <div class="feature-title">Automatic License Plate Recognition</div>
            <div class="feature-desc">Advanced cameras and AI recognize license plates for seamless entry, exit, and payment automation.</div>
        </div>
        <div class="feature">
            <span class="feature-icon">&#128273;</span>
            <div class="feature-title">Smart Guidance System</div>
            <div class="feature-desc">Dynamic signage and mobile guidance direct you to the nearest available spot, saving time and reducing congestion.</div>
        </div>
    </div>
    <footer style="background:#181c22; color:#cbd5e1; text-align:center; font-size:1.05rem; padding:18px 0 12px 0; border-top:1px solid #334155; margin-top:18px;">
        &copy; 2025 Parkwhiz. All rights reserved.
    </footer>
</body>
</html>
