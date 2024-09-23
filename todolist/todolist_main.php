<?php

require '../oop/mysql/connectionDB.php';


$sql = "SELECT * FROM todolists ORDER BY idx DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>

    <script src="todolist.js"></script>
</head>

<body>
<form method="post" name="todolist_form" action="todolist_ok.php">
    <input type="hidden" name="mode" value="input">
    할 일: <input type="text" name="subject" id="subject" autocomplete="off">
    <input type="button" id="todolist_btn" value="등록">
</form>

<table border="1">
    <?php
    foreach ($result as $row) {
        if ($row['status'] == 1) {
            $class = "width='200' style='text-decoration:line-through'";
            $btn = "<button onclick='uncheckTodolist(" . $row['idx'] . ")'>취소</button>";
        } else {
            $class = "width='200'";
            $btn = "<button onclick='checkTodolist(" . $row['idx'] . ")'>확인</button>";
        }

        echo "
            <tr>
                <td $class>" . $row['subject'] . "</td>
                <td width='40'>" . $btn . "</td>
                <td width='40'><button onclick='deleteTodolist(" . $row['idx'] . ")'>삭제</td>
            </tr>
                ";
    }
    ?>

</table>

<form method="post" id="multi_form" action="./todolist_ok.php">
    <input type="hidden" name="idx" value="">
    <input type="hidden" name="mode" value="">
</form>
</body>

</html>
