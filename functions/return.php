<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>Return Statement</h1>

        <p>Cube Function</p>
        <?php
            function cube($number = 2) {
                echo "number: $number => ";
                return $number * $number * $number;
            }
        ?>
        <?= cube() ?><br>
        <?= cube(3) ?><br>
        <?= cube(4) ?><br>
        <?= cube(5) ?><br>
        
    </body>
</html>