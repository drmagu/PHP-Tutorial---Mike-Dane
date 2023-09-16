<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title></title>
    </head>
    <body>
        <h1>Check Boxes</h1>
        <strong>Which fruits do you like?</strong><br>
        Select any<br><br>
        
        <form action="checkbox.php" method="post">
                Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
                Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
                Pears: <input type="checkbox" name="fruits[]" value="pears"><br>

            <br><input type="submit">
        </form>

        <?php
            $fruits = $_POST["fruits"]    
        ?>
        <br>
        <?= $fruits ?> <?= count($fruits) ?>
        <br>
        <?= $fruits[0] ?>
        <hr>


    </body>
</html>