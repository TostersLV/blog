<?php 
require "Views/Components/head.php"; ?>
<link rel="stylesheet" href="Public/CSS/login.css">
</head>
<body>

    <div class="login-container">
        
        
        <div class="back-to-home">
            <a href="/" class="back-arrow">&#8592;</a>
        </div>

        <h2>Login</h2>

       
        <?php if (!empty($error)): ?>
            <p class="error-message"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        
        <?php if (!empty($success)): ?>
            <p class="success-message"><?php echo htmlspecialchars($success); ?></p>
        <?php endif; ?>

        <form action="/login" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <p>Don't have an account? <a href="/register">Register here</a></p>
        </form>
    </div>

<?php require "Views/Components/footer.php"; ?>