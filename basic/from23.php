<?php

echo "<h1>GET 결과</h1>";
print_r($_GET);
echo "<br>";
echo "name: " . $_GET["name"] . "<br>";
echo "company: " . $_GET["company"] . "<br><br>";

echo "<h1>POST 결과</h1>";
print_r($_POST);
echo "<br>";
echo "name: " . $_POST["name"] . "<br>";
echo "company: " . $_POST["company"] . "<br><br>";

echo "====================================================<br><br>";

echo "<h1>REQUEST 결과</h1>";
print_r($_REQUEST);
echo "<br>";
echo "name: " . $_REQUEST["name"] . "<br>";
echo "company: " . $_REQUEST["company"] . "<br><br>";
echo "name, company 등 GET, POST 방식 모두를 포함해서 사용 가능<br>";
echo "특히 GET, POST 뿐만 아니라, COOKIE 정보도 한번에 조회<br><br>";