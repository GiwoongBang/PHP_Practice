<?php

$str_arr = ["a", "b", "c", "d", "e", "f"];
print_r($str_arr);
echo "<br>";

$str = "a, b, c, d";
// 지정된 문자로 문자열 자른 후, 배열로 반환 (JAVA 기준, split()와 동일)
$arr = explode(", ", $str);
print_r($arr);
echo "<br><br>";

// 배열의 크기 반환
echo count($arr) . "<br>";

// 배열의 마지막 값 반환
echo end($str_arr) . "<br>";
echo end($arr) . "<br><br>";

// 활용 예시
$file_name = "temporary.txt";

$ext = getFileExt($file_name);
echo $ext . "<br>";

$file_name_2 = "new.temp.jpg";

$ext = getFileExt2($file_name_2);
echo $ext . "<br>";

function getFileExt($file_name)
{
    $file_name_arr = explode(".", $file_name);

    return end($file_name_arr);
}

function getFileExt2($file_name)
{
    $file_name_arr = explode(".", $file_name);
    $name_size = count($file_name_arr);

    return $file_name_arr[$name_size -1];
}

