<?php
$file = 'txt\readme.txt';
$newfile = 'txt\example.txt.bak';
$deletefile = 'txt\deleteme.txt';

//copy
if(!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
else{
    echo "successful\n";
}

//delete
if(!unlink($deletefile)) {
    echo "failed to delete $deletefile...\n";
}
else{
    echo "successful\n";
}

//php file function
?>
