<?php

session_start();

if (!isset($_SESSION['ss_id']) || $_SESSION['ss_id'] == '') {
    echo "
    <script>
        alert('회원 전용 페이지입니다. 로그인 후 이용해 주세요.');
        self.location.href='login.php';
    </script>
    ";
    exit;
}

?>

<p>회원 전용 페이지(Member-only page)</p>

<a href="logout.php">Logout</a>