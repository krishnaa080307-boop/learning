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
    if (4 > 3) {
        echo "correct";
    }
    ?>
    <?php
    $t = 10;

    if ($t == 10) {
        echo "correct";
    }
    ?>
    <?php
    $a = 120;
    $b = 30;
    $c = 480;

    if ($a > $b && $a < $c) {
        echo "both are true";
    }
    ?>
    <?php
    $a = 4;
    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
        echo "$a is a number between 2 and 7";
    }
    ?>
    <?php
    $t = date("H");

    if ($t < "19") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
    <?php
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
    <?php
    $a = 4;
    if ($a < 10) $b = "hello";
    echo $b
    ?>
    <?php
    $a = 13;
    $b = $a < 10 ? "Hello" : "Good Bye";
    echo $b;
    ?>
    <?php
    $a = 13;
    if ($a > 10) {
        echo "above 10";
        if ($a > 20) {
            echo " and also above 20";
        } else {
            echo " but not above 20";
        }
    }
    ?>
</body>

</html>