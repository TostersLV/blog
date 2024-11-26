<?php require "Views/Components/head.php"; ?>

<link rel="stylesheet" href="Public/CSS/auth.css">
<script src="Public/JS/auth.js" defer></script>

<div class="auth-card">
    <!-- Left Section -->
    <div class="left-section">
        <img src="Views/Images/nature.png">
        <div class="welcome-text">Welcome Dauni!</div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
        <h4>Welcome Dauni</h4>
        <div class="button-container">
            <form action="/login">
                <button type="submit" class="login-button">Login</button>
            </form>
            <form action="/register">
                <button type="submit" class="register-button">Register</button>
            </form>
        </div>
    </div>
</div>

<?php require "Views/Components/footer.php"; ?>
