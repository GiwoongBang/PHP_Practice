<?php

/*
 * 상단에 declare(strict_types=1); 선언해두면 파일 단위로 JAVA처럼 타입 엄격하게 검사
 * Ex. 23 라인에 numA 값이 '문자열'로 입력되어도 return 15가 되지만,
 * declare를 선언하면 addNum의 1번째 매개변수가 int라고 명시되어 있으므로 String이 입력되면 Fatal error 발생
 */

function getTitle()
{
    echo "<h1>This is Title</h1>";

    return 3;
}

$getTitle = getTitle();
echo $getTitle;


function addNum(int $numA, $numB)
{
    echo "numA (" . $numA . ") + numB (" . $numB . ") = " . ($numA + $numB) . "<br>";
}

addNum("10", 5);
addNum(20, 5);
addNum(30, 5);
addNum(40, 5);

