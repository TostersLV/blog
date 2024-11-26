<?php
require 'Database.php';
$config = require 'config.php';
$db = new Database($config);

// Check if the user is logged in and retrieve their username
$current_username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $current_username; // Set author to the current user's username
    $text = $_POST['text'];
    $image = file_get_contents($_FILES['image']['tmp_name']);

    $sql = "INSERT INTO posts (title, author, text, image) VALUES (?, ?, ?, ?)";
    
    if ($db->execute($sql, [$title, $author, $text, $image])) {
        header("Location: /");
        exit();
    } else {
        echo "Failed to insert post.";
    }
}

require "Views/post.view.php";
?>
