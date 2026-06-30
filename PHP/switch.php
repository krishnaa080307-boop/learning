<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SWITCH</title>
</head>

<body>
    <h1 style="font-size: xx-large; text-align: center;">PHP SWITCH</h1>
    <hr>
    <h1>PHP strlen() Function</h1>
    <?php
    $favcolor = "blue";
    switch ($favcolor) {
        case "red":
            echo "red";
            break;
        case "blue":
            echo "blue";
            break;
        case "green":
            echo "green";
            break;
        default:
            echo "neither red, blue, nor green!";
    }
    ?>
</body>

</html>