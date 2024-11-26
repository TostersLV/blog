<?php require "Components/head.php"; ?>
<?php require "Components/navbar.php"; ?>

<link rel="stylesheet" href="Public/CSS/profile.css">
<div class="box">
    <h1>Profile</h1>

    <h1>Hello, <?php echo htmlspecialchars($current_username); ?> (<?php echo htmlspecialchars($current_role); ?>)</h1>

    <form action="/profile" method="POST">
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" >
        <?php if (!empty($error_message)): ?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php endif; ?>

        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" >

        <button type="submit">Update</button>
    </form>
</div>

<style>
    .error {
        color: red;
    }
</style>

<?php require "Components/footer.php"; ?>