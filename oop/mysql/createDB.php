<?php

$servername = "localhost";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // 구체적인 에러 메시지 확인하기 위해 아래 내용 추가 필수
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p>Connected successfully</p>";
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

try {
    $dbname = 'practice';
    $sql = "CREATE DATABASE $dbname"; // DB 생성
    $conn->exec($sql);
    echo "<p>DB has been created successfully</p>";
    echo "<p>DB Name: $dbname";
} catch (PDOException $e) {
    echo $e->getMessage();
}

try {
    $dbname = 'practice';
    $sql = "DROP DATABASE $dbname"; // DB 삭제
    $conn->exec($sql);
    echo "<p>DB has been deleted successfully</p>";
    echo "<p>DB Name: $dbname";
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;