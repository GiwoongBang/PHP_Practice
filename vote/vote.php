<?php

$vote = isset($_GET['vote']) && $_GET['vote'] != '' ? $_GET['vote'] : '';

if ($vote == '') {
    exit;
}

$filename = './voteResult/ajax_vote.txt';

if (!file_exists($filename)) {
    file_put_contents($filename, "0,0");
}

$content = file_get_contents($filename);
list($yes, $no) = explode(",", $content);

if ($vote == 0) {
    $yes++;
} else if ($vote == 1) {
    $no++;
}
file_put_contents($filename, "$yes,$no");

$yes_width = round(($yes / ($yes + $no)) * 100);
$no_width = round(($no / ($yes + $no)) * 100);

echo "YES: " . $yes . " VS NO : " .$no . "<br>";
?>

<h2>투표 결과</h2>

<table>
    <tr>
        <td>Yes</td>
        <td width="100"><img src="https://www.w3schools.com/php/poll.gif" height="20" width="<?=$yes_width?>%"></td>
        <td><?= $yes_width ?>%</td>
    </tr>
    <tr>
        <td>No</td>
        <td><img src="https://www.w3schools.com/php/poll.gif" height="20" width="<?=$no_width?>%"></td>
        <td><?= $no_width ?>%</td>
    </tr>
</table>