<?php
// login.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Parkwhiz</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/main.js"></script>
</head>
<body>
    <?php include __DIR__ . '/nav.php'; ?>
    <main class="main-content">
        <div class="login-container">
            <form method="post" action="#">
                <label class="login-label" for="email">Email</label>
                <input class="login-input" type="email" id="email" name="email" placeholder="Value" required>
                <label class="login-label" for="password">Password</label>
                <input class="login-input" type="password" id="password" name="password" placeholder="Value" required>
                <button class="login-btn" type="submit" onclick="window.location.href='dashboard.php'; return false;">Sign In</button>
            </form>
            <a class="login-link" href="#">Forgot password?</a>
        </div>
    </main>
    <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
