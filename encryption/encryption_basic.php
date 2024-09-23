<?php

// 단방향 암호화 함수

$password = 'bplus1234';
$wrong_password = 'wrong_password';

$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

echo $encrypted_password . '<br>';

if (password_verify($wrong_password, $encrypted_password)) {
    echo '<br>Password is valid!<br>';
} else {
    echo '<br>Wrong password!<br>';
}