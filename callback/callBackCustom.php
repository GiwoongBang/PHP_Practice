<?php

function exclaim($str) {
    return '<br>' . $str . ' exclaim 출력 완료!<br>';
}

function ask($str) {
    return '<br>' . $str . ' aks 출력 완료!<br>';
}

function printFormatted($str, $format) {
    /*매개변수는 단순 변수처럼 보이지만,
    구현부에서 $format()처럼 괄호를 통해 format은 함수라는 것을 알 수 있음
    */
    echo $format($str);
}

/*
 * $format 매개변수 자리에 'exclaim'이라는 String 값이 들어가면
 * printFormatted 함수 내부에서 exclaim() 이라는 함수로 변환되면서
 * exclaim($str) 형태가 됨.
 * 아래의 경우 exclaim('1차 테스트') 형태가 되어 exclaim 함수 호출
 */
printFormatted('1차 테스트', 'exclaim');
printFormatted('2차 테스트', 'ask');