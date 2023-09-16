<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>conditionals</title>
    </head>
    <body>

        <h1>If Statements</h1>

        <?php
            $isMale = true;
            $isMale = false;
            
            $isTall = true;
            $isTall = false;

            if ($isMale && $isTall) {
                echo "You are a tall male"; echo "<br>";
            } elseif ($isMale && ! $isTall) {
                echo "You are a short male"; echo "<br>";
            } elseif (! $isMale && $isTall) {
                echo "You are a tall person"; echo "<br>";
            } else {
                echo "You are not male, and not tall";
            }
        ?>

        
    </body>
</html>