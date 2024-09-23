<?php

require '../oop/mysql/connectionDB.php';

if ($_POST['mode'] == 'input') {
    $subject = $_POST['subject'];

    $sql = "INSERT INTO todolists (subject) VALUES (:subject)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':subject', $subject);
    $result = $stmt->execute();

    if ($result) {
        echo "
    <script>
//        alert('새로운 할 일을 등록했어요.');
        self.location.href='todolist_main.php';
    </script>
    ";
    } else {
        echo "
    <script>
        alert('할 일 등록에 실패했어요. 다시 한번 시도해 주세요.');
        history.back();
    </script>
    ";
    }
} else if ($_POST['mode'] == 'done') {
    do_undo($_POST['idx'], 1);

} else if ($_POST['mode'] == 'ongoing') {
    do_undo($_POST['idx'], 0);
} else if ($_POST['mode'] == 'delete') {
    $sql = "DELETE FROM todolists WHERE idx=:idx";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idx', $_POST['idx']);
    $stmt->execute();

    echo "
    <script>
        self.location.href='./todolist_main.php';
    </script>
    ";
}

function do_undo($idx, $status)
{
    global $conn;

    $sql = "UPDATE todolists SET status=:status WHERE idx=:idx";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':idx', $idx);
    $stmt->bindParam(':status', $status);
    $stmt->execute();

    echo "
    <script>
        self.location.href='./todolist_main.php';
    </script>
    ";
}