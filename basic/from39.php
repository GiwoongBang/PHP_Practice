<?php

// 폴더의 파일 목록 불러오기
$dir_path = "./upload";

$dir_list = dir($dir_path);

while ($dir = $dir_list->read()) {
    if ($dir == "." || $dir == "..") {
        continue;
    }

    $pf = fopen($dir, "r");
    if ($pf) {
        $fs = filesize($dir);
        if ($fs > 0) {
            $fr = fread($pf, $fs);
            if ($fr) {
                echo $fr . "<br><br>" . PHP_EOL . PHP_EOL;
                fclose($pf);
            } else {
                echo "손상된 파일입니다.";
            }

        } else {
            echo "파일 읽기에 실패했습니다. 다시 시도해 주세요.";
        }
    } else {
        echo "파일 열기에 실패했습니다. 다시 시도해 주세요.";
    }
}

$dir_list->close();