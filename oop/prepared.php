<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "practice";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

try {
    $stmt = $conn->prepare("INSERT INTO guests (firstname, lastname, email)
                                VALUES (:firstname, :lastname, :email)");

    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    $firstname = 'John';
    $lastname = 'Doe';
    $email = 'john@doe.com';
    $stmt->execute();

    $firstname = 'Tom';
    $lastname = 'Lee';
    $email = 'lee@tom.com';
    $stmt->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;