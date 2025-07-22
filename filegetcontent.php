<?php
$content = file_get_contents("hello.txt");
echo $content;

$data = file_get_contents("example.txt", false, null, 5, 5);
echo $data;

?>
