<?php

// PHP 연관 배열 => JSON 변환
$age = [
    "A" => 10,
    "B" => 20,
    "C" => 30
];
echo json_encode($age);

echo "<br><br>";
// JSON => PHP 연관 배열 변환
$json = '{
   "D":40,"E":50,"F":60 
}';


$obj = json_decode($json, false); // false(기본값)는 객체 타입
echo $obj->E;

echo "<br>";

$arr = json_decode($json, true); // true는 배열 타입
echo $arr['D'] . '<br>';
foreach ($arr as $key => $value) {
    echo "Alphabet " . $key . "의 값은 " . $value . '<br>';
}
