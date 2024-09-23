<?php

$fruits = array("apple", "grape", "orange", "watermelon", "tomato");

sort($fruits);
print_r($fruits);
echo "<br>";

rsort($fruits);
print_r($fruits);
echo "<br><br>";

$brands = array(
    "hyundai" => "KOREA",
    "ford" => "AMERICA",
    "toyota" => "JAPAN",
    "audi" => "GERMANY");

ksort($brands);
echo "key 기준으로 오름차순: ";
print_r($brands);
echo "<br>";

krsort($brands);
echo "key 기준으로 내림차순: ";
print_r($brands);
echo "<br>";

asort($brands);
echo "value 기준으로 오름차순: ";
print_r($brands);
echo "<br>";

arsort($brands);
echo "value 기준으로 내림차순: ";
print_r($brands);
echo "<br><br>";
