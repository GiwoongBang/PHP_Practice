<?php

$servername = "localhost";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=practice", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Connected successfully</p>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Create Table
try {
    $sql = "CREATE TABLE guests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    $conn->exec($sql);
    echo "<p>Table created successfully</p>";
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;