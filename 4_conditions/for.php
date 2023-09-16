<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>for</title>
    </head>
    <body>

        <h1>For Loops</h1>
        <hr>
        while (count up to 5)<br>
        <?php
            $index = 1;
            while ($index <= 5) {
                echo "$index ... ";
                $index++;
            }
        ?>
        <hr>
        for loop (count up to 5)<br>
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "$i ... ";
            }
        ?>
        <hr>
        loop over array<br>
        <?php 
            $primes = array(2, 3, 5, 7, 9, 11, 13);
            for ($i = 1; $i < count($primes); $i++) {
                echo "$primes[$i] ... ";
            }
        ?>
        <hr>

    </body>
</html>