<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="post_data.php">
        <fieldset style = "width:150px">
            <legend>로그인</legend>
                아이디 :  <input type="text" name="id" /><br><br>
                패스워드 :  <input type="password" name="password" /><br><br>
                학번 :  <input type="text" name="grade"
                        pattern = "\d{1}\-\d{1}\-\d{2}"
                        title = "1-2-36 형식으로 입력해주세요." /><br><br>
                <input type="submit" value="로그인"/>
                <input type="reset" value="초기화"/>
        </fieldset>
    </form>
</body>
</html>