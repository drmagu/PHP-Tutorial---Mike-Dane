<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>while</title>
    </head>
    <body>

        <h1>While Loops</h1>
        <hr>
        Regular while (count up to 5)<br>
        <?php

            $index = 1;
            while ($index <= 5) {
                echo "$index ... ";
                $index++;
            }
        ?>
        <br>
        <hr>        
        do {} while while (execute at least one time)<br>
        <?php

            $index = 6;
            do {
                echo "$index ... ";
                $index++;
            } while ($index <= 5);
        ?>
        <br>
        <hr>        

    </body>
</html>