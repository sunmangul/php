<?php 

    $mysql_hostname = '127.0.0.1';
    $mysql_username = 'root';
    $mysql_password = 'password';
    $mysql_database = 'member';
    $mysql_port = '3306';

    $dsn = 'mysql:host='.$mysql_hostname.';dbname='.$mysql_database.';port='.$mysql_port;

    $login_id = $_POST['uid'];
    $login_pw = $_POST['upw'];

    try{

        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $pdo->prepare("SELECT * FROM user WHERE uid=:uid");
        $stmt->bindParam(':uid', $login_id, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // PDO::FETCH_ASSOC : 칼럼명이 키인 연관 배열을 반환합니다.

        if($login_id==$row['uid'] && $login_pw==$row['upw']){

            echo "<script>alert('로그인 되었습니다!');</script>";

        }else{

            echo "<script>alert('아이디와 비밀번호를 확인해주세요.');</script>";

        }

    } catch (PDOException $e) {

        echo 'Connect failed : ' . $e->getMessage() . '';
        
    }

?>
