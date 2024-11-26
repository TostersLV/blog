<?php

auth();
$title = "Home";

require 'Database.php';
$config = require 'config.php';
$db = new Database($config);

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$posts = $db->execute($sql, [])->fetchAll();

require "Views/index.view.php";