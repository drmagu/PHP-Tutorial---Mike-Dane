<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title></title>
    </head>
    <body>
        <h1>Mad Lib</h1>

            <form action="madlib.php" method="$_GET">
                Color: <input type="text" name="color" >  <br>
                Plural Noun: <input type="text" name="noun" > <br>
                Celebrity: <input type="text" name="celeb" > <br>
                <br>
                <input type="submit">
            </form>

            <br><br>

            
            <?php
                $color = $_GET['color'];
                $noun = $_GET['noun'];
                $celeb = $_GET['celeb'];

                echo "Roses are $color <br>";
                echo $noun . "s are blue <br>";
                echo "I love $celeb <br>";
            ?>

    </body>
</html>