<?php

require_once('connectDB.php');

$user_id = $_GET['user_id'];

$sql = "SELECT COUNT(*) cnt FROM members WHERE user_id ='" . $user_id . "'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$row = $stmt->fetch();

$arr = array("result" => $row['cnt'] ? "exist" : "not_exist");

die(json_encode($arr));