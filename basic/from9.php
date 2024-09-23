<?php

$a = 8 + 4;
$b = 8 - 4;
$c = 8 * 4;
$d = 8 / 4;
$e = 9 / 7;
$f = 8 % 4;
$g = 9 % 7;
$h = 2 ** 3;

echo "8 + 4 = " . $a . "<br>";
echo "8 - 4 = " . $b . "<br>";
echo "8 * 4 = " . $c . "<br>";
echo "8 / 4 = " . $d . "<br>";
echo "9 / 7 = " . $e . "<br>";
echo "8 % 4 = " . $f . "<br>";
echo "9 % 7 = " . $g . "<br>";
echo "2^3 = " . $h . "<br>";
echo "<br>";

$replace = 5;
$a = $replace;
$replace--;
echo "1. 기존 값 확인: a = 12, replace = 5<br>";
echo "2. a에 replace 할당<br>";
echo "3. a 값 확인: " . $a . "<br>";
echo "4. replace--;<br>";
echo "5. replace 값 확인: " . $replace . "<br>";
echo "<br>";

$first = 10;
$second = 2;
$first += $second;

echo "1. 기존 값 확인: first = 10, second = 2<br>";
echo "2. first + second = " . $first . "<br>";
echo "3. second = " . $second . "<br>";
echo "<br>";
