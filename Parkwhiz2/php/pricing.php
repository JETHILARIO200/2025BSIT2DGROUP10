<?php
// pricing.php - Parkwhiz Pricing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            flex: 1;
        }
        .footer {
            margin-top: auto;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkwhiz Pricing</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
    <style>
        .pricing-toggle { display: flex; gap: 16px; justify-content: center; margin: 48px 0 32px 0; }
        .pricing-toggle button { background: #222; color: #fff; border: none; border-radius: 20px; padding: 8px 24px; font-size: 1rem; font-weight: 500; cursor: pointer; }
        .pricing-toggle button.active { background: #111; }
        .pricing-cards { display: flex; gap: 32px; justify-content: center; margin-bottom: 48px; flex-wrap: wrap; }
        .pricing-card { background: #fff; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); padding: 32px 24px; width: 260px; text-align: left; border: 1px solid #eee; display: flex; flex-direction: column; align-items: flex-start; }
        .pricing-card.vip { background: #222; color: #fff; border: none; }
        .pricing-card h3 { font-size: 1.1rem; font-weight: bold; margin-bottom: 12px; }
        .pricing-card .price { font-size: 2.2rem; font-weight: bold; margin-bottom: 4px; }
        .pricing-card .per { font-size: 1rem; color: #444; margin-bottom: 16px; }
        .pricing-card ul { list-style: none; padding: 0; margin-bottom: 24px; }
        .pricing-card ul li { font-size: 1rem; margin-bottom: 8px; color: inherit; }
        .pricing-card.vip ul li { color: #fff; }
        .pricing-card button { background: #222; color: #fff; border: none; border-radius: 6px; padding: 10px 0; width: 100%; font-size: 1rem; font-weight: 500; cursor: pointer; }
        .pricing-card.vip button { background: #eee; color: #222; }
        .pricing-card button:disabled { background: #222; opacity: 0.7; cursor: default; }
        .pricing-footer { background: #222; color: #fff; padding: 48px 0 0 0; margin-top: 48px; }
        .pricing-footer-content { max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 32px; justify-content: space-between; padding: 0 32px; }
        .pricing-footer-section { flex: 1 1 180px; min-width: 180px; margin-bottom: 24px; }
        .pricing-footer-section h4 { font-size: 1rem; font-weight: 700; margin-bottom: 12px; color: #fff; }
        .pricing-footer-section ul { list-style: none; padding: 0; }
        .pricing-footer-section ul li { margin-bottom: 6px; color: #cbd5e1; font-size: 0.98rem; }
        .pricing-footer-section ul li a {
            color: #cbd5e1;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.2s;
        }
        .pricing-footer-section ul li a:hover {
            color: #fff;
            text-decoration: none;
        }
        .pricing-footer-bottom { text-align: center; color: #cbd5e1; font-size: 0.95rem; padding: 18px 0 12px 0; border-top: 1px solid #334155; margin-top: 18px; }
        @media (max-width: 900px) {
            .pricing-footer, .pricing-footer-content, .pricing-footer-section {
                display: none !important;
            }
            .pricing-footer-bottom {
                display: block !important;
            }
            .pricing-cards { flex-direction: column; align-items: center; gap: 24px; }
            .pricing-card { width: 90vw; max-width: 340px; }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/nav.php'; ?>
    <main>
        <div class="pricing-toggle">
            <button class="active">Monthly</button>
            <button>Yearly</button>
            <button>Link</button>
        </div>
        <div class="pricing-cards">
            <div class="pricing-card">
                <h3>FREE PLAN</h3>
                <div class="price">$0 <span class="per">/mo</span></div>
                <ul>
                    <main class="main-content">
                    <li>Mobile app booking</li>
                    <li>Real-time spot updates</li>
                    <li>Basic support</li>
                    <li>License plate recognition</li>
                    <li>Contactless payments</li>
                </ul>
                <button disabled>Currently</button>
            </div>
            <div class="pricing-card">
                <h3>MEMBER</h3>
                <div class="price">$10 <span class="per">/mo</span></div>
                <ul>
                    <li>Everything in Free</li>
                    <li>Faster booking confirmations</li>
                    <li>Priority access during off-peak hours</li>
                    <li>Quicker support responses</li>
                    <li>License plate recognition (faster)</li>
                </ul>
                <button>Choose Member</button>
            </div>
            <div class="pricing-card vip">
                <h3>VIP</h3>
                <div class="price">$30 <span class="per">/mo</span></div>
                <ul>
                    <li>Everything in Member</li>
                    <li>Reserved VIP-only spots</li>
                    <li>Smart usage analytics</li>
                    <li>License plate recognition (premium speed & accuracy)</li>
                    <li>Premium support</li>
                </ul>
                <button>Choose VIP</button>
            </div>
            <div class="pricing-card">
                <h3>PREMIUM</h3>
                <div class="price">$50 <span class="per">/mo</span></div>
                <ul>
                    <li>Everything in VIP</li>
                    <li>Multiple users</li>
                    <li>24/7 support</li>
                    <li>Custom usage reports</li>
                    <li>Revenue insights</li>
                </ul>
                <button>Choose Premium</button>
            </div>
        </div>
    </main>
 
</body>

</html>
<?php include __DIR__ . '/footer.php'; ?>