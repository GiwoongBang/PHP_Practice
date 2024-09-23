<style>
    span {
        color: white;
        background-color: red;
    }

    * {
        line-height: 1;
        margin: 0;
    }

    h3 {
        color: lightgray;
    }
</style>

<?php

$string = "$12$ \-\ $25$";
$pattern = '/\$25/';
// ^A: A로 시작하는 문자열 찾기
// A$: A로 끝나는 문자열 찾기

// /str/i: 정규식 끝에 플래그(i)는 대소문자 구분 X
// /^\$/: 정규식에 사용되는 표현(ex. $)은 escape(\) 처리

echo "<h3>before:</h3>";
echo $string;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement = "<span>change</span>";

echo preg_replace($pattern, $replacement, $string);

echo "<br><br>========================================<br><br>";

$string2 = "Regular Expressions";
$pattern2 = '/^R..u/';
// /...../: 점 개수만큼 대체 문자로 변환. 점 개수를 채우지 못 하면 변환 X (14글자의 경우, 마지막 4글자는 문자 그대로 표현)
// /^R../: R로 시작하는 것을 찾고, 그 뒤의 문자 2개까지 찾기 (위의 경우, 맨 앞에 Re 까지)
// /^R..u/: R로 시작하는 것을 찾고, 그 뒤의 아무 문자 2개, 그 다음에 u가 이어지는 문자열 찾기 (위의 경우, 맨 앞에 Regu 까지)

echo "<h3>before:</h3>";
echo $string2;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement2 = "<span>====</span>";

echo preg_replace($pattern2, $replacement2, $string2);

echo "<br><br>========================================<br><br>";

$string3 = "How do you do?";
$pattern3 = '/[dH]../';
// /[](브라켓 또는 대괄호)/ 안의 각 문자를 모두 찾기 (위의 경우, o, y, u 모두 찾기)
// 물음표, 띄어쓰기(공백) 등도 가능
// [dH]../: d 또는 H를 찾고, 그 뒤의 문자 2개까지 찾기]
// [owy][yow]: 최소 2자 이상의 문자를 가진 문자열이고, o, w, y 중에 하나를 가진 곳을 찾고, 그 다음에 y, o, w 중에 하나를 만족하는 것 찾기

echo "<h3>before:</h3>";
echo $string3;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement3 = "<span>B</span>";

echo preg_replace($pattern3, $replacement3, $string3);

echo "<br><br>========================================<br><br>";

$string4 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$pattern4 = '/[A-Cf-i3-8]/';

echo "<h3>before:</h3>";
echo $string4;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement4 = "<span>B</span>";

echo preg_replace($pattern4, $replacement4, $string4);

echo "<br><br>========================================<br><br>";

$string5 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$pattern5 = '/[^a-zA-C]/';
// 대괄호 안의 캐럿(^)은 ~~로 시작하는 문자가 아닌, 해당 문자를 제외한 것을 찾기(NOT 개념)

echo "<h3>before:</h3>";
echo $string5;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement5 = "<span>B</span>";

echo preg_replace($pattern5, $replacement5, $string5);

echo "<br><br>========================================<br><br>";

$string6 = "Monday Tuesday Friday";
$pattern6 = '/...(i|es|n)day/';
// 서브 패턴(|) 버티컬 바를 기준으로 구분된 패턴(on 또는 day)을 모두 찾아서 변환

echo "<h3>before:</h3>";
echo $string6;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement6 = "<span>B</span>";

echo preg_replace($pattern6, $replacement6, $string6);

echo "<br><br>========================================<br><br>";

$string7 = "Monday Tuesday Friday";
$pattern7 = '/...(i|es|n)day/';
// 서브 패턴(|) 버티컬 바를 기준으로 구분된 패턴(on 또는 day)을 모두 찾아서 변환

echo "<h3>before:</h3>";
echo $string7;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement7 = "<span>B</span>";

echo preg_replace($pattern7, $replacement7, $string7);

