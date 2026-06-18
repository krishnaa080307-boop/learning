<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP COMMENTS</title>
</head>

<body>
    <h1 style="font-size: xx-large; text-align: center;">PHP COMMENTS</h1>
    <hr>
    <h1>Single line comments</h1>
    <p>// or #</p>
    <?php
    //output welcome message
    echo "Welcome Home!";
    ?>
    <hr>
    <h1>Multi line comment</h1>
    <p>/*  */</p>
    <?php
    /*the next statememt will print a welcome message */
    echo "Welcome Home!<br>";
    $x  = 5 /*+ 15*/ + 15;
    echo "  $x";
    ?>
    <hr>
</body>

</html>