<?php require "Views/Components/head.php"; ?>
<link rel="stylesheet" href="Public/CSS/register.css">
</head>
<body>
    
    <div class="register-container">
        <div class="back-to-home">
            <a href="/" class="back-arrow">&#8592;</a>
        </div>

        <h2>Register</h2>

        <form action="/register" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required>
               
                <?php if (!empty($errors["username"])): ?>
                    <p class="error-message"><?php echo htmlspecialchars($errors["username"]); ?></p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="password_hash">Password</label>
                <input type="password" name="password_hash" id="password_hash" placeholder="Enter your password" required>
                
                <?php if (!empty($errors["password_hash"])): ?>
                    <p class="error-message"><?php echo htmlspecialchars($errors["password_hash"]); ?></p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
            <p> <a href="/login">Login</a></p>
        </form>
    </div>

<?php require "Views/Components/footer.php"; ?>