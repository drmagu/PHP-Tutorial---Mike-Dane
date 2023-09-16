<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>methods</title>
    </head>
    <body>

        <h1>Object Functions</h1>
        <?php
            class Student {

                public $name;
                public $major;
                public $gpa;

                function __construct($name, $major, $gpa) {
                    $this->name = $name;
                    $this->major = $major;
                    $this->gpa = $gpa;
                }

                function hasHonors() {
                    if ($this->gpa >= 3.5) {
                        return true;
                    }
                    return false;
                }
            }
        ?>

        <?php 
            $stud1 = new Student("Jim", "Business", 2.8);
            $stud2 = new Student("Pam", "Art", 3.6);
        ?>

        <?php 
            function checkHonors($stud) {
                echo $stud->name; echo "<br>";
                if ($stud->hasHonors()) {
                    echo "$stud->name has honors<br>";    
                } else {
                    echo "no honors for $stud->name <br>"; 
                }
            }
        ?>

        <?php
            checkHonors($stud2);
            checkHonors($stud1);
        ?>
        
    </body>
</html>