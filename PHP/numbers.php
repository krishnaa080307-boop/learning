<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP NUMBERS</title>
</head>

<body>
    <h1 style="font-size: xx-large; text-align: center;">PHP NUMBERS</h1>
    <hr>
    <?php
    $a = 5;
    $b = 5.12;
    $c = "12";
    var_dump($a);
    var_dump($b);
    var_dump($c);
    ?>
    <?php
    $x = 53;
    var_dump(is_int($x));
    $y = 5.8;
    var_dump(is_int($y));
    ?>
    <?php
    $x = 53;
    var_dump(is_float($x));
    $y = 5.8;
    var_dump(is_float($y));
    ?>
    <?php
    $x = 1.8e41;
    var_dump(is_infinite($x));
    ?>
    <?php
    $x = 23465.768;
    echo intval($x);
    $x = "23465.768";
    echo intval($x);
    ?>
</body>

</html>