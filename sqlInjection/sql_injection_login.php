<?php

include '../oop/mysql/connectionDB.php';

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM members WHERE user_id=:user_id AND passwd=:pw";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_id', $id);
$stmt->bindParam(':pw', $pw);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    session_start();
    $_SESSION['user_id'] = $id;
} else {
    exit;
}