<?php

echo "<p>날씨 정보</p>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.daum.net");
curl_setopt($ch, CURLOPT_URL, "http://echo.jsontest.com/temperature/-9.3/humidity/0.40/wind/3");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$arr = json_decode($response);
foreach ($arr as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
echo "<br>";

?>

<table border="1">
    <tr>
        <td>온도</td>
        <td><?= $arr->temperature; ?></td>
    </tr>
    <tr>
        <td>습도</td>
        <td><?= $arr->humidity; ?></td>
    </tr>
    <tr>
        <td>바람</td>
        <td><?= $arr->wind; ?></td>
    </tr>
</table>
