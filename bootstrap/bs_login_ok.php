<?php

include '../oop/mysql/connectionDB.php';

$user_id = $_POST['user_id'];
$passwd = $_POST['passwd'];

$sql = "SELECT * FROM members WHERE user_id=:user_id AND passwd=:passwd";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':passwd', $passwd);

$stmt->execute();
$row = $stmt->fetch();

if ($row) {
    session_start();
    $_SESSION['user_id'] = $user_id;

    $arr = ['result' => 'success'];
    die(json_encode($arr));
} else {
    $arr = ['result' => 'fail'];
    die(json_encode($arr));
}