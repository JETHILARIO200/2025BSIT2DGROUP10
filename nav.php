<nav class="navbar">
    <div class="navbar-section left">
        <span class="logo">Parkwhiz</span>
        <div class="hamburger" onclick="openDrawer()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="navbar-section center nav-links">
    <a href="index.php">Home</a>
    <a href="feature.php">Features</a>
    <a href="index.php#how">How It Works</a>
    <a href="index.php#pricing">Pricing</a>
    <a href="contact.php">Contact</a>
    </div>
    <div class="navbar-section right auth">
        <button>Login</button>
        <button class="signup">Sign Up</button>
    </div>
</nav>
<div id="drawer" class="drawer">
    <span class="drawer-header">Parkwhiz <span class="drawer-close" onclick="closeDrawer()">&times;</span></span>
    <a href="index.php" onclick="closeDrawer()">Home</a>
    <a href="feature.php" onclick="closeDrawer()">Features</a>
    <a href="index.php#how" onclick="closeDrawer()">How It Works</a>
    <a href="index.php#pricing" onclick="closeDrawer()">Pricing</a>
    <a href="contact.php" onclick="closeDrawer()">Contact</a>
</div>
