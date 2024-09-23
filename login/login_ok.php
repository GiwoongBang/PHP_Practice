<?php

$id = (isset($_POST['id']) && $_POST['id'] != '') ? $_POST['id'] : '';
$pw = (isset($_POST['pw']) && $_POST['pw'] != '') ? $_POST['pw'] : '';

if ($id == '' || $pw == '') {
    echo "
    <script>
        alert('ID 또는 PW를 입력해 주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}

if ($id == 'guest' && $pw == '1234') {
    session_start();

    $_SESSION['ss_id'] = $id;

    echo "
    <script>
        alert('Success!');
        self.location.href='member.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Failed! Check your ID and Password');
        self.location.href='login.php';
    </script>
";
}