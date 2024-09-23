<?php

$servername = "localhost";
$username = "root";
$password = "1234";

//$conn = new mysqli($servername, $username, $password); // 객체 지향
//$conn = mysqli_connect($servername, $username, $password); // 절차 지향
//
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} else {
//    echo "DB Connection succeeded";
//}

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "DB Connection failed: " . $e->getMessage();
}