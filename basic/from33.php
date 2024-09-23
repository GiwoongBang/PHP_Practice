<?php

echo "날짜 및 시간 전체 표현<br>";
echo "[ 2024-01-01 12:12:12 ] : " . date("Y-m-d H:i:s") . "<br>";
echo "<br>연 단위 표현<br>";
echo "[ 2024 ] : " . date("Y") . "<br>";
echo "[ 24 ] : " . date("y") . "<br>";
echo "<br>월 단위 표현<br>";
echo "[ Jan ~ Dec ] : " . date("M") . "<br>";
echo "[ 01 ~ 12 ] : " . date("m") . "<br>";
echo "[ 1 ~ 12 (월 + 앞에 한 자리 수는 0 제외) ] : " . date("n") . "<br>";
echo "<br>일 단위 표현<br>";
echo "[ 01 ~ 31 ] : " . date("d") . "<br>";
echo "[ 1 ~ 31 (일 + 앞에 한 자리 수는 앞에 0 제외) ] : " . date("j") . "<br>";
echo "<br>요일 표현<br>";
echo "[ Mon ~ Sun ] : " . date("D") . "<br>"; // Mon ~ Sun
echo " [ 1(Mon) ~ 7(Sun) ] : " . date("N") . "<br>";

switch(date("N")) {
    case 1: $yoil = "월요일"; break;
    case 2: $yoil = "화요일"; break;
    case 3: $yoil = "수요일"; break;
    case 4: $yoil = "목요일"; break;
    case 5: $yoil = "금요일"; break;
    case 6: $yoil = "토요일"; break;
    case 7: $yoil = "일요일"; break;
}
echo "오늘은 $yoil 입니다.";