<!DOCTYPE html>
<body>
    <?php
        if($_POST['id'] === 'dandan' && $_POST['password'] === '0920'){
            echo $_POST['id'].', '.$_POST['password'];
            echo "<br />".$_POST['grade'];
        } else {
            echo 'wrong';
        }
        //포스트 방식은 겟과 다르게 url에 입력된 값이 나오지 않는다.
    ?>
</body>
</html>