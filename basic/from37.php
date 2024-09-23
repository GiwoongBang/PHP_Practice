<?php

// 파일 읽기
$file_r = "temp_w.txt";
if (file_exists($file_r)) {
    $pf_r = fopen($file_r, "r");
    if ($pf_r) {
        $fs_r = filesize($file_r);
        if (filesize($file_r) > 0) {
            $fr_r = fread($pf_r, $fs_r);
            if ($fr_r) {
                echo $fr_r;
                fclose($pf_r);
            } else {
                echo "손상된 파일입니다.";
            }

        } else {
            echo "파일 읽기에 실패했습니다. 다시 시도해 주세요.";
        }
    } else {
        echo "파일 열기에 실패했습니다. 다시 시도해 주세요.";
    }
} else {
    echo "존재하지 않는 파일입니다.";
}

// 파일 쓰기
$file_w = "temp_w.txt";

// "r" = 덮어쓰기, "a" = 추가하기, "a+" = 읽기/쓰기 모두 가능(그러나 활용도 낮음)
$pf_w = fopen($file_w, "a");
// <br> = 실제 줄 바꿈, PHP_EOL = 코드 상으로는 줄 바꿈이지만, 컴파일 된 것은 잘 바꿈 X
fwrite($pf_w, "Say, Hi~<br>" . PHP_EOL);
fclose($pf_w);