<?php
// profile.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Parkwhiz</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/main.js"></script>
    </style>
</head>
<body>
    <div class="profile-header">
        <div class="profile-header-inner">
            <div class="profile-header-left">
                <img src="../images/logo.png" alt="Parkwhiz Logo">
                <span>Parkwhiz</span>
            </div>
            <div class="profile-header-right">
                <span><i class="fa fa-bell"></i></span>
                <img src="../images/Screenshot 2025-09-08 062714.png" alt="User">
            </div>
        </div>
    </div>
    <div class="main-content">
        <div style="max-width:600px;margin:32px auto 0 auto;">
            <a href="dashboard.php" class="back-btn">&larr; Back to Dashboard</a>
        </div>
        <div class="profile-container">
            <div class="profile-title">User Profile</div>
            <div class="profile-picture">
                <img src="../images/Screenshot 2025-09-08 062714.png" alt="Profile Picture">
                <button class="change-pic-btn" type="button">Change Picture</button>
            </div>
            <form class="profile-form">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" value="John" readonly>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="john@example.com" readonly>
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" value="+1 555 123 4567" readonly>
                <label for="vehicle">Vehicle Make & Model</label>
                <input type="text" id="vehicle" name="vehicle" value="Toyota Camry 2020" readonly>
                <label for="plate">License Plate</label>
                <input type="text" id="plate" name="plate" value="ABC-1234" readonly>
                <div class="preferences">
                    <label><input type="checkbox" name="email_notify"> Email notifications for bookings</label>
                    <label><input type="checkbox" name="sms_notify"> SMS reminders</label>
                    <label><input type="checkbox" name="promo_offer"> Promotional offers</label>
                </div>
                <button class="save-btn" type="submit">Save Changes</button>
                <a href="login.php" class="logout-btn" style="display:block;width:100%;background:#ef4444;color:#fff;text-align:center;border:none;border-radius:8px;padding:14px 0;font-size:1.08rem;font-weight:500;text-decoration:none;margin-top:12px;">Log Out</a>
            </form>
        </div>
    </div>
    <footer class="profile-footer">
        &copy; 2025 Parkwhiz. All rights reserved.
        <div class="profile-footer-links" style="display:flex;justify-content:center;gap:18px;flex-wrap:wrap;">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Support</a>
        </div>
    </footer>
</body>
</html>
