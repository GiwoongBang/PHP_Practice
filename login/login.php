<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Company</title>
    <script src="login.js"></script>
</head>

<body>
    <h1>Login</h1>
    <form method="post" action="login_ok.php" name="login_form" autocomplete="off">
        <label for="">ID</label>
        <input type="text" name="id" id="id" placeholder="input ID">
        <br>
        <label for="">PW</label>
        <input type="password" name="pw" id="pw" placeholder="input PW">
        <br>
        <button id="login_btn">Login</button>
    </form>

    <a href="member.php">회원 전용 페이지로 가기</a>
</body>

</html>