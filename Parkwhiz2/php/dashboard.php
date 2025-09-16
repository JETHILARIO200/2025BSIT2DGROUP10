
<?php
// dashboard.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Parkwhiz</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
    <style>
        body {
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            flex: 1;
        }
        .dashboard-header {
            display: flex;
            align-items: center;
            padding: 16px 32px 0 32px;
        }
        .dashboard-header .logo-img {
            height: 40px;
            margin-right: 12px;
        }
        .dashboard-header .logo {
            font-size: 1.3rem;
            font-weight: bold;
            color: #222;
            margin-right: 32px;
        }
        .dashboard-header .user {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .dashboard-header .user img {
            height: 32px;
            border-radius: 50%;
        }
        .dashboard-stats {
            display: flex;
            gap: 32px;
            justify-content: flex-start;
            margin: 32px 0 24px 32px;
        }
        .dashboard-stat {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 24px 32px;
            min-width: 160px;
            text-align: left;
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .dashboard-stat .stat-label {
            font-size: 1rem;
            color: #444;
            margin-bottom: 8px;
        }
        .dashboard-stat .stat-value {
            font-size: 2.2rem;
            font-weight: bold;
            margin-bottom: 4px;
        }
        .dashboard-stat .stat-icon {
            font-size: 1.5rem;
            margin-left: 8px;
        }
        .dashboard-actions {
            display: flex;
            gap: 24px;
            margin: 0 0 24px 32px;
        }
        .dashboard-actions a, .dashboard-actions button {
            background: #222;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 14px 0;
            width: 220px;
            font-size: 1.08rem;
            font-weight: 500;
            cursor: pointer;
            text-align: center;
            display: inline-block;
            text-decoration: none;
        }
        .dashboard-actions a {
            background: #181818;
        }
        .dashboard-actions button {
            background: #fff;
            color: #222;
            border: 1px solid #eee;
        }
        .dashboard-actions button.active {
            background: #222;
            color: #fff;
        }
        .dashboard-tags {
            display: flex;
            gap: 12px;
            margin: 0 0 18px 32px;
        }
        .dashboard-tag {
            background: #eee;
            color: #222;
            border-radius: 20px;
            padding: 6px 18px;
            font-size: 0.98rem;
            font-weight: 500;
        }
        .dashboard-tag.vip {
            background: #222;
            color: #fff;
        }
        .dashboard-tag.admin {
            background: #444;
            color: #fff;
        }
        .dashboard-map {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 24px;
            margin: 0 32px 24px 32px;
        }
        .dashboard-map img {
            width: 100%;
            border-radius: 8px;
        }
        .dashboard-legend {
            display: flex;
            gap: 24px;
            margin: 12px 0 0 0;
        }
        .dashboard-legend span {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.98rem;
        }
        .dashboard-legend .dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: inline-block;
        }
        .dashboard-legend .dot.available {
            background: #4ade80;
        }
        .dashboard-legend .dot.occupied {
            background: #ef4444;
        }
        .dashboard-legend .dot.reserved {
            background: #a3a3a3;
        }
        .dashboard-activity {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 24px;
            margin: 0 32px 32px 32px;
        }
        .dashboard-activity h4 {
            font-size: 1.08rem;
            font-weight: 600;
            margin-bottom: 12px;
        }
        .dashboard-activity ul {
            list-style: none;
            padding: 0;
        }
        .dashboard-activity ul li {
            font-size: 1rem;
            margin-bottom: 8px;
            color: #444;
            display: flex;
            align-items: center;
        }
        .dashboard-activity ul li:before {
            content: '•';
            color: #a3a3a3;
            margin-right: 8px;
        }
        .dashboard-footer {
            background: #f3f4f6;
            padding: 18px 0 12px 0;
            text-align: center;
            color: #444;
            font-size: 1.05rem;
            border-top: 1px solid #e5e7eb;
            margin-top: 18px;
        }
        .dashboard-footer-links {
            margin-top: 8px;
            font-size: 0.98rem;
        }
        .dashboard-footer-links a {
            color: #444;
            text-decoration: none;
            margin: 0 18px;
        }
        .dashboard-footer-links a:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            .dashboard-header {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                padding: 12px 8px 0 8px;
            }
            .dashboard-header .logo-img {
                height: 32px;
                margin-right: 8px;
            }
            .dashboard-header .logo {
                font-size: 1.08rem;
                margin-right: 0;
                font-weight: bold;
                color: #222;
            }
            .dashboard-header .user {
                margin-left: 0;
                gap: 8px;
                display: flex;
                align-items: center;
            }
            .dashboard-stats {
                flex-direction: column;
                gap: 12px;
                margin: 18px 0 12px 0;
            }
            .dashboard-stat {
                min-width: unset;
                width: 100%;
                padding: 16px 12px;
                font-size: 1rem;
            }
            .dashboard-actions {
                flex-direction: column;
                gap: 16px;
                margin: 0 auto 16px auto;
                align-items: center;
                justify-content: center;
            }
            .dashboard-actions a,
            .dashboard-actions button {
                width: 90%;
                max-width: 320px;
                margin: 0 auto;
                font-size: 1rem;
                padding: 14px 0;
                border-radius: 10px;
                box-shadow: 0 1px 4px rgba(0,0,0,0.04);
                display: block;
                text-align: center;
            }
            .dashboard-tags {
                flex-direction: row;
                gap: 10px;
                margin: 0 auto 14px auto;
                justify-content: center;
                width: 100%;
            }
            .dashboard-tag {
                padding: 7px 16px;
                font-size: 1rem;
                border-radius: 20px;
                text-align: center;
            }
            .dashboard-map {
                margin: 0 auto 14px auto;
                padding: 14px;
                max-width: 350px;
            }
            .dashboard-legend {
                flex-direction: row;
                gap: 14px;
                font-size: 1rem;
                justify-content: center;
                margin: 0 auto;
            }
            #mapBtn, #listBtn {
                width: 110px;
                margin: 0 6px 0 0;
                font-size: 1rem;
                border-radius: 10px;
                box-shadow: 0 1px 4px rgba(0,0,0,0.04);
                display: inline-block;
                text-align: center;
            }
            #listBtn {
                margin-right: 0;
            }
            .dashboard-activity {
                margin: 0 0 12px 0;
                padding: 12px;
            }
            .dashboard-activity h4 {
                font-size: 1rem;
            }
            .dashboard-activity ul li {
                font-size: 0.98rem;
            }
            .dashboard-footer {
                font-size: 0.98rem;
                padding: 12px 0 8px 0;
            }
            .dashboard-footer-links {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        <img src="../images/parklogo.png" alt="Parkwhiz Logo" class="logo-img">
        <span class="logo">Parkwhiz</span>
        <div class="user">
            <span><i class="fa fa-bell"></i></span>
            <a href="profile.php"><img src="../images/Screenshot 2025-09-08 062714.png" alt="User" style="cursor:pointer;"></a>
        </div>
    </div>
    <main class="main-content">
        <div class="dashboard-stats">
            <div class="dashboard-stat">
                <span class="stat-label">Available</span>
                <span class="stat-value">142</span>
                <span class="stat-icon" style="color:#4ade80;">&#9679;</span>
            </div>
            <div class="dashboard-stat">
                <span class="stat-label">Occupied</span>
                <span class="stat-value">89</span>
                <span class="stat-icon" style="color:#ef4444;">&#9679;</span>
            </div>
            <div class="dashboard-stat">
                <span class="stat-label">Reserved</span>
                <span class="stat-value">23</span>
                <span class="stat-icon" style="color:#a3a3a3;">&#9679;</span>
            </div>
            <div class="dashboard-stat">
                <span class="stat-label">Total</span>
                <span class="stat-value">254</span>
                <span class="stat-icon" style="color:#222;">&#128663;</span>
            </div>
        </div>
        <div class="dashboard-actions" style="display:fle;gap:24px;margin:0 0 24px 0;justify-content:center;flex-wrap:wrap;">
            <a href="reserve.php" style="background:#181818;color:#fff;text-decoration:none;font-size:1.08rem;font-weight:500;border-radius:10px;padding:14px 0;width:220px;text-align:center;box-sizing:border-box;display:inline-block;">Reserved Slot</a>
            <button type="button" style="background:#fff;color:#222;border:1px solid #eee;border-radius:10px;padding:14px 0;width:220px;font-size:1.08rem;font-weight:500;" onclick="window.location.href='scan.php'">Scan Plate</button>
            <button type="button" style="background:#fff;color:#222;border:1px solid #eee;border-radius:10px;padding:14px 0;width:220px;font-size:1.08rem;font-weight:500;" onclick="window.location.href='slots.php'">View My Slots</button>
        </div>
        <div class="dashboard-tags">
            <span class="dashboard-tag">R</span>
            <span class="dashboard-tag vip">VIP</span>
            <span class="dashboard-tag admin">Admin-Only</span>
        </div>
        <div style="display:flex; gap:12px; margin:0 32px 18px 32px; justify-content:center;"> 
            <button id="mapBtn" style="background:#222;color:#fff;border:none;border-radius:8px;padding:8px 24px;font-size:1rem;cursor:pointer;" onclick="showMap()">Map</button>
            <button id="listBtn" style="background:#fff;color:#222;border:1px solid #eee;border-radius:8px;padding:8px 24px;font-size:1rem;cursor:pointer;" onclick="showList()">List</button>
        </div>
        <div class="dashboard-map" id="mapSection">
            <div style="margin-bottom:12px;">
                <span style="display:inline-block;width:18px;height:18px;background:#e5e7eb;border-radius:4px;margin-right:6px;"></span>
                <span style="display:inline-block;width:18px;height:18px;background:#e5e7eb;border-radius:4px;margin-right:6px;"></span>
                <span style="display:inline-block;width:18px;height:18px;background:#e5e7eb;border-radius:4px;margin-right:6px;"></span>
                <span style="display:inline-block;width:18px;height:18px;background:#e5e7eb;border-radius:4px;margin-right:6px;"></span>
            </div>
            <img src="../images/Screenshot 2025-09-08 062249.png" alt="Map" />
            <div class="dashboard-legend">
                <span><span class="dot available"></span>Available</span>
                <span><span class="dot occupied"></span>Occupied</span>
                <span><span class="dot reserved"></span>Reserved</span>
            </div>
        </div>
        <div class="dashboard-map" id="listSection" style="display:none;">
            <h4>Parking Slot List</h4>
            <ul style="font-size:1rem;color:#444;">
                <li>Slot A-15 - Available</li>
                <li>Slot B-07 - Occupied</li>
                <li>Slot C-22 - Reserved</li>
                <li>Slot D-10 - Available</li>
                <li>Slot E-03 - Occupied</li>
            </ul>
        </div>
        <script>
            function showMap() {
                document.getElementById('mapSection').style.display = '';
                document.getElementById('listSection').style.display = 'none';
                document.getElementById('mapBtn').style.background = '#222';
                document.getElementById('mapBtn').style.color = '#fff';
                document.getElementById('listBtn').style.background = '#fff';
                document.getElementById('listBtn').style.color = '#222';
            }
            function showList() {
                document.getElementById('mapSection').style.display = 'none';
                document.getElementById('listSection').style.display = '';
                document.getElementById('listBtn').style.background = '#222';
                document.getElementById('listBtn').style.color = '#fff';
                document.getElementById('mapBtn').style.background = '#fff';
                document.getElementById('mapBtn').style.color = '#222';
            }
        </script>
        <div class="dashboard-activity">
            <h4>Recent Activity</h4>
            <ul>
                <li>Slot A-15</li>
                <li>Slot B-07</li>
                <li>Slot C-22</li>
            </ul>
        </div>
    </main>
    <footer class="dashboard-footer">
        &copy; 2025 Parkwhiz. All rights reserved.
        <div class="dashboard-footer-links" style="display:flex;justify-content:center;gap:18px;flex-wrap:wrap;">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Support</a>
        </div>
    </footer>
</body>
</html>
