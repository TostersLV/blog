CREATE DATABASE sky;
USE sky; 

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user'
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each post
    title VARCHAR(255) NOT NULL,               -- Title of the post
    author VARCHAR(100) NOT NULL,              -- Author of the post
    text TEXT NOT NULL,                        -- Main content of the post
    image VARCHAR(255),                        -- Path or URL for an image (optional)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Automatically sets the timestamp
);