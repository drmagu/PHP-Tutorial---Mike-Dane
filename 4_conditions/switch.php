<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>switch</title>
    </head>
    <body>

        <h1>Switch Statements</h1>


        <form action="switch.php" method="post">

            What was your grade? <br>
            <input type="text" name="grade">
            
            <br>
            <input type="submit">
        </form>
    
        <?php
            $grade = strtoupper($_POST["grade"]);
            $validGrades = ["A", "B", "C", "D", "F"];
            // echo $grade; 
            // echo strlen($grade);
            if (strlen($grade) > 2 || strlen($grade) < 1) {
                // echo "Invalid Grade";
                $msg = "Invalid Grade";
            } elseif (! in_array($grade[0], $validGrades )) {
                // echo "Invalid Grade";
                $msg = "Invalid Grade";
            } elseif ($grade[1] != '' && $grade[1] != '+' && $grade[1] != '-') {
                // echo "Invalid Grade"; 
                $msg = "Invalid Grade";
            } else {
                switch ($grade[0]) {
                    case "A":
                        $msg = "You did amazing!";
                        break;
                    case "B":
                        $msg = "You did pretty good.";
                        break;
                    case "C":
                        $msg = "You can do better.";
                        break;
                    case "D":
                        $msg = "You did poorly.";
                        break;
                    case "F":
                        $msg = "YOU FAIL!";
                        break;
                    default:
                        $msg = "Invalid";
                }
            }
        ?>
        Your grade is "<?= $grade ?>": <?= $msg ?>

    </body>
</html>