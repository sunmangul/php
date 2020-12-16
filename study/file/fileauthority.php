<?php
$filename = 'txt\readme.txt';

if (is_readable($filename)) {
    echo 'The file is readable <br />';
} else {
    echo 'The file is not readable <br />';
}
//읽기 권한
if (is_writable($filename)) {
    echo 'The file is writable <br />';
} else {
    echo 'The file is not writable <br />';
}
//쓰기 권한
if (file_exists($filename)) {
    $filename = str_replace("txt\\", "", $filename);
    echo "The file $filename exists <br />";
} else {
    $filename = str_replace("txt\\", "", $filename);
    echo "The file $filename is not exists <br />";
}
//존재 여부
?>