echo "<br><br>========================================<br><br>";

$string8 = "aaaaaaaaaabc abc bc";
$pattern8 = '/a*/';
// 애스터리스크(*) 앞에 a가 0개 이상 (즉, 없거나, 1개 있거나, 많거나)
// 만약 a+라면, 앞에 a개 1개 이상(즉, 1개이거나, 2개이거나, 3개이거나, ...)
// 만약 a?라면, 앞에 a개 1개만 있거나, 없거나(즉, 1개이거나, 없거나)

echo "<h3>before:</h3>";
echo $string8;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement8 = "<span>B</span>";

echo preg_replace($pattern8, $replacement8, $string8);

echo "<br><br>========================================<br><br>";

$string9 = "One ring to bring them all an the darkness bind them";
$pattern9 = '/[els]{1, 3}/';
// 대괄호 안의 e, l, s 중 각각 1개에서 3개까지 있는 것 찾기
// 만약 {1, 3}을 {3,}으로 할 경우, 연속 3개 이상 찾기

echo "<h3>before:</h3>";
echo $string9;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement9 = "<span>B</span>";

echo preg_replace($pattern9, $replacement9, $string9);

echo "<br><br>========================================<br><br>";

$string10 = "AA ABA ABBA ABBBA";
$pattern10 = '/AB?A/';
// 위의 경우, A 와 A 사이에 B가 0개이거나, 1개이거나, 2개 이상인 경우. 위 예시 기준, 모두 가능
// 만약 B+인 경우, B가 0개인 경우를 제외하고 모두 가능
// 만약 B?인 경우, B가 0개이거나, 1개인 경우만 가능

echo "<h3>before:</h3>";
echo $string10;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement10 = "<span>B</span>";

echo preg_replace($pattern10, $replacement10, $string10);

echo "<br><br>========================================<br><br>";

$string11 = "AA ABA ABBA ABBBA";
$pattern11 = '/AB?A/';
// 위의 경우, A 와 A 사이에 B가 0개이거나, 1개이거나, 2개 이상인 경우. 위 예시 기준, 모두 가능
// 만약 B+인 경우, B가 0개인 경우를 제외하고 모두 가능
// 만약 B?인 경우, B가 0개이거나, 1개인 경우만 가능

echo "<h3>before:</h3>";
echo $string11;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement11 = "<span>B</span>";

echo preg_replace($pattern11, $replacement11, $string11);

echo "<br><br>========================================<br><br>";

$string12 = "<b>2</b> 3 4 <b>5 6 7</b>";
$string12_3 = "<p><em>정규표현식</em></p>이란? 특정한 규칙을 가진 문자열의 집합을 표현하는데 사용하는 형식 언어이다.<p>정규 표현식은 많은 텍스트 편집기와 중략이 있다.</p>";

$pattern12_1 = '/<b>(.*)<\/b>/';
$pattern12_2 = '/<b>(.*?)<\/b>/';
$pattern12_3 = '/<p>.*?<\/p>/';

// 탐욕적 수량자 (최대 반복): *, +, {n,} => 위의 경우, 2, 3, 4, 5, 6, 7, 8 모두 변환
// 게으른 수량자 (최소 반복): *?, +?, {n,}? => 위의 경우, 2, 5, 6, 7 변환
// 괄호 유무는 캡처 그룹 유무를 의미하며, 괄호가 여러 개인 경우 좌측부터 $1, $2, ... 순으로 파싱된 데이터 할당

echo "<h3>before:</h3>";
echo $string12;

echo "<p> &nbsp; </p>";

echo "<h3>after:</h3>";
$replacement12 = "<span>B</span>";

echo preg_replace($pattern12_1, $replacement12, $string12);
echo "<br><br>";
echo preg_replace($pattern12_2, $replacement12, $string12);
echo "<br><br>";
echo preg_replace($pattern12_3, $replacement12, $string12_3);
echo "<br><br>";