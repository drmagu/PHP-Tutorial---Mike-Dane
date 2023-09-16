<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>setget</title>
    </head>
    <body>

        <h1>Getters & Setters</h1>

        <?php
            class Movie {
                public $title;
                private $rating;

                function __construct($title, $rating) {
                    $this->title = $title;
                    $this->rating = $this->set_rating($rating);
                }

                function get_rating() {
                    return $this->rating;
                }

                function set_rating($rating) {
                    $valid_ratings = Array ('G', 'PG', 'PG-13','R', 'X', 'NR');
                    $valid = in_array($rating, $valid_ratings);
                    if ($valid) {
                        return $rating;
                    } 
                    return 'NR';
                }
            }
        ?>

        <h4>Create a Movie</h4>
        <hr>
        <form action="setget.php" method="post">
            Title: <input type="text" name="title"><br>
            Rating: <input type="text" name="rating"><br>
            <input type="submit"><br>
        </form>
        <hr>

        <?php
            $title = $_POST["title"];
            $rating = $_POST["rating"];
            echo "$title <br>";
            echo "$rating <br>";
            $movie = new Movie($title, $rating);
        ?>

        <p>
            Movie "<?= $movie->title ?>" entered as "<?= $movie->get_rating() ?>".
        </p>

        
    </body>
</html>
