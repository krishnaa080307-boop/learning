<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP STRING FUNCTIONS</title>
</head>

<body>
    <h1 style="font-size: xx-large; text-align: center;">PHP STRING FUNCTIONS</h1>
    <hr>
    <h1>PHP strlen() Function</h1>
    <?php
    $x = "hello world!";
    echo strtoupper($x);
    ?>
    <?php
    $x = "hello world!";
    echo strtolower($x);
    ?>
    <?php
    $x = "hello world!";
    echo str_replace("world", "dolly", $x);
    ?>
    <?php
    $x = "hello world!";
    echo strrev($x);
    ?>
    <?php
    $x = "     hello world! ";
    echo trim($x);
    ?>
    <?php
    $x = "hello lovely world!";
    $y = explode(" ", $x);
    print_r($y);
    ?>
</body>

</html>