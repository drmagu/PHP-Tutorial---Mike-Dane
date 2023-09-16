<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>call_user_func</title>
    </head>
    <body>

        <h1>Better Calculator</h1>

        <form action="calc.php" method="post">
            Num1: <input type="number" step="0.001" name="n1"><br>
            OP: <input type="text" name="op"><br>
            Num2: <input type="number" step="0.001" name="n2"><br>
            <input type="submit">
        </form>

        <?php
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $op = $_POST["op"];

            // echo $n1; echo ' ';
            // echo $op; echo ' ';
            // echo $n2; echo ' ';



            if ($op == '+') {
                $calc = $n1 + $n2;
                $result = "$n1 + $n2 = $calc";
            } elseif ($op == '-') {
                $calc = $n1 - $n2;
                $result = "$n1 - $n2 = $calc";
            } elseif ($op == '*') {
                $calc = $n1 * $n2;
                $result = "$n1 * $n2 = $calc";
            } elseif ($op == '/' && $n2 != 0) {
                $calc = $n1 / $n2;
                $result = "$n1 / $n2 = $calc";
            } elseif ($op == '/' && $n2 == 0) {
                $result = "division by '0' is not allowed";
            }
            else {
                $result = "invalid operator only ('+' '-' '*' '/') allowed";
            }
    
        ?>
        <br>
        Result: <?= $result ?>

        
    </body>
</html>