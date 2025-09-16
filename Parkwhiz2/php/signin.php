
<?php
// signin.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Parkwhiz</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/main.js"></script>
</head>
<body>
    <?php include __DIR__ . '/nav.php'; ?>
    <main class="main-content">
        <div class="signin-container">
            <form method="post" action="#">
                <label class="signin-label" for="email">Email</label>
                <input class="signin-input" type="email" id="email" name="email" placeholder="Value" required>
                <label class="signin-label" for="password">Password</label>
                <input class="signin-input" type="password" id="password" name="password" placeholder="Value" required>
                <div class="signin-checkbox">
                    <input type="checkbox" id="show-password" onclick="togglePassword()" checked>
                    <label for="show-password ">show password</label>
                </div>
               
                <button class="signin-btn" type="submit">Register</button>
            </form>
        </div>
    </main>
    <?php include __DIR__ . '/footer.php'; ?>
    <script>
        function togglePassword() {
            var pwd = document.getElementById('password');
            var cb = document.getElementById('show-password');
            pwd.type = cb.checked ? 'text' : 'password';
        }
    </script>
</body>
</html>
<?php
// signin.php for Parkwhiz2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Parkwhiz</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/main.js"></script>
</head>
<body>
    <?php include __DIR__ . '/nav.php'; ?>
    <main class="main-content">
        <div class="signin-container">
            <form method="post" action="#">
                <label class="signin-label" for="email">Email</label>
                <input class="signin-input" type="email" id="email" name="email" placeholder="Value" required>
                <label class="signin-label" for="password">Password</label>
                <input class="signin-input" type="password" id="password" name="password" placeholder="Value" required>
                <div class="signin-checkbox">
                    <input type="checkbox" id="show-password" onclick="togglePassword()" checked>
                    <label for="show-password ">show password</label>
                </div>
               
                <button class="signin-btn" type="submit">Register</button>
            </form>
        </div>
    </main>
    <?php include __DIR__ . '/footer.php'; ?>
    <script>
        function togglePassword() {
            var pwd = document.getElementById('password');
            var cb = document.getElementById('show-password');
            pwd.type = cb.checked ? 'text' : 'password';
        }
    </script>
</body>
</html>
