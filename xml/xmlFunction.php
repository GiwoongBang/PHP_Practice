<?php

$myxml = file_get_contents('https://feeds.feedburner.com/zdkorea');

$xmldom = simplexml_load_string($myxml);

echo "<h1>" . $xmldom->channel->title . "</h1>";
echo "<h2>" . $xmldom->channel->description . "</h2>";

foreach ($xmldom->channel->item as $row) {
    echo "<a href='" . $row->link . "'>" . $row->title . "</a> ["
        . $row->pubDate . "]</br>";
}