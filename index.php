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
    <?php include 'nav.php'; ?>
    <section class="hero">
        <h1>PARKWHIZ</h1>
        <p>Revolutionizing parking with IoT and real-time analytics.</p>
        <button class="welcome-btn">WELCOME</button>
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
    <footer>
    <?php include 'footer.php'; ?>
</body>
</html>