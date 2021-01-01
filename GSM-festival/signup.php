<?php

    $mysql_hostname = '127.0.0.1';
    $mysql_username = 'root';
    $mysql_password = 'shaki0920';
    $mysql_database = 'member';
    $mysql_port = '3306';

    $dsn = 'mysql:host='.$mysql_hostname.';dbname='.$mysql_database.';port='.$mysql_port;

    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $upws = $_POST['upws'];
    $name = $_POST['name'];
    $number = $_POST['number'];

    if($upw!=$upws){
        echo "<script>alert('패스워드가 서로 다릅니다')</script>";
        echo "<script>location.href='http://localhost/gsm_project/signuppage.php';</script>";
    }
    else{   
        try{

            $pdo = new PDO($dsn, $mysql_username, $mysql_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $stmt = $pdo->prepare("INSERT INTO user(uid, upw, upws, name, number) VALUES(:uid, :upw, :upws, :name, :number)");
            $stmt->bindParam(':uid', $uid, PDO::PARAM_STR);
            $stmt->bindParam(':upw', $upw, PDO::PARAM_STR);
            $stmt->bindParam(':upws', $upws, PDO::PARAM_STR);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':number', $number, PDO::PARAM_STR);
            $stmt->execute();

            echo "<script>alert('회원가입이 완료되었습니다!');</script>";
            echo "<script>location.href='../LoginPage.php';</script>";

        } catch (PDOException $e) {

            echo 'Connect failed : ' . $e->getMessage() . '';
            
        }
    }
?>