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
$x = "Hello World!";
echo substr($x, 6, 5);
echo "<br>";
echo substr($x, 6);
?> 
<?php
$x = "Hello World!";
echo substr($x, -5, 3);
?> 

<?php
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?>
    </body>
    </html>