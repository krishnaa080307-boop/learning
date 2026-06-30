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
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    ?>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo $cars[0];
    ?>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    $cars[1] = "Ford";
    var_dump($cars);
    ?>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");

    foreach ($cars as $x) {
        echo "$x <br>";
    }
    ?>
    <?php
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    var_dump($car);
    ?>

</body>

</html>