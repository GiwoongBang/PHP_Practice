<?php

/*
 * 문자열 결합
 */
$str = "안녕222";
$str .= "하세요 ";
$str .= "비플러스입니다.";

echo $str;
echo "문자열 결합 '.' 사용 // '.=' 사용하면 JAVA의 .append()처럼 문자열 이어 붙이기 가능<br><br>";


/*
 * while, do-while
 */
$a = 4;
do {
    echo "<h2>$a 출력</h2>";
    $a++;
} while ($a < 10);
echo "<br>";

/*
 * for, foreach
 */
for ($i = 1; $i < 5; $i++) {
    echo "<h2>for $i 출력</h2>";
}
echo "<br>";

$arr = array(1, 2, 3, 4);
foreach ($arr as $num) {
    echo "<h2>foreach $num 출력</h2>";
}
echo "<br>";

$array = array(
    1 => "apple",
    2 => "banana",
    3 => "strawberry",
    4 => "orange");
foreach ($array as $key => $val) {
    echo "<h3>key, value로 출력: $val</h3><br>";
    echo "<h3>배열명[index]로 출력: $array[$key]</h3><br>";
}