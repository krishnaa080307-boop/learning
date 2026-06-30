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
    echo strlen("hello world!");
    ?>
    <hr>
    <h1>PHP str_word_count() Function</h1>
    <?php
    echo str_word_count("hello world!");
    ?>
    <hr>
    <h1>PHP str_contains() Function</h1>
    <?php
    $txt = "i love PHP!";
    var_dump(str_contains($txt, "love"));
    ?>
    <hr>
    <h1>PHP strpos() Function</h1>
    <?php
    echo strpos("hello world!", "world");
    ?>
    <hr>
    <h1>PHP str_starts_with() Function</h1>
    <?php
    $txt = "i love PHP!";
    var_dump(str_starts_with($txt, "i love"));
    ?>
    <hr>
    <h1>PHP str_ends_with() Function</h1>
    <?php
    $txt = "i love PHP!";
    var_dump(str_ends_with($txt, "PHP!"));
    ?>
    <hr>
</body>

</html>