<?php
guest();

require "Database.php";
$config = require ("config.php");

$query = "SELECT * FROM Users";
$params = [];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database($config);
    $errors = [];


    $query = "SELECT * FROM Users WHERE username = :username";
    $params = [
        ":username" => $_POST["username"]
    ];

    $result = $db->execute($query, $params)
                 ->fetch();

    if($result) {
        $errors["username"] = "Username already exists";
    }

    if(empty($errors)) {
        $query = "INSERT INTO Users (username, password_hash ) VALUES (:username, :password_hash)";
        $params = [
        ":username" => $_POST["username"],
        ":password_hash" => password_hash($_POST["password_hash"], PASSWORD_BCRYPT),
        ];
        $db->execute($query, $params);
        header("Location: /login");
        die();
    }
}

$title = "Register";
require "Views/Auth/register.view.php";