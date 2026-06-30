<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CASTING</title>
</head>

<body>
    <h1 style="font-size: xx-large; text-align: center;">PHP CASTING</h1>
    <hr>
    <h1>Cast to String</h1>
    <pre>
        <?php
        $a = 5;
        $b = 5.34;
        $c = "hello";
        $d = true;
        $e = NULL;

        $a = (string) $a;
        $b = (string) $b;
        $c = (string) $c;
        $d = (string) $d;
        $e = (string) $e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        ?>
    </pre>
    <hr>
    <h1>Cast to Integers</h1>
    <pre>
        <?php
        $a = 5;
        $b = 5.34;
        $c = "hello";
        $d = true;
        $e = NULL;

        $a = (int) $a;
        $b = (int) $b;
        $c = (int) $c;
        $d = (int) $d;
        $e = (int) $e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        ?>
    </pre>
    <hr>
    <h1>Cast to Float</h1>
    <pre>
        <?php
        $a = 5;
        $b = 5.34;
        $c = "hello";
        $d = true;
        $e = NULL;

        $a = (float) $a;
        $b = (float) $b;
        $c = (float) $c;
        $d = (float) $d;
        $e = (float) $e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        ?>
    </pre>
    <hr>
    <h1>Cast to Boolean</h1>
    <pre>
        <?php
        $a = 5;
        $b = 5.34;
        $c = "hello";
        $d = true;
        $e = NULL;
        $f = "";

        $$a = (bool) $a;
        $b = (bool) $b;
        $c = (bool) $c;
        $d = (bool) $d;
        $e = (bool) $e;
        $f = (bool) $f;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        ?>
    </pre>
    <hr>
    <h1>Cast to Array</h1>
    <pre>
        <?php
        $a = 5;
        $b = 5.34;
        $c = "hello";
        $d = true;
        $e = NULL;

        $a = (array) $a;
        $b = (array) $b;
        $c = (array) $c;
        $d = (array) $d;
        $e = (array) $e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        ?>
    </pre>
    <hr>
    <h1>Cast to Object</h1>
    <pre>
        <?php
        $a = 5;
        $b = 5.34;
        $c = "hello";
        $d = true;
        $e = NULL;

        $a = (object) $a;
        $b = (object) $b;
        $c = (object) $c;
        $d = (object) $d;
        $e = (object) $e;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        ?>
    </pre>
</body>

</html>