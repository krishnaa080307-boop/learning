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
    function myMessage()
    {
        echo "Hello world!";
    }

    myMessage();
    ?>
    <?php
    function familyName($fname)
    {
        echo "$fname Refsnes.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    ?>
    <?php
    function familyName($fname, $year)
    {
        echo "$fname Refsnes. Born in $year.<br>";
    }

    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983");
    ?>
    <?php
    function setHeight($height = 50)
    {
        echo "The height is : $height <br>";
    }

    setHeight(350);
    setHeight(); // will take the default value of 50
    ?>
</body>

</html>