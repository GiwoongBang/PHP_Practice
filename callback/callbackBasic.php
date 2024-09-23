<?php

function my_callback($item) {
    return strlen($item);
}

$brands = ["apple", "samsung", "xiaomi", "motorola"];
$lengths = array_map("my_callback", $brands);

print_r($lengths);