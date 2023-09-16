<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title></title>
    </head>
    <body>
        <h1>Functions</h1>

        <?php
            function greeting () {
                echo "Hello";
            }
        ?>
        <?= greeting() ?><br>

        <!-- default arguments supported -->
        <?php
            function greet ($name = 'Willy', $age = "???") {
                echo "Hello $name you are $age years young";
            }
        ?>
        <?= greet() ?><br>
        <?= greet("John", 20) ?><br>
        <?= greet("Dick", 13) ?><br>
        <?= greet("Harry", ) ?><br>


    </body>
</html>