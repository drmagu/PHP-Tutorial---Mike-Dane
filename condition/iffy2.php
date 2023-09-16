<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>iffy2</title>
    </head>
    <body>

        <h1>If Statements (cont't)</h1>
        <hr>
        <!-- max statement -->
        <?= 'max($n1, $n2, $n3)' ?><br>
        <?= max(4, 5) ?><br>
        <?= max(4, 4) ?><br>
        <?= max(5, 5.0) ?><br>
        <?= max(4.99, 4) ?><br>
        <?= max("Hello", "Hello World") ?><br>
        <?= max("hello ", "halo") ?><br>
        <?= max(4, 5, 34) ?><br>

        <hr>
        <!-- min statement -->
        <?= 'min()' ?><br>
        <?= min(4, 5) ?><br>
        <?= min(4, 4) ?><br>
        <?= min(5, 5.0) ?><br>
        <?= min(4.99, 4) ?><br>
        <?= min("Hello", "Hello World") ?><br>
        <?= min("hello ", "halo") ?><br>
        <hr>

        <?php
            function myMax($n1=0, $n2=0, $n3=0) {
                if ($n1 >= $n2 && $n1 >= $n3) {
                    return $n1;
                } elseif ($n2 >= $n1 && $n2 >= $n3) {
                    return $n2;
                }
                return $n3;
            }
        ?>
        <!-- myMax statement -->
        <?= 'myMax($n1=0, $n2=0, $n3=0)' ?><br>
        <?= myMax(4, 5) ?><br>
        <?= myMax(4, 4) ?><br>
        <?= myMax(5, 5.0) ?><br>
        <?= myMax(4.99, 4) ?><br>
        <?= myMax("Hello", "Hello World") ?><br>
        <?= myMax("hello ", "halo") ?><br>
        <?= myMax(4, 5, 34) ?><br>
        <hr>



        
    </body>
</html>