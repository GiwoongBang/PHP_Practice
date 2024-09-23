<?php
echo PHP_EOL;

/*
 * 정수 필터: FILTER_VALIDATE_INT
 * 실수 필터: FILTER_VALIDATE_FLOAT
 *
 * (단, 0인 경우 **잘못**된 값으로 인식되므로, 조건문에서 별도 처리 필요)
 */
$num = 66.6;
$f_num = filter_var($num, FILTER_VALIDATE_INT);

if ($f_num) {
    echo $num . ' 은(는) 유효한 값';
} else {
    echo $num . ' 은(는) **잘못**된 값';
}

echo '<br><br>' . PHP_EOL . PHP_EOL;

/*
 * IP 필터: FILTER_VALIDATE_IP
 */
$ip = '127.0.0.1 ';
$f_ip = filter_var($ip, FILTER_VALIDATE_IP);
if ($f_ip) {
    echo '유효한 IP: ' . $ip;
} else {
    echo '**잘못**된 IP: ' . $ip;
}

echo '<br><br>' . PHP_EOL . PHP_EOL;

/*
 * E-MAIL 필터: FILTER_VALIDATE_EMAIL
 */
$email = 'aaa@bbb.ccc';
$f_email = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($f_email) {
    echo '유효한 E-MAIL: ' . $email;
} else {
    echo '**잘못**된 E-MAIL: ' . $email;
}

echo '<br><br>' . PHP_EOL . PHP_EOL;

/*
 * URL 필터: FILTER_VALIDATE_URL
 */
$url = 'https://aaa.co.kr';
$f_url = filter_var($url, FILTER_VALIDATE_URL);
if ($f_url) {
    echo '유효한 URL: ' . $url;
} else {
    echo '**잘못**된 URL: ' . $url;
}

echo '<br><br>' . PHP_EOL . PHP_EOL;

/*
 * [ 필터 심화 ]
 * 정수 필터(심화): 정수 범위 설정 (단, 0인 경우 별도 처리 필요)
 */
$int = 1;
$min = 1;
$max = 1000;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" =>
        array("min_range" => $min, "max_range" => $max)))) {
    echo '유효한 범위: ' . $int;
} else {
    echo '**잘못**된 범위: ' . $int;
}

echo '<br><br>' . PHP_EOL . PHP_EOL;

/*
 * [ 필터 심화 ]
 * IP 필터(심화): IPv6 주소체계 필터
 */
$ipv6 = '001:0DB8:1000:0000:0000:0000:1111:2222';
$ipv6_prefix = '2001:DB8:1000::1111:2222';

if (filter_var($ipv6_prefix, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo '유효한 IPv6: ' . $ipv6_prefix;
} else {
    echo '**잘못**된 IPv6: ' . $ipv6_prefix;
}

echo '<br><br>' . PHP_EOL . PHP_EOL;

/*
 * [ 필터 심화 ]
 * URL 필터(심화): 쿼리 유무 필터
 */
$q_url = 'https://aaa.co.kr?';

if (filter_var($q_url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
    echo '쿼리가 존재하는 URL: ' . $q_url;
} else {
    echo '쿼리가 **존재하지 않는** URL: ' . $q_url;
}

echo '<br><br>' . PHP_EOL . PHP_EOL;

/*
 * [ 필터 심화 ]
 * ASCII 문자 외 필터: 127보다 큰 문자 제거
 * 원래 FILTER_SANITIZE_STRING 을 활용하면 됐지만, 8.0부터 deprecated 되었음
 */
$str = '<h1>Hello World!ʬ</h1>';

// html 태그를 제거하기 위한 strip_tags() 사용
$f_tag = strip_tags($str);
// 정규 표현식을 활용해 ASCII 문자 범위 외의 문자는 공백('') 으로 대체
$f_str = preg_replace('/[^\x00-\x7F]+/', '', $f_tag);

echo $f_str;

echo '<br><br>' . PHP_EOL . PHP_EOL;