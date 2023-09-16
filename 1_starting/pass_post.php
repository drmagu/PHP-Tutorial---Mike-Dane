<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title></title>
    </head>
    <body>
        <h1>Post vs Get</h1>
        <h2>This form uses "Post"</h2>

            <form action="pass_post.php" method="post">
                Password: <br>
                <input type="password" name="password" >  <br>
                <br>
                <input type="submit">
            </form>

            <br><br>

            
            <?php
                $password = $_POST['password'];
                
                echo "You entered: $password <br>";

            ?>

    </body>
</html>