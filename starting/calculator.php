<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title></title>
    </head>
    <body>
        <h1>Simple Calculator</h1>


        <form action = "calculator.php", method="get">
            <input type="number" name="n1">
            <br>
            <input type="number" name="n2">
            <br>
            <input type="submit">
        </form>
        
        Answer: <?php echo $_GET["n1"] + $_GET["n2"]; ?>

    </body>
</html>