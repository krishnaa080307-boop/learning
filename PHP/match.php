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
    $favcolor = "red";

    $text = match ($favcolor) {
        "red" => "Your favorite color is red!",
        "blue" => "Your favorite color is blue!",
        "green" => "Your favorite color is green!",
        default => "Your favorite color is neither red, blue, nor green!",
    };

    echo $text;
    ?>
    <?php
    $d = 3;

    $text = match ($d) {
        1, 2, 3, 4, 5 => "The week feels so long!",
        6, 0 => "Weekends are best!",
        default => "Invalid day",
    };

    echo $text;
    ?>
    <?php
    $favcolor = "pink";

    try {
        $text = match ($favcolor) {
            "red" => "Your favorite color is red!",
            "blue" => "Your favorite color is blue!",
            "green" => "Your favorite color is green!",
        };
    } catch (\UnhandledMatchError $e) {
        var_dump($e);
    }

    echo $text;
    ?>
</body>

</html>