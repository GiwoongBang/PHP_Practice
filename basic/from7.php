<?php

$str = "I'm Korean";
$str_1 = str_replace("Korean", "우주인", $str);
echo $str_1 . "<br>";
echo "<br>";

echo "파이: " . pi();
echo "<br><br>";

$x = "100.5";
if (is_numeric($x)) {
    echo "x는 숫자입니다<br>";
} else {
    echo "x는 숫자가 아닙니다.<br>";
}
echo "<br>";

echo "MAX: " . max(1, 2, 3, 4, 5) . "<br>";
echo "MIN: " . min(1, 2, 3, 4, 5) . "<br>";