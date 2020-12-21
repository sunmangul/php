<html>
<body>
    <?php
        //    ==사용
        echo "1==2 : ";
        var_dump(1==2);
        echo '<br />';

        echo "1==1 : ";
        var_dump(1==1);
        echo '<br />';

        echo '"one"=="two" : ';
        var_dump("one"=="two");
        echo '<br />';

        echo '"one"=="one" : ';
        var_dump("one"=="one");
        echo '<br /><br />';

        //    !=사용
        echo "1!=2 : ";
        var_dump(1!=2);
        echo '<br />';

        echo "1!=1 : ";
        var_dump(1!=1);
        echo '<br />';

        echo '"one"!="two" : ';
        var_dump("one"!="two");
        echo '<br />';

        echo '"one"!="one" : ';
        var_dump("one"!="one");
        echo '<br /><br />';
        
        echo "1 == '1' : ";
        var_dump(1 == '1');         //==은 형태가 같으면 됨
        echo "<br />1 === '1' : ";
        var_dump(1 === '1');        //===은 자료형까지 같아야 됨
    ?>
</body>
</html>