<?php
$file = 'txt\readme.txt';
echo file_get_contents($file);

file_put_contents($file, '<br /> 세상아 반가워');
//내용 추가 X 그냥 덮어씀

echo file_get_contents($file);
?>