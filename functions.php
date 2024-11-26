<?php


function login($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT password_hash FROM Users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password_hash'])) {
       
        return true;
    }
    return false;
}

function auth() {
    if (!isset($_SESSION["logged_in"])) {
        header("Location: /auth");
    }
}

function guest() {
    if (isset($_SESSION["logged_in"])) {
        header("Location: /");
    }
}

function adminAuth() {
    if ($_SESSION['role'] !== 'admin') {
        header("Location: /");
    }
}