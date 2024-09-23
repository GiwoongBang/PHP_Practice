<?php

include '../oop/mysql/connectionDB.php';
include 'pagination_lib.php';

$postPerPage = 5;
$pageRange = 5;
$currentPage = isset($_GET['page']) && $_GET['page'] != '' && is_numeric($_GET['page'])
    ? $_GET['page'] : 1;

$sql = "SELECT COUNT(*) totalPost FROM freeboards";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt->fetch();
$totalPost = $result['totalPost'];

$start = $postPerPage * ($currentPage - 1);

$sql = "SELECT idx, subject, author, rdate FROM freeboards LIMIT $start, $postPerPage;";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt->fetchAll();

?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Designed Pagination</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php

        echo "<table class='table table-hover'>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
                <th>내용</th>
            </tr>
            ";

        foreach ($result as $row) {

            echo "
            <tr>
                <td>" . $row['idx'] . " </td>
                <td>" . $row['subject'] . " </td>
                <td>" . $row['author'] . " </td>
                <td>" . $row['rdate'] . " </td>
        
            ";
        }

        echo "</table>";

        $rs_str = pagination($totalPost, $postPerPage, $pageRange, $currentPage);

        echo $rs_str;
        ?>
    </div>
</body>

</html>