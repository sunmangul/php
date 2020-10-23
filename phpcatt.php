<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        echo "Hello World <br>\n";
        
        echo date("Y-m-d") . "<br>";

        $a = 0123;      //8진수 123
        $a = 0x12;      //16진수 12
        $a = 1.2e3;     //1.2 * 1000

        $name = "단단한 고양이";
        $str = "나의 이름은 $name 입니다.<br>";
        $str .= "야옹<br>";
        $str .= "먀아~";

        echo $str . "<BR>"; $num = 9; $str = "Number: $num";
        echo $str . "<BR>"; $num = 9; $str = 'Number: $num';
        echo $str . "<BR>";

        $c[0]="abc";
        $c[1] ="def";
        $b['foo']=13;
        class Animal {
            var $Name;
            var $Age;
            var $leg;

            function Eat() {echo "먹는 행위를 함수로 정의<br>";}
            function Walk ( ) {echo "걷는 행위를 함수로 정의<br>";}
            function Work ( ) {echo "일하는 행위를 함수로 정의<br>";}
            function Talk ( $words ) {echo "$words 일하는 행위를 함수로 정의<br>";}
        }

        $tiger = new Animal;
        $tiger->Age = "17";
        $tiger->Eat();
        $tiger->Talk($tiger->Age);

        function Test($x)
        {
            for($i=0; $i<=$x; $i++)
            {
            $a = 0;
            echo "a = $a<br>";
            $a = $a + 1;
            echo "a = $a<br>";

            static $b = 0;
            echo "b = $b<br>";
            $b = $b + 1;

            echo "<br>";
            }
        }
        Test(3);

        define("cat", "nyan<br>");
        echo cat;

        $a = "안녕";
        $b = "하지";
        $c = $a.$b;
        $c .= " 못하겠다.";
        echo "$c<br><br>";

        $a = array("a" => "사과", "b" => "바나나");
        $b = array("a" =>"배", "b" => "딸기", "c" => "포도", "d" => "<br>");
        $c = $a + $b; 
        foreach($c as $value){echo $value."<br>";}

        $output = `is -al`;
        echo "<pre>$output</pre>";

        include "phpgc.php";
        $ppp = new Nyan;
        $ppp->hello();
    ?>
</body>
</html>