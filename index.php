<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkwhiz</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f7f7f7;
            color: #222;
        }
        .navbar {
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            height: 56px;
        }
        .navbar .logo {
            font-weight: bold;
            font-size: 1.2rem;
        }
        .navbar nav {
            display: flex;
            gap: 24px;
        }
        .navbar nav a {
            text-decoration: none;
            color: #222;
            font-size: 1rem;
            transition: color 0.2s;
        }
        .navbar nav a:hover {
            color: #0078d7;
        }
        .navbar .auth {
            display: flex;
            gap: 8px;
        }
        .navbar .auth button {
            background: #222;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 6px 16px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .navbar .auth button.signup {
            background: #fff;
            color: #222;
            border: 1px solid #222;
        }
        .navbar .auth button.signup:hover {
            background: #222;
            color: #fff;
        }
        .hero {
            background: #222;
            color: #fff;
            text-align: center;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 100px 20px 80px 20px;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 16px;
            font-weight: 500;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 32px;
        }
        .hero .welcome-btn {
            background: #fff;
            color: #222;
            border: none;
            border-radius: 4px;
            padding: 10px 32px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.2s;
        }
        .hero .welcome-btn:hover {
            background: #eaeaea;
        }
        .how-it-works {
            background: #222;
            color: #fff;
            margin: 0 auto;
            max-width: 900px;
            border-radius: 12px;
            padding: 48px 32px;
            margin-top: 48px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.10);
            text-align: center;
        }
        .how-it-works h2 {
            font-size: 2rem;
            margin-bottom: 12px;
        }
        .how-it-works p {
            font-size: 1.1rem;
            margin-bottom: 0;
        }
        .features {
            display: flex;
            justify-content: center;
            gap: 32px;
            margin: 48px 0 0 0;
            flex-wrap: wrap;
        }
        .feature {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 32px 24px;
            width: 260px;
            text-align: center;
            margin-bottom: 24px;
        }
        .feature-icon {
            font-size: 2.2rem;
            margin-bottom: 16px;
            display: block;
        }
        .feature-title {
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 8px;
        }
        .feature-desc {
            font-size: 1rem;
            color: #444;
        }
        footer {
            background: #222;
            color: #fff;
            text-align: center;
            padding: 24px 0 12px 0;
            font-size: 0.95rem;
            margin-top: 48px;
        }
        @media (max-width: 900px) {
            .features {
                flex-direction: column;
                align-items: center;
            }
            .how-it-works {
                max-width: 98vw;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">Parkwhiz</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="feature.php">Features</a>
            <a href="#how">How It Works</a>
            <a href="#pricing">Pricing</a>
            <a href="contact.php">Contact</a>
        </nav>
        <div class="auth">
            <button>Login</button>
            <button class="signup">Sign Up</button>
        </div>
    </div>
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
        &copy; 2025 Parkwhiz. All rights reserved.
    </footer>
</body>
</html>