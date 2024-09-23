<?php

include 'connectDB.php';

try {
    $create_db = "
    CREATE DATABASE `plus`;";

    $conn->exec($create_db);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $create_table = "
    CREATE TABLE `members` (
    idx INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id VARCHAR(50) DEFAULT '',
    rdate DATETIME,
    PRIMARY KEY(idx)
    );";

    $conn->exec($create_table);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}