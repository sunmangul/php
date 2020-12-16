<?php
$dir = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1); //정렬순서가 정반대가 됨

print_r($files1);
print_r($files2);
?>