<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CONSTANTS</title>
</head>

<body>
    <h1 style="font-size: xx-large; text-align: center;">PHP CONSTANTS</h1>
    <hr>
    <h1>PHP define() Function</h1>
    <?php
    define("GREETING", "Welcome to w3 schools");
    echo "GREETING";
    ?>
    <hr>
    <h1>PHP const Keyword</h1>
    <?php
    const GREETING = "Welcome to w3 schools";
    echo "GREETING";
    ?>
    <hr>
    <h1>PHP Array Constants</h1>
    <?php
    define("CARS", array("Volvo", "BMW", "Toyota"));
    echo CARS[0];
    echo "<br>";
    const ANIMALS = array("Cat", "Dog", "Horse");
    echo ANIMALS[1];
    ?>
</body>

</html>