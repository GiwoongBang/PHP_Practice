<?php

$brands = array("samsung", "hyundai", "kia");
$brands_copy = $brands;
$brands_type = ["samsung2", "hyundai2", "kia2"];

$brands_copy[0] = "bplus";

print_r($brands);
echo "<br>";
print_r($brands_copy);
echo "<br><br>";

foreach ($brands as $brand) {
    echo "brands 배열: " . $brand . " ";
}
echo "<br>";

foreach ($brands_type as $brand) {
    echo "brands_type 배열: " . $brand . " ";
}
echo "<br><br>";

// 기본 배열
$basic = array("samsung", "hyundai", "kia");

// 연관 배열
$related = array(
    "father" => 50,
    "mother" => 40,
    "sister" => 20
);

// 다차원 배열 (차종, 재고량, 판매량)
$multi = array(
    array("Volvo", 22, 10),
    array("bmw", 25, 4),
    array("benz", 12, 11)
);

echo $multi[0][0] . "의 재고는 " . $multi[0][1] . "<br>";

for ($row = 0; $row < 3; $row++) {
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $multi[$row][$col] . "</li>";
    }
    echo "</ul>";
}