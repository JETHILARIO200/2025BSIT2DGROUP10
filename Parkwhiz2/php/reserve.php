<?php
// reserve.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve a Parking Slot - Parkwhiz</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
</head>
<body>
    <div class="reserve-header">
        <div class="reserve-header-inner">
            <div class="reserve-header-left">
                <img src="../images/logo.png" alt="Parkwhiz Logo">
                <span>Parkwhiz</span>
            </div>
            <div class="reserve-header-right">
                <span><i class="fa fa-bell"></i></span>
                <img src="../images/Screenshot 2025-09-08 062714.png" alt="User">
            </div>
        </div>
    </div>
    <div class="main-content">
        <div style="max-width:600px;margin:32px auto 0 auto;">
            <a href="dashboard.php" class="back-btn">&larr; Back to Dashboard</a>
        </div>
        <div class="reserve-container">
            <div class="reserve-title">Reserve a Parking Slot</div>
            <form class="reserve-form">
                <label for="location">Select Parking Location</label>
                <select id="location" name="location">
                    <option>Select location</option>
                    <option>Bacolod</option>
                    <option>Granada</option>
                    <option>Alangilan</option>
                </select>
                <div style="display:flex; gap:18px;">
                    <div style="flex:1;">
                        <label for="date">Select Date</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <div style="flex:1;">
                        <label for="time">Select Time</label>
                        <input type="time" id="time" name="time">
                    </div>
                </div>
                <div class="slot-types">
                    <label><input type="radio" name="slotType" value="regular" checked> Regular ($5/hour)</label>
                    <label><input type="radio" name="slotType" value="vip"> VIP ($12/hour)</label>
                    <label><input type="radio" name="slotType" value="admin"> Admin-Only</label>
                </div>
                <label for="plate">License Plate Number</label>
                <input type="text" id="plate" name="plate" placeholder="ABC-1234">
                <label for="duration">Duration (Hours)</label>
                <select id="duration" name="duration">
                    <option>Select duration</option>
                    <option value="1">1 hour</option>
                    <option value="2">2 hours</option>
                    <option value="3">3 hours</option>
                    <option value="4">4 hours</option>
                </select>
                <div class="cost-summary" id="costSummary">
                    Base Rate: <span id="baseRate">$5.00/hour</span><br>
                    Duration: <span id="durationText">-- hours</span><br>
                    <strong>Total Cost:</strong> <span id="totalCost">$0.00</span>
                </div>
                <button class="reserve-btn" type="submit"><span style="font-size:1.2rem;">&#128663;</span> Reserve Parking Slot</button>
            </form>
        </div>
    </div>
    <footer class="reserve-footer">
        &copy; 2025 Parkwhiz. All rights reserved.
        <div class="reserve-footer-links" style="display:flex;justify-content:center;gap:18px;flex-wrap:wrap;">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Support</a>
        </div>
    </footer>
</body>
</html>
