<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="POSTupload.php" enctype="multipart/form-data">
        <input type="hidden" value="30000" name="MAX_FILE_SIZE" />
        <input type="file" name="userfile" />
        <input type="submit" value="upload" />
    </form>
</body>
</html>