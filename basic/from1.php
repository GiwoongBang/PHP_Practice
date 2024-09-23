<?php

$x = 11;
$y = 9;
$z = 10.5;

$str_en = "PHP FUN";
$str_kr = "재미있는 PHP";
$str_en_len = strlen($str_en);
$str_kr_len = strlen($str_kr);

$email = "aaa@gmail.com";

echo "<h1>$str_en</h1>";
echo "<h3>Hello World!</h3>";

echo "I'm " . ($x + $y) . " years old<br>";
echo "My Email is: " . $email . "<br>";
var_dump($z);
echo "<br><br>";

echo "str_en's length: $str_en_len<br>";
echo "str_kr's length: $str_kr_len<br>";
echo "<br>";

echo "영어 단어 수 세기(가능) " . str_word_count($str_en) . "<br>";
echo "한국어 단어 수 세기(불가) " . str_word_count($str_kr) . "<br>";
echo "<br>";

echo "영어 문자열 뒤집기(가능): " . strrev($str_en) . "<br>";
echo "한국어 문자열 뒤집기(불가): " . strrev($str_kr) . "<br>";
echo "<br>";

echo "찾는 단어 시작점(0부터 시작): " . strpos($email, "@") . "<br>";
if (strpos($email, "@")) {
    echo "이메일 유효성 검사 통과(사실상 @@@ 이런 것도 true이므로 실제 통과는 아님)<br>";
} else {
    echo "이메일 유효성 검사 실패<br>";
}
echo "<br>";

function myTest()
{
    $x = 3;
    echo "내부 변수 x 출력값: $x";
    echo "<br>";
    $x++;
    echo "내부 변수 x 증가 출력값: $x";
    echo "<br>";
}
