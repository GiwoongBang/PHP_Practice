<?php

include 'practicePlusDBConnection.php';

print_r($_POST);

$subject = $_POST['subject'];
$content = $_POST['content'];
$date = date("Y-m-d H:i:s");

try {
    $sql = "INSERT INTO board(subject, content, rdate)
         VALUES('{$subject}', '{$content}', NOW())";

    $conn->exec($sql);
} catch (PDOException $e) {
    $e->getMessage();
}

try {
    $last_id = $conn->lastInsertId();
    echo "
        <script>
            self.location.href='practicePlusView.php?idx=" . $last_id . "'
        </script>
        ";
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conn = null;