<?php

include 'practicePlusDBConnection.php';

$idx = $_GET['idx'];

$sql = "SELECT * FROM board WHERE idx={$idx}";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['subject']; ?></title>
</head>

<body>
    <p>제목: <?php echo $row['subject']; ?></p>
    <p><?php echo nl2br($row['content']); ?></p>
</body>

</html>
