<!DOCTYPE html>

<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <title> work</title>
    </head>
    <body>
    <br>
        <a href="./index.php">index</a>
        <br>
        <a href="./index.php">file</a>
    <?php
    echo readfile("./examples/superGlobals.md");
    ?>
    </body>
</html>
