<?php

$a = -33;
$abs_a = abs($a);

echo "a의 절댓값: " . $abs_a . "<br>";
echo "<br>";

$b = 4;
$sqrt_b = sqrt($b);

echo "b의 제곱근: " . $sqrt_b . "<br>";
echo "<br>";

$c = 2.35;
$round_c = round($c);

echo "c의 반올림: " . $round_c . "<br>";
echo "<br>";

$d = rand(1, 100);
echo "d의 난수: " . $d . "<br>";
echo "<br>";

define("GREETING", "안녕하세요");
echo "상수(const) 선언(변수명: GREETING) 및 할당 결과: " . GREETING . "<br>";
echo "<br>";
