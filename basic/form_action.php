<?php

print_r($_POST);
echo "<br><br>";

echo "제목: " . $_POST["subject"] . "<br>";
echo "내용: " . $_POST["content"] . "<br>";
echo "암호: " . $_POST["password"] . "<br>";

?>