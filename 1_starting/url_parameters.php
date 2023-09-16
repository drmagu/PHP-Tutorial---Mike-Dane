<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title></title>
    </head>
    <body>
        <h1>URL Parameters</h1>

            <form action="url_parameters.php" method="$_GET">
                Name: <input type="text" name="name" >  <br>
                <br>
                <input type="submit">
            </form>

            <br><br>

            
            <?php
                $name = $_GET['name'];
                $age = $_GET['age'];
                
                echo "You entered: $name <br>";
                echo "$name is $age years old <br>";
            ?>

    </body>
</html>