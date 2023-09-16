<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>associate</title>
    </head>
    <body>
        <h1>Associative Arrays</h1>
        <!-- grades str => str -->
        <?php
            $grades = array(
                "Tom" => "A+", "Dick" => "B-", "Harry" => "C+"
            );
            echo count($grades);
        ?>
        <hr>
        <?= $grades ?><br>
        <?= $grades["Dick"] ?><br>
        <?php $grades["Dick"] = "F" ?>
        <?= $grades["Dick"] ?><br>
        <hr>
        <?php
            $items = array(
                1 => "Milk", 2 => "Butter", 3 => "Cream", "answer" => 42
            );
            echo count($items);
        ?>
        <hr>
        <?= $items[2] ?><br>
        <?= $items['answer'] ?><br>
        <hr>
        <p>Check your grades</p>
        <form action="associate.php" method="post">
            Your name: <input type="text" name="student">
            <br>
            <br><input type="submit">
        </form>
        <?php
            $student = $_POST['student'];
            echo "$student has a grade of $grades[$student]";

        ?>




    </body>
</html>