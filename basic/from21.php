<?php

function superGlobal() {
    echo $GLOBALS["globalVar"] = "This is local and super variable";
}

superGlobal();
echo "<br><br>";
echo $_SERVER["PHP_SELF"] . "<br>";

$uAgent = $_SERVER["HTTP_USER_AGENT"];
if (strpos($uAgent, "Chrome") !== false) {
    echo "Chrome User<br>";
} else {
    echo "Other Browser<br>";
}

echo "당신의 IP는 " . $_SERVER["REMOTE_ADDR"] . "입니다.<br>";
echo "당신의 SERVER_ADMIN은 " . $_SERVER["SERVER_ADMIN"] . "입니다.<br>";
echo "당신의 SERVER_NAME은 " . $_SERVER["SERVER_NAME"] . "입니다.<br>";

?>

<br>
<a href="<?= $_SERVER["PHP_SELF"]; ?>?a=b">b값을 가져오기</a>