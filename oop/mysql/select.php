<?php

include 'connectionDB.php';

$sql = "SELECT * FROM guests";

$stmt = $conn->prepare($sql); // include를 통해서 $conn 가져오므로, 컴파일 오류 무시
$stmt->execute();
$rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>
        <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        </tr>";

foreach ($rs as $row) {
    echo "<tr>
        <td>" . $row['firstname'] . "</td>
        <td>" . $row['lastname'] . "</td>
        <td>" . $row['email'] . "</td>
        </tr>";
}

$conn = null;