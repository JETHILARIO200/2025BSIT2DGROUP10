
<?php
// slots.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Parking Slots - Parkwhiz</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/main.js"></script>
</head>
<body>
    <div style="background:#181c22; color:#fff; padding:0; margin:0; width:100%;">
        <div style="display:flex; align-items:center; justify-content:space-between; height:55px; padding:0 32px;">
            <div style="display:flex; align-items:center;">
                <img src="/Parkwhiz2/images/parklogo.png" alt="Parkwhiz Logo" style="height:32px;width:auto;vertical-align:middle;margin-right:8px;">
                <span style="font-size:1.15rem; font-weight:500; color:#fff;">Parkwhiz</span>
            </div>
            <div style="display:flex; align-items:center; gap:18px;">
                <span><i class="fa fa-bell"></i></span>
                <img src="../images/Screenshot 2025-09-08 062714.png" alt="User" style="height:32px; border-radius:50%;">
            </div>
        </div>
    </div>
    <div class="main-content">
        <div style="max-width:600px;margin:32px auto 0 auto;">
            <a href="dashboard.php" style="display:inline-block;background:#222;color:#fff;padding:8px 22px;border-radius:8px;text-decoration:none;font-size:1rem;font-weight:500;margin-bottom:18px;">&larr; Back to Dashboard</a>
        </div>
        <div class="slots-container">
            <div class="slots-title">My Parking Slots</div>
            <div class="slots-filter">
                Filter by status:
                <select id="statusFilter" onchange="filterSlots()">
                    <option value="all">All</option>
                    <option value="reserved">Reserved</option>
                    <option value="active">Active</option>
                    <option value="expired">Expired</option>
                </select>
            </div>
            <div class="slots-list" id="slotsList">
                <div class="slot-item" data-status="reserved">
                    <div class="slot-info">
                        <span class="slot-name">Slot A-15</span>
                        <span class="slot-status">Status: Reserved</span>
                    </div>
                    <span class="slot-date">Reserved on: 2025-06-10 14:30</span>
                </div>
                <div class="slot-item" data-status="active">
                    <div class="slot-info">
                        <span class="slot-name">Slot B-07</span>
                        <span class="slot-status">Status: Active</span>
                    </div>
                    <span class="slot-date">Reserved on: 2025-06-11 09:00</span>
                </div>
                <div class="slot-item" data-status="expired">
                    <div class="slot-info">
                        <span class="slot-name">Slot C-22</span>
                        <span class="slot-status">Status: Expired</span>
                    </div>
                    <span class="slot-date">Reserved on: 2025-05-29 18:45</span>
                </div>
            </div>
        </div>
    </div>
    <footer class="slots-footer">
        &copy; 2025 Parkwhiz. All rights reserved.
        <div class="slots-footer-links" style="display:flex;justify-content:center;gap:18px;flex-wrap:wrap;">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Support</a>
        </div>
    </footer>
    <script>
        function filterSlots() {
            var filter = document.getElementById('statusFilter').value;
            var slots = document.querySelectorAll('.slot-item');
            slots.forEach(function(slot) {
                if (filter === 'all' || slot.getAttribute('data-status') === filter) {
                    slot.style.display = '';
                } else {
                    slot.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
