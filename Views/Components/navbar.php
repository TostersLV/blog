<?php require "Views/Components/head.php"?>
<link rel="stylesheet" href="Public/CSS/navbar.css">
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-hamburger" id="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="navbar-list" id="navbar-links">
            <li><a href="/">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/post">Post!</a></li>
            <li><a href="#">Value#1</a></li>
        </ul>
    </div>
</nav>


<script src="Public/JS/auth.js" defer></script>
<script src="Public/JS/navbar.js" defer></script>

<?php require "Views/Components/footer.php"?>
