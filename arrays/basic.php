<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title></title>
    </head>
    <body>
        <h1>Basic Array</h1>
        
        <?php
            $friends = array(
                "Kevin", "Karen", "Oscar", "Jim"
            );
            echo $friends;
        ?>
        <?= count($friends); ?>
        <br>
        <?= $friends[0]; ?><br>
        <?= $friends[3]; ?><br>
        <?= $friends[-1]; ?><br>
        <?php $friends[1] = "Dwight"; ?>
        <?= $friends[1]; ?><br>
        <?php $friends[1] = 42; ?>
        <?= $friends[1]; ?><br>
        <?php $friends[4] = "Angels"; ?>
        <?= $friends[4]; ?><br>
        Array <?= count($friends); ?>

    </body>
</html>