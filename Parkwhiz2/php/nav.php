<nav class="navbar">
    <div class="navbar-section left">
    <img src="/Parkwhiz2/images/logo.png" alt="Parkwhiz Logo" class="logo-img" style="height:32px;width:auto;vertical-align:middle;margin-right:8px;">
    <span class="logo">Parkwhiz</span>
        <div class="hamburger" onclick="openDrawer()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="navbar-section center nav-links">
    <a href="/Parkwhiz2/index.php">Home</a>
    <a href="/Parkwhiz2/php/feature.php">Features</a>
    <a href="/Parkwhiz2/index.php#how">How It Works</a>
    <a href="/Parkwhiz2/php/pricing.php">Pricing</a>
    <a href="/Parkwhiz2/php/contact.php">Contact</a>
    </div>
    <div class="navbar-section right auth">
    <a href="/Parkwhiz2/php/login.php"><button>Login</button></a>
    <a href="/Parkwhiz2/php/signin.php"><button class="signup">Sign Up</button></a>
    <!-- Removed duplicate Sign Up link -->
    </div>
</nav>
<div id="drawer" class="drawer">
    <span class="drawer-header">Parkwhiz <span class="drawer-close" onclick="closeDrawer()">&times;</span></span>
    <a href="/Parkwhiz2/index.php" onclick="closeDrawer()">Home</a>
    <a href="/Parkwhiz2/php/feature.php" onclick="closeDrawer()">Features</a>
    <a href="/Parkwhiz2/index.php#how" onclick="closeDrawer()">How It Works</a>
    <a href="/Parkwhiz2/php/pricing.php" onclick="closeDrawer()">Pricing</a>
    <a href="/Parkwhiz2/php/contact.php" onclick="closeDrawer()">Contact</a>
    <a href="/Parkwhiz2/php/login.php" onclick="closeDrawer()">Login</a>
</div>
