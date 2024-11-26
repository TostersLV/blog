<?php 
auth();
$title = "Profile";
require 'Database.php';

// Database connection
$config = require 'config.php';
$db = new Database($config);

$user_id = $_SESSION['user_id'];

// Retrieve the current username, role, and password_hash from the database
// We'll use the execute method from the Database class
$user_stmt = $db->execute("SELECT username, role, password_hash FROM Users WHERE id = :id", [':id' => $user_id]);
$user = $user_stmt->fetch(PDO::FETCH_ASSOC);
$current_username = $user['username'];
$current_role = $user['role'];
$current_password_hash = $user['password_hash'];

$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Check if the username is unique (excluding the current user's id)
    $check_user_stmt = $db->execute("SELECT id FROM Users WHERE username = :username AND id != :id", [':username' => $username, ':id' => $user_id]);
    $existing_user = $check_user_stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_user) {
        $error_message = "This username is already taken.";
    } else {
        // Prepare an update query with placeholders
        $query = "UPDATE Users SET username = :username";
        $params = [':username' => $username, ':id' => $user_id];

        // If a new password is provided, hash and include it in the query
        if (!empty($password)) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $query .= ", password_hash = :password_hash";
            $params[':password_hash'] = $password_hash;
        }

        // Complete the query and execute
        $query .= " WHERE id = :id";
        $db->execute($query, $params);

        // Update the session with the new username if changed
        $_SESSION['username'] = $username;

        // Redirect to the profile page after update
        header("Location: /profile");
        exit;
    }
}

require "Views/profile.view.php";