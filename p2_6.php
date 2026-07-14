body<html lang ="en">
    <body>
        <?php
        function calculate($num1,$num2, $op)
        {
            switch($op)
        
            case; "+";
                return $num1 + $num2;
            case: "-";
                 return $num1 - $num2;
            case: "*";
                 return $num1 * $num2;
            case: "/";
                 return  $num2 != 0? $num1 / $num2: "cannot divid by zero";
            default;
                    return "Invalid operation;
        }
        if(insert(POST['submit']))
        {
            $n1 = $_POST['NUM1'];
            $n2 = $_POST['NUM2'];
            $op = $_POST['operation'];

            $result = calcualate($n1, $n2, $op);
            echo "<h3> result: $result</h3>"
        }
        ?>
    </body>
</html>