<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>   
<body>
<?php
// var_dump($_FILES);
// exit;
ini_set("display_errors", "1");
$uploaddir = 'C:\Bitnami\wampstack-7.4.12-0\apache2\htdocs\study\file_upload\file\\';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}
echo '자세한 디버깅 정보입니다:';
print_r($_FILES);  //var_dump와 유사
print "</pre>";
?>
<img src = "file/<?=$_FILES['userfile']['name']?>"/>
</body>
</html>