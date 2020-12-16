<!DOCTYPE html>
<body>
    <?php
        echo $_GET['id'];
        //link 뒤에 php?id=내용 형식으로 적어주면
        //id의 값이 들어간다.
        //ex) http://localhost/study/form.php?id=dandan

        echo ', '.$_GET['password'];
        //http://localhost/study/form.php?id=dandan&password=0920
        //주소와 입력데이터는 ?로 나누고 값과 값은 &으로 구분
    ?>
</body>
</html>