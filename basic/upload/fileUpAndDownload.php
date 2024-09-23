<?php

// File Upload
echo "파일명은 " . $_FILES["u_file"]["name"] . "이고,<br>";
echo "파일 용량은 " . $_FILES["u_file"]["size"] . "입니다.<br>";
echo "<br>";

$t_file = "./upload/" . $_FILES["u_file"]["name"];
move_uploaded_file($_FILES["u_file"]["tmp_name"], $t_file);

// File Download
$filepath = "temp.txt";

// Get file size
$filesize = filesize($filepath);

$filename = "temp.txt";

// Set header: Content-type
header("Content-type: application/octet-stream");
// Set header: Content-Disposition(=Set downloaded file name)
header("Content-Disposition: attachment; filename=$filename");
header("Content-transfer-Encoding: binary");
// Set file size
header("Content-Length: $filesize");

ob_clean();
// Clean buffer
flush();
// Read & Print file
readfile($filepath);