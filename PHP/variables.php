<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="font-size: xx-large; text-align: center;">PHP VARIABLES</h1>
    <hr>
    <h1>Create php variables</h1>
    <?php
    $x = 5;
    $y = "john";    
    echo $x;
    echo "<br>";
    echo $y;
    ?>
    <hr>
    <h1>Output variables</h1>
    <?php
    $txt = "w3schools";
    echo "i love $txt";
    ?>
    <hr>
    <h1>Variable types</h1>
    <?php
    var_dump(5);
    var_dump("TEXT");
    var_dump(3.14);
    var_dump("true");
    var_dump([2, 3, 56]);
    var_dump(NULL);
    ?>
    <hr>
    <h1>Multiple values</h1>
    <?php
    $x = $y = $z = "fruit";
    echo $x;
    echo $y;
    echo $z;
    ?>
</body>

</html>