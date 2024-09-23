<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "practice";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

try {
    $sql = "INSERT INTO guests(firstname, lastname, email)
            VALUES('John', 'Doe', 'john@doe.com')";

    $conn->exec($sql);

    echo "New record created successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

$conn = null;