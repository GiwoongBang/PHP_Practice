<?php

include '../oop/mysql/connectionDB.php';
include 'pagination_lib.php';

$postPerPage = 10;
$pageRange = 5;
$currentPage = isset($_GET['page']) && $_GET['page'] != '' && is_numeric($_GET['page'])
    ? $_GET['page'] : 1;

$sql = "SELECT COUNT(*) totalPost FROM freeboards";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt->fetch();
$totalPost = $result['totalPost'];

$start = $postPerPage * ($currentPage - 1);

$sql = "SELECT idx, subject, author, rdate FROM freeboards LIMIT $start, $postPerPage;";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt->fetchAll();

echo "<table>";

foreach ($result as $row) {

    echo "
    <tr>
        <td>" . $row['idx'] . " </td>
        <td>" . $row['subject'] . " </td>
        <td>" . $row['author'] . " </td>
        <td>" . $row['rdate'] . " </td>

    ";
}

echo "</table>";

$rs_str = pagination($totalPost, $postPerPage, $pageRange, $currentPage);

echo $rs_str;