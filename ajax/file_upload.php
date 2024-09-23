<?php

// 파일 여러 개 업로드
if (is_array($_FILES['photo']['tmp_name'])) {
    $cnt = count($_FILES['photo']['tmp_name']);
    $rs_arr = [];
    for ($i = 0; $i < $cnt; $i++) {
        copy($_FILES['photo']['tmp_name'][$i], "../uploads/" . $_FILES['photo']['name'][$i]);
        $rs_arr[] = "../uploads/" . $_FILES['photo']['name'][$i];
    }

    $arr = array("result" => "success", "img" => implode('|', $rs_arr));

    die(json_encode($arr));

}
// 단일 파일 업로드
else {
    copy($_FILES['photo']['tmp_name'], "../uploads/" . $_FILES['photo']['name']);

    $arr = array("result" => "success", "img" => "../uploads/" . $_FILES['photo']['name']);

    die(json_encode($arr));
}
