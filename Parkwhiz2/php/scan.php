

<?php // scan.php for Parkwhiz2 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Your License Plate - Parkwhiz</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div style="background:#181c22; color:#fff; padding:0; margin:0; width:100%;">
        <div style="display:flex; align-items:center; justify-content:space-between; height:55px; padding:0 32px;">
            <div style="display:flex; align-items:center;">
                <img src="../images/logo.png" alt="Parkwhiz Logo" style="height:32px;width:auto;vertical-align:middle;margin-right:8px;">
                <span style="font-size:1.15rem; font-weight:500; color:#fff;">Parkwhiz</span>
            </div>
            <div style="display:flex; align-items:center; gap:18px;">
                <img src="../images/Screenshot 2025-09-08 062714.png" alt="User" style="height:32px; border-radius:50%;">
            </div>
        </div>
    </div>
    <main class="main-content" style="flex:1;">
        <div style="max-width:600px;margin:32px auto 0 auto;">
            <a href="dashboard.php" style="display:inline-block;background:#222;color:#fff;padding:8px 22px;border-radius:8px;text-decoration:none;font-size:1rem;font-weight:500;margin-bottom:18px;">&larr; Back to Dashboard</a>
        </div>
        <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
            <div style="width:420px;background:#fff;border-radius:12px;box-shadow:0 4px 24px rgba(0,0,0,0.08);padding:32px 32px 24px 32px;margin-bottom:32px;">
                <h2 style="text-align:center;font-weight:500;margin-bottom:24px;">Scan Your License Plate</h2>
                <div style="border:2px dashed #ccc;border-radius:8px;height:140px;display:flex;flex-direction:column;align-items:center;justify-content:center;margin-bottom:24px;background:#f7f7f7;">
                    <i class="fa fa-camera" style="font-size:2.2rem;color:#888;margin-bottom:8px;"></i>
                    <div style="font-size:1.08rem;color:#444;font-weight:500;">Camera Scan Area</div>
                    <div style="font-size:0.98rem;color:#888;margin-top:6px;">Position your license plate in view</div>
                </div>
                <form class="scan-form" style="display:flex;flex-direction:column;gap:12px;margin-bottom:12px;">
                    <input type="text" placeholder="ABC-1234" name="plate" id="plate" style="height:44px;border-radius:6px;border:1.5px solid #e0e0e0;padding:0 14px;font-size:1.08rem;">
                    <button class="scan-btn" type="submit" style="height:44px;border-radius:6px;background:#333;color:#fff;font-size:1.08rem;font-weight:500;display:flex;align-items:center;justify-content:center;gap:8px;border:none;cursor:pointer;">
                        <i class="fa fa-search" style="font-size:1.1rem;"></i> Scan Plate
                    </button>
                </form>
                <div style="text-align:center;color:#888;font-size:0.98rem;margin-bottom:8px;">Please ensure your license plate is clearly visible for better scan results.</div>
                <div style="display:flex;justify-content:center;gap:18px;color:#888;font-size:0.97rem;margin-bottom:8px;">
                    <span>&#10003; Good lighting</span>
                    <span>&#10003; Clear visibility</span>
                    <span>&#10003; Steady camera</span>
                </div>
            </div>
            <div style="width:420px;background:#fff;border-radius:12px;box-shadow:0 4px 24px rgba(0,0,0,0.08);padding:24px 32px 18px 32px;">
                <h3 style="font-weight:500;margin-bottom:18px;">Recent Scans</h3>
                <ul style="list-style:none;padding:0;margin:0;">
                    <li style="display:flex;align-items:center;justify-content:space-between;padding:12px 0;border-bottom:1px solid #f0f0f0;font-size:1.08rem;">
                        <span><i class="fa fa-car" style="margin-right:8px;color:#888;"></i>ABC-1234</span>
                        <span style="color:#888;font-size:0.97rem;">2 hours ago</span>
                    </li>
                    <li style="display:flex;align-items:center;justify-content:space-between;padding:12px 0;border-bottom:1px solid #f0f0f0;font-size:1.08rem;">
                        <span><i class="fa fa-car" style="margin-right:8px;color:#888;"></i>XYZ-5678</span>
                        <span style="color:#888;font-size:0.97rem;">1 day ago</span>
                    </li>
                    <li style="display:flex;align-items:center;justify-content:space-between;padding:12px 0;font-size:1.08rem;">
                        <span><i class="fa fa-car" style="margin-right:8px;color:#888;"></i>DEF-9012</span>
                        <span style="color:#888;font-size:0.97rem;">3 days ago</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <footer class="dashboard-footer" style="background:#f3f4f6;padding:18px 0 12px 0;text-align:center;color:#444;font-size:1.05rem;border-top:1px solid #e5e7eb;margin-top:18px;">
        &copy; 2025 Parkwhiz. All rights reserved.
        <div class="dashboard-footer-links" style="display:flex;justify-content:center;gap:18px;flex-wrap:wrap;margin-top:8px;font-size:0.98rem;">
            <a href="#" style="color:#444;text-decoration:none;">Terms of Service</a>
            <a href="#" style="color:#444;text-decoration:none;">Privacy Policy</a>
            <a href="#" style="color:#444;text-decoration:none;">Contact Support</a>
        </div>
    </footer>
</body>
</html>
